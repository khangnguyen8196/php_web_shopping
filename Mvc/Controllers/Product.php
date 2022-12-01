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

    public function SayHi(){
        $this->viewuser("masterlayoutuser",[
            "page"=>"include/product",
            "pro"=>$this->ProductModel->GetProduct(),
        ]);
    }

    public function view_add(){
        $this->view("product/add_product",[
           
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
            $category_id=$_POST['category_id']["name"];
            $this->ProductModel->Add_product( $name, $image, $price,$price_discount, $description,$category_id);
            move_uploaded_file( $image_tmp_name,'./public/assets/img/product/'.$image);
            $this->view("product/product",[
                "pro"=>$this->ProductModel->GetProduct(),
            ]);
        }
    }
    public function delete($id){
        $this->ProductModel->delete_product($id);
        $this->view("product/product",[
            "pro"=>$this->ProductModel->GetProduct(),
        ]);
    }

    public function edit ($id){
        $this->view("product/edit",[]);
    }
    

}

?>