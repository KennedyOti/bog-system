<?php

class SignupController extends Signup{

    // All the properties and methods goes here
    private $username;
    private $email;
    private $password;
    private $passswordrepeat;

    // constructor function
    public function __construct($username, $email, $password, $passswordrepeat) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->passswordrepeat = $passswordrepeat;
    }
    //Method to Signup The User
    public function signupUser(){
        //check for emptyinput
        if($this->emptyInput()==false){
            header("location: ../index.php? error =emptyinput");
        }

        //check for invalid username
        if($this->invalidInputs()==false){
            header("location: ../index.php? error =invalid-username");
        }
        //check for invalidmail
        if($this->invalidMail()==false){
            header("location: ../index.php? error =invalid-email");
        }
        //check for usertaken
        if($this->userTaken()==false){
            header("location: ../index.php? error =usertaken");
        }

        $this->setUser($this->username, $this->email, $this->password);
    }

    // method to check the empty fields
    private function emptyInput(){
        $result;
        if(empty($this->username) || empty($this->email) || empty($this->password) || empty($this->passswordrepeat)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    // method to check invalid inputs

    private function invalidInputs(){
        $result;
        if(!preg_match("^[a-zA-Z0-9]^$/", $this->username)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    // method to check for a valid email

    private function invalidMail() {
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
    //method to check the password match
    private function passwordMatch(){
        $result;
        if($this->pwd !== $this->passwordrepeat){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function userTaken(){
        $result;
        if(!$this -> checkUser($this->username, $this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }


}