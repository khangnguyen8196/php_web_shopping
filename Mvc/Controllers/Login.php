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
        $message=false;
        if(isset($_POST["submit"])){
            $username=$_POST['username'];
            $password_input=$_POST['password'];
            if(empty( $username)|| empty($password_input)){
                $this->view("login",[
                    "result"=>$message
                ]);
            }
            $result = $this->LoginModel->LoginUser($username);
            if(mysqli_num_rows($result)>0){
                while($row= mysqli_fetch_array($result)){
                    
                    $id=$row["id"];
                    $username=$row["username"];
                    $password=$row["password"];
                }
                if(password_verify($password_input, $password)){
                    $_SESSION["id"]=$id;
                    $this->view("Master",[
                        "page"=>"dash/index",
                        "result"=>$message=true,
                    ]);
                }else {
                    $this->view("login",[
                        "result"=>$message
                    ]);
                }
            }
        }   
    }

    public function logout(){
        unset($_SESSION["id"]);
        session_destroy();
        $this->view("login",[

        ]);
    }
    
}

?>