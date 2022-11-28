<?php
class Controller{
    public function model($model){
        require_once "./Mvc/Models/".$model.".php";
        return new $model;
    }
    public function view($view, $data=[]){
        require_once "./Mvc/Views/".$view.".php";
    }
}

?>