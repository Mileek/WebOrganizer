<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;
use \core\ParamUtils;
use \core\Messages;
use \core\Message;
use core\RoleUtils;
use core\App;

class ToDoCtrl
{
    public function __construct()
    {

    }

    public function readFromDB()
    {
        // Pobierz wszystkie dane z bazy danych
        $records = App::getDB()->select("tasks", "*");

        $total = count($records);
        $completed = count(array_filter($records, function ($record) {
            return $record['IsCompleted'] == true;
        }));
        $incomplete = $total - $completed;

        App::getSmarty()->assign('data', $records);
        App::getSmarty()->assign('total', $total);
        App::getSmarty()->assign('completed', $completed);
        App::getSmarty()->assign('incomplete', $incomplete);
    }

    public function action_showTasks()
    {
        $this->readFromDB();
        //wygeneruj widok
        $this->generateView();
    }
    public function generateView()
    {
        App::getSmarty()->display('ToDoView.tpl');
    }

    public function action_addTask()
    {
        $task = ParamUtils::getFromRequest('task');
        $date = date("Y-m-d H:i:s");

        App::getDB()->insert("tasks", [
            "IsCompleted" => false,
            "Description" => $task,
            "Date" => $date
        ]);

        // Przekieruj na stronę wyświetlającą zadania, żeby przy odświeżeniu nie dublować dodanych zadań
        App::getRouter()->redirectTo("showTasks");
    }

    public function action_markCompleted()
    {
        $id = ParamUtils::getFromRequest('id');
        $currentComplete = ParamUtils::getFromRequest('currentComplete');

        // Konwertuj string "0" lub "1" na boolean
        $currentComplete = (bool) $currentComplete;

        App::getDB()->update("tasks", [
            "IsCompleted" => !$currentComplete,
        ], [
            "id" => $id
        ]);

        // Przekieruj na stronę wyświetlającą zadania, żeby przy odświeżeniu nie dublować dodanych zadań
        App::getRouter()->redirectTo("showTasks");
    }

    public function action_removeTask()
    {
        $id = ParamUtils::getFromRequest('id');

        App::getDB()->delete("tasks", [
            "id" => $id
        ]);

        // Przekieruj na stronę wyświetlającą zadania, żeby przy odświeżeniu nie dublować dodanych zadań
        App::getRouter()->redirectTo("showTasks");
    }

}
