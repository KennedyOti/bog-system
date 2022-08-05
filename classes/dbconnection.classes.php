<?php

class Dbconnection{
    protected function connect(){
        try{
            $dbusername = "root";
            $dbpassword ="";
            $dbh = new PDO('mysql:host=localhost;dbname=blogsystem', $dbusername, $dbpassword);
            return $dbh;
        }
        catch(PDOException $e){
            print "Error! :" .$e->getMessage() ."<br/>";
            die();
        }
    }
}