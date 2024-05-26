<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('generateLoginView'); #default action

//Login
Utils::addRoute('generateLoginView', 'LoginCtrl');
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