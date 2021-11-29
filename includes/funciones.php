<?php 


define('TEMPLATES_URL' , __DIR__.'/templates');
define('FUNCIONES_URL' , __DIR__.'funciones.php');

function incluirTemplate(string $nombre ,bool $inicio = false){
    include TEMPLATES_URL . "/${nombre}.php";
}

function estaAtutenticado() : bool {
    if(!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'];

    if($auth) return true;
    return false;
}

function debugear($variable){
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
    exit;
}

?>