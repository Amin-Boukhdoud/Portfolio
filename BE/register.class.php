<?php
class RegisterUser{
    
    private $username;
    private $firstname;
    private $lastname;
    private $raw_password;
    private $encrypted_password;
    private $gender;
    private $dob;
    public $error;
    public $success;
    private $storage = "Data/acc.json";
    private $stored_users;
    private $new_user;

    public function __construct($username, $firstname, $lastname, $password, $gender, $dob)
    {
        $this->stored_users = $this->stored_users ?? [];
        $this->username = htmlspecialchars(trim($username), ENT_QUOTES, 'UTF-8');
        $this->firstname = htmlspecialchars(trim($firstname), ENT_QUOTES, 'UTF-8');
        $this->lastname= htmlspecialchars(trim($lastname), ENT_QUOTES, 'UTF-8');
        $this->gender = $gender;
        $this->dob = $dob;
        $this->raw_password = htmlspecialchars(trim($password), ENT_QUOTES, 'UTF-8');
        $this->encrypted_password = password_hash($this->raw_password, PASSWORD_DEFAULT);
        
        

        $this->stored_users = json_decode(file_get_contents($this->storage), true);
       
        $this->new_user = [
            "username" => $this->username,
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "gender" => $this->gender,
            "dob" => $this->dob,
            "password" => $this->encrypted_password,
        ];
        if($this->checkFieldValues()){
            $this->insertUser();
         }
    }

    private function checkFieldValues(){
        if(empty($this->username) || empty($this->raw_password) || empty($this->firstname) || empty($this->lastname)){
            $this->error = "Missing fields!!";
            return false;
        }
        else{ return true;}
    }

    private function usernameExists(){
        if (is_array($this->stored_users)) {
            foreach($this->stored_users as $user){
                if($this->username  == $user['username']){
                    $this->error= "Username already exists";
                    return true;
                }
            }
        }
        return false;
    }
    

    private function insertUser(){
        if($this-> usernameExists() == FALSE){
            $this->stored_users[] = $this->new_user;
           
            if(file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT))){
	            return $this->success = "Your registration was successful";
	         }else{
	            return $this->error = "Something went wrong, please try again";
	         } 
        }
    }
}