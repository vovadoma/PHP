<?php
require_once 'models/model.php';

class LoginController
{

    protected $model;

    function __construct() {
        $this->model = new UserModel();
    }

    public function login(){
        if (!empty($_POST)) {
            $email = $_POST['email'];
            $user = $this->model->read(['email' => $email]);
            if(!$user) {
                redirect('login');
            }
            $password = $_POST['password'];
            if (md5($password) == $user['password']) {
                $_SESSION['login_user_id'] = $user['id'];
            } else {
                redirect('login');
            }
            redirect('/');
        } else {
            $data = [];
            $this->view('login', $data);
        }
    }

    public function register(){
        if (!empty($_POST)) {
            $errors = $this->checkRegister(); // валидация
            if ($errors) {
                $oldData = [
                    'email' => $_POST['email']
                ];
                redirect('register', $oldData, ['error' => $errors]);
            }
            $data = $_POST;
            $userId = $this->model->create($data);
            $_SESSION['login_user_id'] = $userId;
            redirect('/');
        } else {
            $data = [];
            $this->view('register', $data);
        }
    }


    public function view($template, $data = [])
    {
        extract($data);
        include('templates/' . $template . '.php');
    }


}