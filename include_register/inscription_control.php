<?php
echo "control <br>";
class Registration extends RegMod{
    
    // $name, $username, $picture, $bio, $banner, $password, $repeat_password, $email, $birthday

    private $name;
    private $username;
    private $picture;
    private $bio;
    private $banner;
    private $password;
    private $password_repeat;
    private $email;

    private $birthday;

    public function __construct($name, $username, $picture, $bio, $banner, $password, $password_repeat, $email, $birthday) {
        $this->name = $name;
        $this->username = $username;
        $this->picture = $picture;
        $this->bio = $bio;
        $this->banner = $banner;
        $this->password = $password;
        $this->password_repeat = $password_repeat;
        $this->email = $email;
        $this->birthday = $birthday;
    }
    
    private function input_checker() {            
        if(empty($this->name) or empty($this->username) or empty($this->password) or empty($this->password_repeat) or empty($this->email) or empty($this->birthday)) {
            echo "Empty inputs";
            return false;
        } else return true;
    }

    private function password_match() {
        if($this->password !== $this->password_repeat) {
            echo "Password not identical";
            return false;
        } else return true;
    }

    private function email_checker() {
        if(!$this->email_querry($this->email)) {
            echo "email already in use";
           return false; 
        } else return true;
    }

    private function username_checker() {
        if(!$this->username_querry($this->username)) {
            echo "Username already in use";
           return false; 
        } else return true;
    }

    private function age_checker() {
        if(substr($this->birthday, 0, 4) >= (date("Y") - 13)) {
            return false;
        } else return true;
    }
    
    public function check_user() {
        if($this->input_checker() == false) {
            die("Empty inputs");
        } 
        //creer message d'erreur php url get 
        if($this->password_match() == false) {
            die("Password aren't the same");
        }
        
        if($this->email_checker() == false) {
            die("Email already in use");
        }

        if($this->username_checker() == false) {
            die("Username already in use");
        }


        if($this->age_checker() == false) {
            die("Underage");
        }

        $this->reg_user($this->name,$this->username, $this->picture, $this->bio, $this->banner, $this->password, $this->email, $this->birthday);

    }
}