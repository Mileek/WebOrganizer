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
        // Pobierz dane z bazy danych
        $records = App::getDB()->select("tasks", "*");

        App::getSmarty()->assign('data', $records);
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
}
