<?php
class DB {
    public $connect;
    protected $servername="localhost";
    protected $email ="root";
    protected $password = "";
    protected $database = "web_shopping";

    function __construct(){
        $this->connect =mysqli_connect($this->servername, $this->email,$this->password, $this->database);
        mysqli_select_db($this->connect, $this->database);
        mysqli_query($this->connect, "SET NAMES 'utf8'");
    }
}
?>