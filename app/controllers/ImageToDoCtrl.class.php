<?php

namespace app\controllers;


use app\forms\ToDoImageForm;
use \core\ParamUtils;
use \core\Messages;
use core\App;

class ImageToDoCtrl
{
    private $messages;
    private $todoImageForm;
    public function __construct()
    {
        $this->messages = new Messages();
        $this->todoImageForm = new ToDoImageForm();
    }

    private function readFromDB()
    {
        // Pobierz wszystkie dane z bazy danych
        $records = App::getDB()->select("images", "*");

        $this->todoImageForm->total = count($records);
        App::getSmarty()->assign('data', $records);
        App::getSmarty()->assign('total', $this->todoImageForm->total);
    }

    public function action_showImages()
    {
        //odczytaj dane z bazy i przypisz do smarty
        $this->readFromDB();
        //wygeneruj widok
        $this->generateView();
    }
    private function generateView()
    {
        App::getSmarty()->display('ImageToDoView.tpl');
    }

    public function action_addImage()
    {
        $this->insertToDB();

        //Przekieruj na stronę wyświetlającą zadania, żeby przy odświeżeniu nie dublować dodanych zadań
        App::getRouter()->redirectTo("showImages");
    }

    public function action_removeImage()
    {
        $this->todoImageForm->id = ParamUtils::getFromRequest('id');

        App::getDB()->delete("images", [
            "id" => $this->todoImageForm->id
        ]);

        // Przekieruj na stronę wyświetlającą zadania, żeby przy odświeżeniu nie dublować dodanych zadań
        App::getRouter()->redirectTo("showImages");
    }

    private function insertToDB()
    {
        $this->todoImageForm->url = ParamUtils::getFromRequest('url');
        $this->todoImageForm->date = date("Y-m-d H:i:s");

        App::getDB()->insert("images", [
            "Url" => $this->todoImageForm->url,
            "Date" => $this->todoImageForm->date
        ]);
    }
}
