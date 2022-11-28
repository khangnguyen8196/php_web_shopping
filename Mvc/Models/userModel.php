<?php
class userModel extends DB{
    public function GetUser(){
        $sql="SELECT * FROM users";
        return mysqli_query($this->connect, $sql);
    }
}   


?>