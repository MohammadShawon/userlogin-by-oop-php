<?php
class DatabaseConnection{
        public function __construct()
        {
            global $pdo;
           try{
               $pdo = new PDO('mysql:dbname=oopreg;host=localhost', 'root','');
           }
            catch (PDOException $e){
                exit('Database Error');
            }
        }

    }

?>