<?php

class Login extends Database {
    protected function login_user($email, $password) {
        $statement = parent::connect_db()->prepare("SELECT password FROM user WHERE mail = ?;");
        $statement->bindParam(1, $email, PDO::PARAM_STR);
        if(!$statement->execute()) {
            $statement = null;
            die("statement failed : SQL INSERT");
        }
        
        if($statement->rowCount() == 0) {
            $statement = null;
            return false;
        }

        $pwd_hashed = $statement->fetchAll(PDO::FETCH_ASSOC);
        $hashed = $pwd_hashed[0]["password"];
        // $validate_pwd = password_verify($password, $hashed);

        $password .= "vive le projet tweet_academy";
        $login_password = hash("ripemd160", $password);

        if($hashed !== $login_password) {
            $statement = null;
            die("Wrong password");
        } else if($hashed == $login_password) {
            $statement = parent::connect_db()->prepare("SELECT * FROM user WHERE mail = ? AND password = ?;");
            $statement->bindParam(1, $email, PDO::PARAM_STR);        
            $statement->bindParam(2, $pwd_hashed[0]["password"], PDO::PARAM_STR);
            
            if(!$statement->execute()) {
                $statement = null;
                die("statement failed : SQL LOGIN");
            }
            
            if($statement->rowCount() == 0) {
                $statement = null;
                die("Statement failed : SQL LOGIN ROWCOUNT");
            }
            
            $login_user = $statement->fetchall(PDO::FETCH_ASSOC);
                    
            session_start();
            $_SESSION['id'] = $login_user[0]['id'];
            $_SESSION['username'] = $login_user[0]['username'];
            echo json_encode($login_user);
            // // $_SESSION["user_email"] = $login_user[0]["email"];
            
            $statement = null;
        } 
        
        $statement = null;
    }
}