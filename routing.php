<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('generateView'); #default action
// App::getRouter()->setDefaultRoute('hello'); #default action
//App::getRouter()->setLoginRoute('accessdenied'); #action to forward if no permissions
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions


Utils::addRoute('generateView', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');

Utils::addRoute('hello', 'HelloCtrl');
Utils::addRoute('hello', 'HelloCtrl');
//Utils::addRoute('action_name', 'controller_class_name');

Utils::addRoute('showdata', 'DataCtrl', ["user", "admin"]);
Utils::addRoute('cleardata', 'DataCtrl', ["admin"]);