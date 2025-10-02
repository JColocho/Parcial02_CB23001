<?php
namespace app\controllers;

class IndexController{
    public function index(){
        return $this->view("index",["title"=>"Index"]);
    }

    public function view($vista,$data = []){
        extract($data);

        if (file_exists("../app/views/{$vista}.php")) {
            ob_start();
            include("../app/views/{$vista}.php");

            $content = ob_get_clean();
            return $content;
        }else{
            echo "No se puede cargar el archivo ../app/views/{$vista}.php";
        }
    }
}
?>