<?php
class ProductModel extends DB{
    public function GetProduct(){
        $sql="SELECT * FROM product";
        return mysqli_query($this->connect, $sql);
    }

    public function Add_product( $name, $image, $price,$price_discount, $description,$category_id ){
        $sql = "INSERT INTO product(name, image, price, price_discount, description, category_id)
        VALUES('$name','$image','$price','$price_discount','$description','$category_id')";
        $result=false;
        if(mysqli_query($this->connect,$sql)){
            $result=true;
        }
        return json_encode($result);
        
    }

    public function delete_product($id){
        $sql = "DELETE FROM product WHERE id=$id";
        $result =false;
        if(mysqli_query($this->connect,$sql)){
            $result=true;
        };
        return json_encode($result);

    }
    public function edit ($id){
        $sql= "SELECT * FROM product WHERE id = $id";
        return mysqli_query($this->connect,$sql);
    }

    public function update_product($id,$name, $image, $price,$price_discount, $description,$category_id){

        $sql = "UPDATE product SET name ='$name', image ='$image', price ='$price',
        price_discount = '$price_discount',description='$description', category_id='$category_id'
        WHERE id=$id";
        $result =false;
        if(mysqli_query($this->connect, $sql)){
            $result=true;
        }
        return json_encode($result);
    }
}   

?>