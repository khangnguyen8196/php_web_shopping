<?php
class Home extends Controller {
    function SayHi(){
        $teo =$this->model("userModel");
        echo $teo->GetUser();
    }

    function Show(){
        //model
        $user =$this->model("userModel");
        // echo  $user->Tong($a, $b);

        // view
        $this->view("trangchu",[
            "Page"=>"news",
            "nguoidung"=>$user->Users()
        ]);
    }

    function Category(){
        $pro =$this->model("productModel");
        echo $pro->GetProduct();
    }

    function Mul($a,$b){
        $ti =$this->model("userModel");
        $tong=  $ti->Tong($a, $b);

        //view
        $this->view("trangchu",
            [
            "number"=>$tong,
            "color"=>"red",
            "Page"=>"contact"
        
        ]);
    }
}


?>