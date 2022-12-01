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

    public function SayHi(){
        $this->viewuser("masterlayoutuser",[
            "page"=>"content/index",
            "categories"=>$this->CategoryModel->ListAll(),
        ]);
    }

    function Show(){
        // //model
        // $user =$this->model("UserModel");
        // // echo  $user->Tong($a, $b);

        // // view
        // $this->view("Master",[
        //     "Page"=>"news",
            
        //     "nguoidung"=>$user->GetUser()
        // ]);
    }

    function Category(){
        $pro =$this->model("ProductModel");
        echo $pro->GetProduct();
    }

    // function Mul($a,$b){
    //     $ti =$this->model("UserModel");
    //     $tong=  $ti->Tong($a, $b);

    //     //view
    //     $this->view("Master",
    //         [
    //         "number"=>$tong,
    //         "color"=>"red",
    //         "Page"=>"contact"
        
    //     ]);
    // }
}


?>