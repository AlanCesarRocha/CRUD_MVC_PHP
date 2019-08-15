<?php
class controller{
    public function view($view,$data=[]){
        extract($data);
        include "views/".$view.".php";
    }
    public function viewTemplateFull($view,$data=[]){
        include "views/template.php";
    }
    public function viewTemplate($view,$data=[]){
        extract($data);
        include "views/".$view.".php";
    }
}