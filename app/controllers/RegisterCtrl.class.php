<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;
use \core\ParamUtils;
use \core\Messages;
use \core\Message;
use core\RoleUtils;
use core\App;
use core\Validator;

class RegisterCtrl
{
    private $form;
    private $messages;

    public function __construct()
    {
        //Tworzenie obiektów
        $this->form = new LoginForm();
        $this->messages = new Messages();
    }

    public function action_register()
    {
        App::getSmarty()->display('RegisterView.tpl');
    }

    public function validateFromDB()
    {
        $userNames = App::getDB()->select("users", "*", [
            "UserName" => $this->form->login,
        ]);

        $userExists = count($userNames);
        if ($userExists != 0) {
            $this->messages->addMessage(new Message('User with this username already exists', Message::ERROR));
        }

        $userEmails = App::getDB()->select("users", "*", [
            "Email" => $this->form->email,
        ]);

        $emailExists = count($userEmails);
        if ($emailExists != 0) {
            $this->messages->addMessage(new Message('User with this email already exists', Message::ERROR));
        }
    }

    public function action_createUser()
    {
        $this->validateAndAssign();

        $this->validateFromDB();

        if (!$this->messages->isError()) {
            $this->InsertToDB();
            App::getRouter()->redirectTo("generateView");
        }
    }

    public function validateAndAssign()
    {
        $v = new Validator();

        $this->form->email = $v->validateFromRequest("email", [
            'trim' => true,
            'email' => true,
            'required' => true,
            'required_message' => 'Email is required',
            'min_length' => 3,
            'max_length' => 30,
            'validator_message' => 'Email should be between 3 and 30 characters',
        ]);
        if (!$v->isLastOk()) {
            $this->messages->addMessage(new Message('Email should be between 3 and 30 characters', Message::ERROR));
        }

        $this->form->login = $v->validateFromRequest("login", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Login is required',
            'min_length' => 3,
            'max_length' => 30,
            'validator_message' => 'Login can\'t exceed 30 characters and can\'t be shorter than 3',
        ]);
        if (!$v->isLastOk()) {
            $this->messages->addMessage(new Message('Login can\'t exceed 30 characters and can\'t be shorter than 3', Message::ERROR));
        }

        $this->form->pass = $v->validateFromRequest("password", [
            'required' => true,
            'required_message' => 'Password is required',
            'min_length' => 3,
            'max_length' => 30,
            'validator_message' => 'Password can\'t exceed 30 characters and can\'t be shorter than 3',
        ]);
        if (!$v->isLastOk()) {
            $this->messages->addMessage(new Message('Password can\'t exceed 30 characters and can\'t be shorter than 3', Message::ERROR));
        }
    }

    public function InsertToDB()
    {

        App::getDB()->insert("users", [
            "UserName" => $this->form->login,
            "Password" => $this->form->pass,
            "Email" => $this->form->email
        ]);

    }



}