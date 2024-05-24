<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;
use \core\ParamUtils;
use \core\Messages;
use \core\Message;

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
        $this->form->pass = ParamUtils::getFromRequest('pass');
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

                //sesja już rozpoczęta w init.php, więc działamy ...
                //$user = new User($this->form->login, 'admin');
                // zaipsz obiekt użytkownika w sesji
                //$_SESSION['user'] = serialize($user);
                // dodaj rolę użytkownikowi (jak wiemy, zapisane też w sesji)
                //addRole($user->role);

            } else if ($this->form->login == "user" && $this->form->pass == "user") {

                //sesja już rozpoczęta w init.php, więc działamy ...
                //$user = new User($this->form->login, 'user');
                // zaipsz obiekt użytkownika w sesji
                //$_SESSION['user'] = serialize($user);
                // dodaj rolę użytkownikowi (jak wiemy, zapisane też w sesji)
                //addRole($user->role);

            } else {
                $this->messages->addMessage(new Message('Niepoprawny login lub hasło', Message::ERROR));
            }
        }

        return !$this->messages->isError();
    }

    // public function action_login()
    // {

    //     $this->getParams();

    //     if ($this->validate()) {
    //         //zalogowany => przekieruj na stronę główną, gdzie uruchomiona zostanie domyślna akcja
    //         header("Location: " . getConf()->app_url . "/");
    //     } else {
    //         //niezalogowany => wyświetl stronę logowania
    //         $this->generateView();
    //     }

    // }

    // public function action_logout()
    // {
    //     // 1. zakończenie sesji - tylko kończymy, jesteśmy już podłączeni w init.php
    //     session_destroy();

    //     // 2. wyświetl stronę logowania z informacją
    //     getMessages()->addInfo('Poprawnie wylogowano z systemu');

    //     $this->generateView();
    // }

    public function generateView()
    {

        getSmarty()->assign('page_title', 'Strona logowania');
        getSmarty()->assign('form', $this->form);
        getSmarty()->display('LoginView.tpl');
    }
}