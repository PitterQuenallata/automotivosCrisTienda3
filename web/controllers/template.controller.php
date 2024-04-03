<?php
//Depurar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');

//Incluir el archivo de la vista
class TemplateController
{
    public function index()
    {
        include 'views/template.php';
    }

    //ruta principal o dominio del sitio
    static public function path()
    {
        if(!empty($_SERVER["HTTPS"])&&("on"==$_SERVER["HTTPS"]))
        {
            return "https://".$_SERVER["SERVER_NAME"]."/";
        }else{
            return "http://".$_SERVER["SERVER_NAME"]."/";
        }     
    }

}