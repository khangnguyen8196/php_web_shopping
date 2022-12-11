<?php
class LoginModel extends DB {
    public function LoginUser($email){
        $sql= "SELECT * FROM users where email = '{$email}'";
        return mysqli_query($this->connect,$sql);
    }

    public function LoginAdmin($username){
        $sql= "SELECT * FROM users where username = '{$username}'";
        return mysqli_query($this->connect,$sql);
    }
}



?>