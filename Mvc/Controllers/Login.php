<?php 
class Login extends Controller {
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
            "page"=>"content/login",
        ]);
    }

    public function Login(){
        $result_mess=false;
        if(isset($_POST["submit"])){
            $email=$_POST['email'];
            $password_input=$_POST['password'];
            if(empty( $email)|| empty($password_input)){
                $this->viewuser("masterlayoutuser",[
                    "page" =>"content/login",
                    "result"=> $result_mess,
                ]);
            }
            $result = $this->LoginModel->LoginUser($email);
            if(mysqli_num_rows($result)>0){
                while($row= mysqli_fetch_array($result)){
                    $id=$row["id"];
                    $email=$row["email"];
                    $password=$row["password"];
                }
                if(password_verify($password_input, $password)){
                    $_SESSION["id"]=$id;
                    $this->viewuser("masterlayoutuser",[
                        "page"=>"include/product",
                        "pro"=>$this->ProductModel->GetProduct(),
                        "result"=>$result_mess=true,
                    ]);
                }else {
                    $this->viewuser("masterlayoutuser",[
                        "page" =>"content/login",
                        "result"=> $result_mess,
                    ]);
                }
            }
        }   
    }

    public function logout(){
        unset($_SESSION["id"]);
        session_destroy();
        $this->viewuser("masterlayoutuser",[
            "page"=>"include/product",
            "pro"=>$this->ProductModel->GetProduct(),
            "categories"=>$this->CategoryModel->ListAll(),
        ]);
    }
    
}

?>