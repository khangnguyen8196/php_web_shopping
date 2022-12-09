<?php
class Home extends Controller {
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

    public function product(){
        $this->viewuser("masterlayoutuser",[
            "page"=>"include/product",
            "product"=>$this->ProductModel->get_product(),
            "categories"=>$this->CategoryModel->ListAll(),
        ]);
    }
}


?>