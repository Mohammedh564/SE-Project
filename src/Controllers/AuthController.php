<?php

include_once __DIR__ . '/../Modules/User.php'; 
include_once __DIR__ . '/DBController.php'; 


class AuthController 
{
    // protected $db;
    //1.open connection
    //2. run query
    //3. close connection
    // public function __construct() {
    //     $this->db = new DBController();
    //     if (!$this->db->openConnection()) {
    //         die("Database connection failed.");
    //     }
    // }
    public function login (user $user){
        $db = new DBController();
        //open connection
    if($db->openConnection()){
        $query = "SELECT * FROM  user WHERE email = '".$user->getEmail()."' AND password = '".$user->getPassword()."'";
        $result = $db->select($query);
        if(is_array($result)){
            if(count($result) == 0){
                echo "Invalid email or password";
                return false;
            }
            else{
                echo "Login successful";
                return true;
            }
        }else{
            echo "Error in query"; 
            return false;
        }
    }
    else{
        echo "Connection failed";
        return false;
    }
}
}

?>