<?php

namespace app\controllers;

use app\models\Users;

class CoreController 
{
    protected $modelUsers;

    public function __construct()
    {
        $this->modelUsers = new Users();
    }
    
    public function index($params)
    {   
        session_start();

        if($_SERVER["REQUEST_METHOD"] === "GET"):
            return Controller::view('core/index');
        endif;

        if (empty($params->email) || empty($params->senha)) {
            return Controller::view('core/index', array("message" => "Por favor, preencha todos os campos."));
        }

        if (!filter_var($params->email, FILTER_VALIDATE_EMAIL)) {
            return Controller::view('core/index', array("message" => "Por favor, insira um email válido."));
        }

        try {
            $user = $this->modelUsers->findByEmail($params->email);
   
            if($user && $this->modelUsers->verifyPassword(md5($params->senha), $user->nm_password)):
                $_SESSION['user_id'] = $user->id;
                header('Location: /admin/home');
                exit;
            else:
                return Controller::view('core/index', ["message" => "Email ou senha incorretos."]);
            endif;
        } catch (\Throwable $th) {
            return Controller::view('core/index', ["message" => "Ocorreu um erro ao tentar fazer login."]);
        }
    }

    public function register($params)
    {
        if($_SERVER["REQUEST_METHOD"] === "GET"):
            return Controller::view('core/register');
        endif;

        if (empty($params->email) || empty($params->senha)) {
            return Controller::view('core/register', array("message" => "Por favor, preencha todos os campos."));
        }

        if (!filter_var($params->email, FILTER_VALIDATE_EMAIL)) {
            return Controller::view('core/register', array("message" => "Por favor, insira um email válido."));
        }

        try {
            $this->modelUsers->nm_email    = $params->email;
            $this->modelUsers->profile_id  = 0;
            $this->modelUsers->nm_password = md5($params->senha);
            $this->modelUsers->save();

            return Controller::view('core/register',array("message" => "Usuario cadastrado com sucesso!"));
        } catch (\Throwable $th) {
            return Controller::view('core/register',array("message" => "Usuario não cadastrado!"));
        }
    }

    public function recovery($params)
    {
        return Controller::view('core/recovery');
    }

    public function home($params)
    {
        session_start();

        if(isset($_SESSION['user_id'])):
            return Controller::view('core/home', ["message" => "Login realizado com sucesso!"]);
        endif;

        header('Location: /admin');
        exit;
    }

    public function logout($params)
    {
        session_destroy();
        header('Location: /admin');
        exit;
    }
}