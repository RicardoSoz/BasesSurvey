<?php

class securityController extends Security {

    public function login(){
        $user = parent::validateLogin($_POST['email']);

        if(!is_object($user)) {
            $_SESSION['flash']['message'] = 'Correo incorrecto.';
            return header('location:?method=login');
        }

       if(password_verify($_POST['password'], $user->password)){
            $_SESSION['flash']['message'] = 'My bad';
            $_SESSION['user'] = $user;
            return header('location:?controller=user');
       }

        //$_SESSION['flash']['message'] = 'llegué acá.';
        return header('location:?method=login');
    }

    public function logout(){
        unset($_SESSION['user']);
        session_destroy();
        header('location:?controller=index');
    }

}