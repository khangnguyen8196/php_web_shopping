<?php
    class Home_admin extends Controller {
        public function __construct(){
            $this->CategoryModel = $this->model("CategoryModel");
            $this->ProductModel = $this->model("ProductModel");
            $this->UserModel = $this->model("UserModel");
            $this->LoginModel = $this->model("LoginModel");
        }

        public function SayHi(){
            $this->viewadmin("masterlayout",[
                "page" =>"content/index",
                "user" =>$this->UserModel->getUser()
            ]);
        }
        public function view_add_user(){
            $this->viewadmin("masterlayout",[
                "page" =>"content/add_user",
            ]);
        }

        public function insert_user(){
            // 1. get data khánh hàng nhập
                
          
            if(isset($_POST['btnRegister'])){
                $result_mess=false;
                $id="";
                $username =$_POST["username"];
                $email =$_POST["email"];
                $password =$_POST["password"];
                $password=password_hash($password, PASSWORD_DEFAULT);
                $fullname =$_POST["fullname"];
                $address =$_POST["address"];
                $level="2";
                if(empty($_POST["username"])|| empty($_POST["email"])
                ||empty($_POST["password"])||empty($_POST["fullname"])
                ||empty($_POST["address"])){
                    $this->viewadmin("masterlayout",[
                        "page" =>"content/add_user",
                        "result"=> $result_mess,
                    ]);
                    exit;
                }

            // 2. insert database bảng user
            $kq=$this->UserModel->InsertNewUser($id, $username,$email,$password,$fullname,$address,$level);  
            // 3.show chữ ok fail
            $this->viewadmin("masterlayout",[
                "page" =>"content/add_user",
                "result"=>$kq  
            ]);
        }
        }

        public function edit_user ($id){
            $this->viewadmin("masterlayout",[
                "page" =>"content/edit_user",
                "edit"=>$this->UserModel->edit($id),
            ]);
        }

        public function update_user($id){
            if(isset($_POST['submit'])){
                $result_mess=false;
                $id="";
                $username =$_POST["username"];
                $email =$_POST["email"];
                $password =$_POST["password"];
                $password=password_hash($password, PASSWORD_DEFAULT);
                $fullname =$_POST["fullname"];
                $address =$_POST["address"];
                if(empty($_POST["username"])|| empty($_POST["email"])
                ||empty($_POST["password"])||empty($_POST["fullname"])
                ||empty($_POST["address"])){
                    $this->viewadmin("masterlayout",[
                        "page" =>"content/edit_user",
                        "result"=> $result_mess,
                        "edit"=>$this->UserModel->edit($id),
                    ]);
                    exit;
                }

            // 2. insert database bảng user
            $kq=$this->UserModel->update($id, $username,$email,$password,$fullname,$address);  
            // 3.show chữ ok fail
            $this->viewadmin("masterlayout",[
                "page" =>"content/edit_user",
                "result"=>$kq,
                "edit"=>$this->UserModel->edit($id),
            ]);
        }
        }


        
        public function view_product(){
            $this->viewadmin("masterlayout",[
                "page"=>"product/product",
                "pro"=>$this->ProductModel->GetProduct(),
            ]);
        }



    }
 
 ?>