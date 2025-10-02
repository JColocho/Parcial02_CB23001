<?php
namespace app\controllers;

class IndexController{
    public function index(){
        return $this->view("IndexView",["title"=>"Index"]);
    }

    public function resultado(){
        $nombre = $_POST["nombre"] ?? "";
        $correo = $_POST["correo"] ?? "";
        $dui = $_POST["dui"] ?? "";

        $P = $_POST["P"] ??"";


        return $this->view("ResultadoView",["title"=> "Resultados",
                                                        "nombre"=> $nombre,
                                                        "correo" => $correo,
                                                        "dui"=> $dui]);
    }

    public function view($vista,$data = []){
        extract($data);

        if (file_exists("../app/views/$vista.php")) {
            ob_start();
            include "../app/views/{$vista}.php";

            $content = ob_get_clean();
            return $content;
        }else{
            echo "No se puede cargar el archivo ../app/views/$vista.php";
        }
    }
}
?>