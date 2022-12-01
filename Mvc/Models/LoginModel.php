<?php
class LoginModel extends DB {
    public function LoginUser($username){
        $sql= "SELECT * FROM users where username = '{$username}'";
        return mysqli_query($this->connect,$sql);
    }
}



?>