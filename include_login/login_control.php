<?php

class Login_cont extends Login{
    private $password;
    private $email;

    public function __construct($password, $email) {
        $this->password = $password;
        $this->email = $email;
    }

    private function login_input() {            
        if(empty($this->email) or empty($this->password)) {
            return false;
        } 
        else return true;
    }

    public function login_checker() {
        if($this->login_input() == false) {
            die("Please enter information to proceed.");
        }

        $this->login_user($this->email, $this->password);
    }
}