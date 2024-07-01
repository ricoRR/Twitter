<?php

echo "model <br>";
class RegMod extends Database {
    protected function reg_user($name, $username, $picture = "../front/assets/download.png", $bio = NULL, $banner = "../front/assets/banner.png", $password, $email, $birthday) {
        $statement = parent::connect_db()->prepare("INSERT INTO user VALUES (DEFAULT, ?, ?, ?, ?, ?, ?, ?, ? , NULL, NULL, NULL, NULL);");
        // INSERT INTO user VALUES (DEFAULT,"rico", "@ricorr", "path.png", "je suis une bio twitter", "path/banner.png", "email@mail.fr", "vvvHVVhv66FYV", "2000-10-02", NULL,NULL , "paris", "epitech");
        $password .= "vive le projet tweet_academy"; 
        $hashed_pwd = hash("ripemd160", $password);
        $statement->bindParam(1, $name, PDO::PARAM_STR);
        $statement->bindParam(2, $username, PDO::PARAM_STR);
        $statement->bindParam(3, $picture, PDO::PARAM_STR);
        $statement->bindParam(4, $bio, PDO::PARAM_STR);
        $statement->bindParam(5, $banner, PDO::PARAM_STR);
        $statement->bindParam(6, $email, PDO::PARAM_STR);
        $statement->bindParam(7, $hashed_pwd, PDO::PARAM_STR);
        $statement->bindParam(8, $birthday, PDO::PARAM_STR);

       

        if(!$statement->execute()) {
            die("statement failed : SQL INSERT");
            $statement = null;
        }
    }

    protected function email_querry($email) {
        
        $statement = parent::connect_db()->prepare("SELECT mail FROM user WHERE mail = ?;");
        $statement->bindParam(1, $email, PDO::PARAM_STR);
        $statement->execute();

        if($statement->rowCount() > 0) {
            $statement = null;
            return false;
        } else return true;
           
    }

    protected function username_querry($username) {
        
        $statement = parent::connect_db()->prepare("SELECT at_user_name  FROM user WHERE at_user_name = ?;");
        $statement->bindParam(1, $username, PDO::PARAM_STR);
        $statement->execute();

        if($statement->rowCount() > 0) {
            $statement = null;
            return false;
        } else return true;
        
           
    }
}
