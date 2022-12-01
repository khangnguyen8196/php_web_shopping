<?php
class CategoryModel extends DB{
    public function ListAll(){
        $sql="SELECT * FROM category";
        $query= mysqli_query($this->connect, $sql);
        return $query;
        $result=array();
        while ($row=mysqli_fetch_array($query)){
            $result =$row;
        }
        return json_encode($result);
    }
}   


?>