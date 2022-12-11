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

    public function product(){
        //view
        $this->viewuser("masterlayoutuser",[           
            "page"=>"content/register"
            
        ]);
    }

    public function register(){
        // 1. get data khánh hàng nhập
            
      
        if(isset($_POST['submit'])){
            $result_mess=false;
            $id="";
            // $username =$_POST["username"];
            $username=$_POST["username"];
            $email =$_POST["email"];
            $pass1=$_POST["pass1"];
            $pass2=$_POST["pass2"];
            $fullname=$_POST["fullname"];
            $address=$_POST["address"];
            $level="1";
            if(empty($_POST["username"]) ||empty($_POST["email"])
                ||empty($_POST["pass1"])||empty($_POST["pass2"])||empty($_POST["fullname"])||empty($_POST["address"])
                ){
                    $this->viewuser("masterlayoutuser",[
                        "page" =>"content/register",
                        "result"=> $result_mess,
                    ]);
                    exit;
            }elseif($pass1!=$pass2){
                $this->viewuser("masterlayoutuser",[
                    "page" =>"content/register",
                    "result"=> $result_mess,
                ]);
                exit;
            }else{
                $password=password_hash($pass1, PASSWORD_DEFAULT);
                $result2=$this->UserModel->max($email);
                if(mysqli_num_rows($result2)>0){
                    $this->viewuser('masterlayoutuser',[
                        "page" =>"content/register",
                        "result"=> $result_mess,
                        "max"=>$result2,
                    ]);
                }else {
                     // $fullname =$_POST["fullname"];
                // $address =$_POST["address"];
        
                // 2. insert database bảng user
                $kq=$this->UserModel->InsertNewUser($id,$username,$email,$password,$fullname,$address,$level);  
                // 3.show chữ ok fail
                $this->viewuser("masterlayoutuser",[
                    "page" =>"content/register",
                    "result"=>$kq  
                ]);
                }
               
            }
           
    }
    }
}

?>