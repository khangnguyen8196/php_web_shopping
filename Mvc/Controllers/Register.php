<?php 
class Register extends Controller {

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
        //view
        $this->viewuser("masterlayoutuser",[           
            "page"=>"content/register"
            
        ]);
    }

    public function Customer_Register(){
        // 1. get data khánh hàng nhập
        if(isset($_POST['btnRegister'])){
            $id="";
            $username =$_POST["username"];
            $email =$_POST["email"];
            $password =$_POST["password"];
            $password=password_hash($password, PASSWORD_DEFAULT);
            $fullname =$_POST["fullname"];
            $address =$_POST["address"];
            $level="2";

        // 2. insert database bảng user
        $kq=$this->UserModel->InsertNewUser($id, $username,$email,$password,$fullname,$address,$level);  
        // 3.show chữ ok fail
        $this->view("Master",[
            "Page"=>"register",
            "category"=>$this->CategoryModel->ListAll(),
            "result"=>$kq
            
        ]);
        }
     
    }
}

?>