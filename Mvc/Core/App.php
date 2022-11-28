<?php
class App {
    //https://web_shopping.com/Home/SayHi/1/2/3
    protected $controller="Home";
    protected $action="SayHi";
    protected $params=[];

    function __construct(){
        //Array ( [0] => Home [1] => SayHi [2] => 1 [3] => 2 [4] => 3 )
         $arr =$this->UrlProcess(); 
       
        
        // XU LI controller
        if(isset($arr[0])){
            if(file_exists("./Mvc/Controllers/".$arr[0].".php")){
                $this->controller = $arr[0];
            }
            unset($arr[0]);
        }
        require_once "./Mvc/Controllers/".$this->controller.".php";
        $this->controller = new $this->controller; 

        // xu ly action
        if(isset($arr[1])){
            if (method_exists($this->controller, $arr[1])){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        
        // xu ly params
        $this->params =$arr?array_values($arr):[];
        

        call_user_func_array([new $this->controller, $this->action], $this->params);
        
        
        
        

    }

    function UrlProcess(){
        if(isset($_GET["url"])){
            return explode("/",filter_var(trim($_GET["url"], "/")));
        }
        
    }
}   

?>