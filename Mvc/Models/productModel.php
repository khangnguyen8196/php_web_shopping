<?php
class ProductModel extends DB{
    public function get_all_product(){
        $sql="SELECT * FROM product";
        return mysqli_query($this->connect, $sql);
    }
    
    public function get_product(){
        $item_page = !empty($_GET['per_page'])? $_GET['per_page']:5;
        $current_page=!empty($_GET['page'])?$_GET['page']:1;
        $offset=($current_page - 1) * $item_page;
        $sql= "SELECT * FROM product order by id desc limit $item_page OFFSET ".$offset;
        return mysqli_query($this->connect, $sql);
      
    }

    public function findById($id){
        $sql="SELECT * FROM product WHERE id=$id LIMIT 1";
        return mysqli_query($this->connect,$sql);
    }

    // public function get_product_category($id){
    //     $sql ="SELECT product.name as 'name', product.image as 'image', product.price as 'price',
    //     product.price_discount as 'price_discount',product.description as 'description' 
    //     FROM `product`,`category` WHERE product.category_id=category.id=$id";
    //     return mysqli_query($this->connect, $sql);
    // }

    public function getByCategoryId($category_id){
        $item_page = !empty($_GET['per_page'])? $_GET['per_page']:5;
        $current_page=!empty($_GET['page'])?$_GET['page']:1;
        $offset=($current_page - 1) * $item_page;
        $sql="SELECT * FROM product WHERE category_id=$category_id limit $item_page OFFSET ".$offset ;
        return mysqli_query($this->connect,$sql);
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

    public function update($id,$name, $image, $price,$price_discount, $description,$category_id){

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