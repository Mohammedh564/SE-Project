<?php
require_once '../Modules/User.php';
require_once '../Controllers/DBController.php';
class AuthController 
{
    protected $db;
    //1.open connection
    //2. run query
    //3. close connection
    public function __construct() {
        $this->db = new DBController();
        if (!$this->db->openConnection()) {
            die("Database connection failed.");
        }
    }
    protected function login (user $user){
    if($this->db->openConnection()){
        $query = "SELECT * FROM  users WHERE email = '".$user->getEmail()."' AND password = '".$user->getPassword()."'";
        $result = $this->db->select($query);
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
}
}

?>