<?php
    require "config.php";

class LoginRegistration{

        function __construct()
        {
            $database = new DatabaseConnection();
        }
        public function registerUser($username,$password,$email,$website){
            global $pdo;
            $query = $pdo->prepare("SELECT id FROM users WHERE username = ? AND email = ?");
            $query->execute(array($username,$email));
            $num = $query->rowCount();

            if($num==0){
                $query = $pdo->prepare("INSERT INTO users (username,password,email,website) VALUES (?, ?, ?, ?)");
                $query->execute(array($username,$password,$email,$website));
                return true;
            }
            else{
                return print "<span style='color: #fff000;'> Username or Email is already Exists!</span>";
            }
        }

    }
?>