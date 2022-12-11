<?php
class Cart extends Controller {
    public $CategoryModel;
    public $ProductModel;
    public $UserModel;
    public $LoginModel;
    public $CartModel;


    public function __construct(){
        $this->CategoryModel = $this->model("CategoryModel");
        $this->ProductModel = $this->model("ProductModel");
        $this->UserModel = $this->model("UserModel");
        $this->LoginModel = $this->model("LoginModel");
        $this->CartModel = $this->model("CartModel");
    }

    
    public function cart_product($id){
        if(isset($_POST['order_click']))
        var_dump($_POST);
        exit;
        $this->viewuser("masterlayoutproduct",[
            "page"=>"product/cart",
            "cart"=>$this->CartModel->findById($id)
        ]);
    }

    
    public function add($id){
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }
        if(isset($_POST['btn_add_cart'])){
           
            $quantity = $_POST['quantity'];
            foreach($_POST['quantity'] as $id => $quantity){
                $_SESSION['cart'][$id] =$quantity;
                
                
            }
           
        }
        if(!empty($_SESSION['cart'])){
            $this->viewuser("masterlayoutproduct",[
                "page"=>"product/cart",
                "cart"=>$this->CartModel->all()
            ]);
            var_dump($_SESSION['cart']);
                exit;
        }
       
    }

    public function del_cart($id){
        unset($_SESSION["cart"][$id]);
        session_destroy();
        $this->viewuser("masterlayoutproduct",[
            "page"=>"product/cart",
            "cart"=>$this->CartModel->findById($id)
        ]);
    }
}