<?php

namespace app\controllers;

use app\forms\LoginForm;
use \core\ParamUtils;
use \core\Messages;
use \core\Message;
use core\RoleUtils;
use core\App;

class LoginCtrl
{
    private $form;
    private $messages;

    public function __construct()
    {
        //Tworzenie obiektów
        $this->form = new LoginForm();
        $this->messages = new Messages();
    }

    private function getParams()
    {
        // pobranie parametrów
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('password');
    }

    private function validate()
    {
        // sprawdzenie, czy parametry zostały przekazane
        if (!(isset($this->form->login) && isset($this->form->pass))) {
            // sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false;
        }

        // nie ma sensu walidować dalej, gdy brak parametrów
        if (!$this->messages->isError()) {

            // sprawdzenie, czy potrzebne wartości zostały przekazane
            if ($this->form->login == "") {
                $this->messages->addMessage(new Message('No username provided', Message::ERROR));
            }

            if ($this->form->pass == "") {
                $this->messages->addMessage(new Message('No password provided', Message::ERROR));
            }
        }

        if (!$this->messages->isError()) {
            //sprawdzanie czy user albo email istnieje w bazie, bo użytkownik może się zarówno loginować po emailu jak i po nazwie użytkownika
            $user = App::getDB()->select("users", "*", [
                "OR" => [
                    "UserName" => $this->form->login,
                    "Email" => $this->form->login,
                ],
            ]);

            // sprawdzenie, czy dane logowania poprawne
            if ($user && $this->form->pass == $user[0]['Password']) {
                RoleUtils::addRole('admin');//Każdy jest adminem, można to poprawić, ale narazie nie mam obsługi dla usera/admina

            } else {
                $this->messages->addMessage(new Message('Incorrect login or password', Message::ERROR));
            }
        }

        return !$this->messages->isError();
    }

    public function action_generateLoginView()
    {
        $this->generateView();
    }
    private function generateView()
    {
        App::getSmarty()->display("LoginView.tpl");
    }

    public function action_login()
    {
        $this->getParams();

        if ($this->validate()) {
            //zalogowany to przekieruj na stronę główną, gdzie uruchomiona zostanie domyślna akcja
            App::getRouter()->redirectTo("showTasks");
        } else {
            //niezalogowany to wyświetl stronę logowania
            $this->messages->addMessage(new Message('Incorrect login and/or password', Message::ERROR));
        }
        if ($this->messages->isError() || $this->messages->isInfo() || $this->messages->isWarning()) {
            App::getSmarty()->assign('msgs', $this->messages);
            $this->generateView();
        }
    }

    public function action_logout()
    {
        // 1. zakończenie sesji - tylko kończymy, jesteśmy już podłączeni w init.php
        session_destroy();

        // 2. wyświetl stronę logowania z informacją
        $this->messages->addMessage(new Message('You have successfully logged out. See you soon', Message::ERROR));
        App::getSmarty()->assign('msgs', $this->messages);

        $this->generateView();
    }
}