<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;
use \core\ParamUtils;
use \core\Messages;
use \core\Message;
use core\RoleUtils;
use core\App;

class ImageToDoCtrl
{
    private $messages;
    public function __construct()
    {

        $this->messages = new Messages();
    }

    public function readFromDB()
    {
        // Pobierz wszystkie dane z bazy danych
        $records = App::getDB()->select("images", "*");

        $total = count($records);
        App::getSmarty()->assign('data', $records);
        App::getSmarty()->assign('total', $total);
    }

    public function action_showImages()
    {
        $this->readFromDB();
        //wygeneruj widok
        $this->generateView();
    }
    public function generateView()
    {
        App::getSmarty()->display('ImageToDoView.tpl');
    }

    public function action_addImage()
    {
        $url = ParamUtils::getFromRequest('url');
        $date = date("Y-m-d H:i:s");

        App::getDB()->insert("images", [
            "Url" => $url,
            "Date" => $date
        ]);


        $this->messages->addMessage(new Message('Image added', Message::INFO));
        App::getSmarty()->assign('msgs', $this->messages);
        // Przekieruj na stronę wyświetlającą zadania, żeby przy odświeżeniu nie dublować dodanych zadań
        App::getRouter()->redirectTo("showImages");
    }

    public function action_removeImage()
    {
        $id = ParamUtils::getFromRequest('id');

        App::getDB()->delete("images", [
            "id" => $id
        ]);

        // Przekieruj na stronę wyświetlającą zadania, żeby przy odświeżeniu nie dublować dodanych zadań
        App::getRouter()->redirectTo("showImages");
    }

}
