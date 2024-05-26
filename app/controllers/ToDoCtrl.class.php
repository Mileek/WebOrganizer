<?php

namespace app\controllers;

use app\forms\ToDoForm;
use \core\ParamUtils;
use \core\Messages;
use core\App;

class ToDoCtrl
{

    private $messages;
    private $todoForm;
    public function __construct()
    {
        $this->messages = new Messages();
        $this->todoForm = new ToDoForm();
    }

    private function readFromDB()
    {
        // Pobierz wszystkie dane z bazy danych
        $records = App::getDB()->select("tasks", "*");

        $this->todoForm->total = count($records);
        $this->todoForm->completed = count(array_filter($records, function ($record) {
            return $record['IsCompleted'] == true;
        }));
        $this->todoForm->incompleted = $this->todoForm->total - $this->todoForm->completed;

        App::getSmarty()->assign('data', $records);
        App::getSmarty()->assign('total', $this->todoForm->total);
        App::getSmarty()->assign('completed', $this->todoForm->completed);
        App::getSmarty()->assign('incomplete', $this->todoForm->incompleted);
    }

    public function action_showTasks()
    {
        //pobierz dane z bazy danych
        $this->readFromDB();
        //wygeneruj widok
        $this->generateView();
    }

    private function generateView()
    {
        App::getSmarty()->display('ToDoView.tpl');
    }

    public function action_addTask()
    {
        $this->todoForm->task = ParamUtils::getFromRequest('task');
        $this->todoForm->date = date("Y-m-d H:i:s");

        App::getDB()->insert("tasks", [
            "IsCompleted" => false,
            "Description" => $this->todoForm->task,
            "Date" => $this->todoForm->date
        ]);
        //przekierowanie do URL uniemożliwia wyświetlanie komunikatów :(
        // Przekieruj na stronę wyświetlającą zadania, żeby przy odświeżeniu nie dublować dodanych zadań
        App::getRouter()->redirectTo("showTasks");
    }

    public function action_markCompleted()
    {
        $this->todoForm->id = ParamUtils::getFromRequest('id');
        $this->todoForm->currentCompleted = ParamUtils::getFromRequest('currentComplete');

        // Konwertuj string "0" lub "1" na boolean
        $this->todoForm->currentCompleted = (bool) $this->todoForm->currentCompleted;

        App::getDB()->update("tasks", [
            "IsCompleted" => !$this->todoForm->currentCompleted,
        ], [
            "id" => $this->todoForm->id
        ]);

        // Przekieruj na stronę wyświetlającą zadania, żeby przy odświeżeniu nie dublować dodanych zadań
        App::getRouter()->redirectTo("showTasks");
    }

    public function action_removeTask()
    {
        $this->todoForm->id = ParamUtils::getFromRequest('id');

        App::getDB()->delete("tasks", [
            "id" => $this->todoForm->id
        ]);

        // Przekieruj na stronę wyświetlającą zadania, żeby przy odświeżeniu nie dublować dodanych zadań
        App::getRouter()->redirectTo("showTasks");
    }

}
