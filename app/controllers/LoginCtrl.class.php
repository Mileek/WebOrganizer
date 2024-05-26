<?php

namespace app\controllers;

use app\transfer\User;
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

    public function getParams()
    {
        // 1. pobranie parametrów
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('password');
    }

    public function validate()
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
                $this->messages->addMessage(new Message('Nie podano loginu', Message::ERROR));
            }

            if ($this->form->pass == "") {
                $this->messages->addMessage(new Message('Nie podano hasła', Message::ERROR));
            }
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (!$this->messages->isError()) {

            // sprawdzenie, czy dane logowania poprawne
            // (takie informacje najczęściej przechowuje się w bazie danych)
            if ($this->form->login == "admin" && $this->form->pass == "admin") {
                RoleUtils::addRole('admin');

            } else if ($this->form->login == "user" && $this->form->pass == "user") {
                RoleUtils::addRole('user');

            } else {
                $this->messages->addMessage(new Message('Niepoprawny login lub hasło', Message::ERROR));
            }
        }

        return !$this->messages->isError();
    }

    public function action_generateView()
    {
        App::getSmarty()->display("LoginView.tpl");
    }

    public function action_login()
    {

        $this->getParams();

        if ($this->validate()) {
            //zalogowany => przekieruj na stronę główną, gdzie uruchomiona zostanie domyślna akcja
            App::getRouter()->redirectTo("showTasks");
        } else {
            //niezalogowany => wyświetl stronę logowania
            $this->action_generateView();
            $this->messages->addMessage(new Message('Nie poprawny login i/lub hasło.', Message::ERROR));
        }

    }

    public function action_logout()
    {
        // 1. zakończenie sesji - tylko kończymy, jesteśmy już podłączeni w init.php
        session_destroy();

        // 2. wyświetl stronę logowania z informacją
        $this->messages->addMessage(new Message('Poprawnie wylogowano z systemu', Message::INFO));

        App::getRouter()->redirectTo("generateView");
    }
}