<?php
//to connect the database and the server.
class Connect(){
    private $userPass= "1234";
    private $userName= "Michael";
    private $port= "3306";
    private $host= "localhost";
    public $connection = null;

    public function __construct($db){
        //this connect the database using PDO
        $this->connection = new PDO("mysql:host=".$this->host.";port=".$this->port.";dbname=".$db, $this->userName, $this->userPass);
        
        //this hide the errors to the user.
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
    }


}

?>