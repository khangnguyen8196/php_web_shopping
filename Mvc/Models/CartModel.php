<?php
class CartModel extends DB{
    public function findById($id){
        $sql="SELECT * FROM product WHERE id=$id LIMIT 1";
        return mysqli_query($this->connect,$sql);
    }

    public function all(){
        $sql="SELECT * FROM product WHERE id IN (".implode(",", array_keys($_SESSION['cart'])).")";
        return mysqli_query($this->connect,$sql);
    }

    public function insert_cart($quantity){
        $sql="INSERT INTO  category (name) 
        VALUES('$quantity')";
        $result=false;
        if(mysqli_query($this->connect, $sql)){
            $result= true;
        }
        return json_encode($result);
    }  

    public function edit ($id){
        $sql= "SELECT * FROM category WHERE id = $id";
        return mysqli_query($this->connect,$sql);
    }

    public function update ($id,$name){
        $sql="UPDATE category SET name='$name' WHERE id=$id";
        $result =false;
        if(mysqli_query($this->connect, $sql)){
            $result=true;
        }
        return json_encode($result);
    }
}  

?>