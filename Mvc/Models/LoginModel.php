<?php
class LoginModel extends DB {
    public function LoginUser($email){
        $sql= "SELECT * FROM users where email = '{$email}'";
        return mysqli_query($this->connect,$sql);
    }
}



?>