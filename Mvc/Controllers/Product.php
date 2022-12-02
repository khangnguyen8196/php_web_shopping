<?php
class Product extends Controller {
    public $CategoryModel;
    public $ProductModel;
    public $UserModel;
    public $LoginModel;


    public function __construct(){
        $this->CategoryModel = $this->model("CategoryModel");
        $this->ProductModel = $this->model("ProductModel");
        $this->UserModel = $this->model("UserModel");
        $this->LoginModel = $this->model("LoginModel");
    }

    public function SayHi(){
        $this->viewuser("masterlayoutuser",[
            "page"=>"include/product",
            "pro"=>$this->ProductModel->GetProduct(),
        ]);
    }

}

?>