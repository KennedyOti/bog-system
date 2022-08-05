<?php

class Signup extends Dbconnection {
    // Signup User metohod
    protected function setUser($username, $email, $password){
        $stmt = $this->connect()->prepare('INSERT INTO users (user_name,user_email,user_password) VALUES(?,?,?)');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        //The if statement checks if the query is not returned from the db
        if(!$stmt->execute(array($username, $email, $hashedPassword))){
            $stmt = null;
            header("location: ../index.php? error =stmtfailed");
            exit();
        }
         
        $stmt = null;
    }



    //end 
    protected function checkUser($username, $email){
        $stmt = $this->connect()->prepare('SELECT user_name FROM users WHERE user_name = ? OR  user_email =?;');
        
        //The if statement checks if the query is not returned from the db
        if(!$stmt->execute(array($username, $email))){
            $stmt = null;
            header("location: ../index.php? error =stmtfailed");
            exit();
        }

        $resultCheck;
        //Checks if there are results from th edatabase

        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck =true;
        }

        return $resultCheck;
    }
}