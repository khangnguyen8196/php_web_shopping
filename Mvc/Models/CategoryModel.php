<?php
class CategoryModel extends DB{
    public function ListAll(){
        $sql="SELECT * FROM category order by id desc";
        $query= mysqli_query($this->connect, $sql);
        return $query;
        $result=array();
        while ($row=mysqli_fetch_array($query)){
            $result =$row;
        }
        return json_encode($result);
    }

    public function insert_cat($name){
        $sql="INSERT INTO  category (name) 
        VALUES('$name')";
        $result=false;
        if(mysqli_query($this->connect, $sql)){
            $result= true;
        }
        return json_encode($result);
    }  

    public function delete($id){
        $sql = "DELETE FROM category WHERE id=$id";
        $result =false;
        if(mysqli_query($this->connect,$sql)){
            $result=true;
        };
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