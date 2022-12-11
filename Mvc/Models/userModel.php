<?php
class UserModel extends DB{
    public function getUser(){
        $sql="SELECT * FROM users";
        return mysqli_query($this->connect,$sql);
        // $result=false;
        // if(mysqli_query($this->connect,$sql)){
        //     $result=true;
        // }
        // return json_encode($result);
    }

    public function InsertNewUser($id,$username,$email,$password,$fullname,$address,$level){
        $sql="INSERT INTO  users (id,username,email,password,fullname,address,level) 
        VALUES('$id','$username','$email', '$password', '$fullname', '$address', $level)";
        $result=false;
        if(mysqli_query($this->connect, $sql)){
            $result= true;
        }
        return json_encode($result);
    }
    
    public function checkUsername($username){
        $sql ="SELECT id FROM users WHERE username='$username'";
        $row = mysqli_query($this->connect, $sql);
        if(mysqli_num_rows($row)>0){
            echo "<span >User already exists</span";
        }else {
            echo "<span >User available for Registration</span";
        }
       
    }

    public function edit ($id){
        $sql= "SELECT * FROM users WHERE id = $id";
        return mysqli_query($this->connect,$sql);
    }

    public function update ($id,$username,$email,$password,$fullname,$address,$level){
        $sql = "UPDATE users SET username='$username',
        email='$email',password='$password',fullname='$fullname',
        address='$address',level='$level'
        WHERE id='$id'";
        $result =false;
        if(mysqli_query($this->connect, $sql)){
            $result=true;
        }
        return json_encode($result);
    }

    public function delete($id){
        $sql="DELETE FROM users WHERE id=$id";
        $result=false;
        if(mysqli_query($this->connect, $sql)){
            $result= true;
        }
        return json_encode($result);
    }
    
    public function max($email){
        $sql="SELECT * FROM users WHERE email='$email'";
        return mysqli_query($this->connect,$sql); 
    }


  
}   


?>