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

    public function product(){
        $this->viewuser("masterlayoutuser",[
            "page"=>"include/product",
            "product"=>$this->ProductModel->get_product(),
            "categories"=>$this->CategoryModel->ListAll(),
        ]);
    }
    public function show($category_id){
        
        $this->viewuser("masterlayoutuser",[
            "page"=>"include/product",
            "product"=>$this->ProductModel->getByCategoryId($category_id),
            "categories"=>$this->CategoryModel->ListAll(),
        ]);
    }

    public function detail($id){
        $this->viewuser("masterlayoutproduct",[
            "page"=>"product/detail",
            "detail"=>$this->ProductModel->findById($id)
        ]);
    }

    public function cart_product($id){

        $this->viewuser("masterlayoutproduct",[
            "page"=>"product/cart",
            "cart"=>$this->ProductModel->findById($id)
        ]);
    }

    
    public function add($id){
        if(isset($_POST['btn_add_cart'])){
            $this->viewuser("masterlayoutproduct",[
                "page"=>"product/cart",
                "cart"=>$this->ProductModel->findById($id)
            ]);
        }
       
    }

  

}

?>