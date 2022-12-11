
<?php
    class Home_admin extends Controller {
        public function __construct(){
            $this->CategoryModel = $this->model("CategoryModel");
            $this->ProductModel = $this->model("ProductModel");
            $this->UserModel = $this->model("UserModel");
            $this->LoginModel = $this->model("LoginModel");
        }

        public function product(){
            $this->viewadmin("masterlayout",[
                "page" =>"include/index",

                
            ]);
        }
        public function view_user(){
            $this->viewadmin("masterlayout",[
                "page" =>"content/index",
                "user"=>$this->UserModel->getUser()
                
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
            $result_mess=false;
            if(isset($_POST['submit'])){
                $result_mess=false;
                $username =$_POST["username"];
                $email =$_POST["email"];
                $password =$_POST["password"];
                $password=password_hash($password, PASSWORD_DEFAULT);
                $fullname =$_POST["fullname"];
                $address =$_POST["address"];
                $level=$_POST["level"];
                if(empty($_POST["username"])|| empty($_POST["email"])
                ||empty($_POST["password"])||empty($_POST["fullname"])
                ||empty($_POST["address"])){
                    $this->viewadmin("masterlayout",[
                        "page" =>"content/edit_user",
                        "result"=> $result_mess,
                        "edit"=>$this->UserModel->edit($id),
                    ]);
                    exit;
                }else {
                     // 2. insert database bảng user
                    $kq=$this->UserModel->update($id, $username,$email,$password,$fullname,$address,$level);  
                    // 3.show chữ ok fail
                    $this->viewadmin("masterlayout",[
                        "page" =>"content/edit_user",
                        "result"=>$kq,
                        "edit"=>$this->UserModel->edit($id),
                    ]);
                }

           
        }
        }

        public function delete_user($id){
            $this->UserModel->delete($id);
            $this->viewadmin("masterlayout",[
                "page"=>"content/index",
                "user"=>$this->UserModel->getUser(),
            ]);
        }
        public function view_login(){
            $this->viewadmin("login",[    
            ]);
        }

        public function Login(){
            $result_mess=false;
            if(isset($_POST["submit"])){
                $username=$_POST['username'];
                $password_input=$_POST['password'];
                if(empty( $_POST['username'])|| empty($_POST['password'])){
                    $this->viewadmin("login",[
                        // "page" =>"content/login",
                        "result"=> $result_mess,
                    ]);
                }
                $result = $this->LoginModel->LoginAdmin($username);
                if(mysqli_num_rows($result)){
                    while($row= mysqli_fetch_array($result)){
                        $id=$row["id"];
                        $username=$row["username"];
                        $password=$row["password"];
                    }
                    if(password_verify($password_input, $password)){
                        $_SESSION["username"]=$username;
                        $_SESSION["id"]=$id;
                        $this->viewadmin("masterlayout",[
                            "page"=>"include/index",
                            "result"=>$result_mess=true,
                        ]);
                        // setcookie("id","email",time()+3600,"/",0);
                        // header("location:http://127.0.0.1/home_admin");
                    }else {
                        $this->viewadmin("login",[
                            "result"=> $result_mess,
                        ]);
                    }
                }
            }   
        }
    
        public function admin_logout(){
            unset($_SESSION["username"]);
            session_destroy();
            // setcookie("id",true,time()-3600,"/");
            $this->viewadmin("login",[
    
            ]);
        }
        
        // Category

        public function view_cat(){
            $this->viewadmin("masterlayout",[    
                "page" =>"category/category",
                "categories"=>$this->CategoryModel->ListAll(),
            ]);
        } 
        public function view_add_cat(){
            $this->viewadmin("masterlayout",[    
                "page" =>"category/add_cat",
            ]);
        }
        public function add_cat(){
            $result_mess=false;
            if(isset($_POST['btn_cat'])){
                $name=$_POST['name'];
                if(empty($_POST['name'])){
                    $this->viewadmin("masterlayout",[
                        "page" =>"category/add_cat",
                        "result"=> $result_mess,
                    ]);
                }
                else {
                    $kq = $this->CategoryModel->insert_cat($name);
                        $this->viewadmin("masterlayout",[
                            "page" =>"category/add_cat",
                            "result"=>$kq
                        ]);
                    
                }
            }
        }

        public function delete_cat($id){
            $this->CategoryModel->delete($id);
            $this->viewadmin("masterlayout",[
                "page"=>"category/category",
                "categories"=>$this->CategoryModel->ListAll(),
            ]);
        }

        public function edit_cat ($id){
            $this->viewadmin("masterlayout",[
                "page" =>"category/edit_cat",
                "edit"=>$this->CategoryModel->edit($id),
            ]);
        }

        public function update_cat($id){
            $result_mess=false;
            if(isset($_POST['btn_update'])){
                if(empty($_POST['name'])){
                        $this->viewadmin("masterlayout",[
                            "page"=>"category/edit_cat",
                            "result"=>$result_mess,
                        ]);   
                    }else {
                        $name=$_POST['name'];
                        $kq=$this->CategoryModel->update($id,$name);
                        $this->viewadmin("masterlayout",[
                            "page"=>"category/category",
                            "categories"=>$this->CategoryModel->ListAll(),
                            "result"=>$kq,
                            "edit"=>$this->CategoryModel->edit($id),
                        ]);
                    }  
            }
        }



        // product
        public function view_product(){
            $this->viewadmin("masterlayout",[
                "page"=>"product/product",
                "product_all"=>$this->ProductModel->get_all_product(),
            ]);
        }

        public function view_add_product(){
            $this->viewadmin("masterlayout",[
                "page"=>"product/add_product",
                "product_all"=>$this->ProductModel->get_all_product(),
                "categories"=>$this->CategoryModel->ListAll(),
            ]);
        }

        public function Add(){
            if(isset($_POST['btn'])){
                $name=$_POST['name'];
                // chỉ lấy tên hình ảnh
                $image=$_FILES['image']['name'];
                // lấy dường dẫn của ảnh
                $image_tmp_name = $_FILES['image']['tmp_name'];
                $price=$_POST['price'];
                $price_discount=$_POST['price_discount'];
                $description=$_POST['description'];
                $category_id=$_POST['category_id'];
                $this->ProductModel->Add_product( $name, $image, $price,$price_discount, $description,$category_id);
                move_uploaded_file( $image_tmp_name,'./public/assets/img/product/'.$image);
                $this->viewadmin("masterlayout",[
                    "page"=>"product/product",
                    "product_all"=>$this->ProductModel->get_all_product(),
                ]);
            }
        }

        public function delete($id){
            $kq=$this->ProductModel->delete_product($id);
            $this->viewadmin("masterlayout",[
                "page"=>"product/product",
                "product_all"=>$this->ProductModel->get_all_product(),
            ]);
        }

        public function view_edit_product($id){
            $this->viewadmin("masterlayout",[
                "page"=>"product/edit_product",
                "categories"=>$this->CategoryModel->ListAll(),
                "edit"=>$this->ProductModel->edit($id),
            ]);
        }

        public function update_product($id){
            $result_mess=false;
            if(isset($_POST['btn_update'])){
                if(empty($_POST['name'])||empty($_FILES['image']['name'])
                    ||empty($_FILES['image']['tmp_name'])||empty($_POST['price'])
                    ||empty($_POST['price_discount'])||empty($_POST['description'])
                    ||empty($_POST['category_id'])){
                        $this->viewadmin("masterlayout",[
                            "page"=>"product/edit_product",
                            "result"=>$result_mess,
                        ]);   
                    }else {
                        $name=$_POST['name'];
                        // chỉ lấy tên hình ảnh
                        $image=$_FILES['image']['name'];
                        // lấy dường dẫn của ảnh
                        $image_tmp_name = $_FILES['image']['tmp_name'];
                        $price=$_POST['price'];
                        $price_discount=$_POST['price_discount'];
                        $description=$_POST['description'];
                        $category_id=$_POST['category_id'];
                        $kq=$this->ProductModel->update($id,$name, $image, $price,$price_discount, $description,$category_id);
                        move_uploaded_file( $image_tmp_name,'./public/assets/img/product/' . $image);
                        $this->viewadmin("masterlayout",[
                            "page"=>"product/product",
                            "product_all"=>$this->ProductModel->get_all_product(),
                            "categories"=>$this->CategoryModel->ListAll(),
                            "result"=>$kq,
                            "edit"=>$this->ProductModel->edit($id),
                        ]);
                    }  
            }
        }
    }
 
 ?>