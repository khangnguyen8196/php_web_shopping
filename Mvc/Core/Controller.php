<?php
class Controller{
    public function model($model){
        require_once "./Mvc/Models/".$model.".php";
        return new $model;
    }
    public function view($view, $data=[]){
        require_once "./Mvc/Views/".$view.".php";
    }
    public function viewadmin($view, $data=[]){
        require_once "./Mvc/Views/admin/".$view.".php";
    }

    public function viewuser($view, $data=[]){
        require_once "./Mvc/Views/user/".$view.".php";
    }
}

?>