<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('generateView'); #default action
// App::getRouter()->setDefaultRoute('hello'); #default action
//App::getRouter()->setLoginRoute('accessdenied'); #action to forward if no permissions
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

//Login
Utils::addRoute('generateView', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');

//Register User
Utils::addRoute('register', 'RegisterCtrl');
Utils::addRoute('createUser', 'RegisterCtrl');


//ToDoCtrl
Utils::addRoute('showTasks', 'ToDoCtrl', ["user", "admin"]);
Utils::addRoute('addTask', 'ToDoCtrl', ["user", "admin"]);
Utils::addRoute('markCompleted', 'ToDoCtrl', ["user", "admin"]);
Utils::addRoute('removeTask', 'ToDoCtrl', ["user", "admin"]);

//Image ToDoCtrl
Utils::addRoute('showImages', 'ImageToDoCtrl', ["user", "admin"]);
Utils::addRoute('addImage', 'ImageToDoCtrl', ["user", "admin"]);
Utils::addRoute('removeImage', 'ImageToDoCtrl', ["user", "admin"]);