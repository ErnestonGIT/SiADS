<?php
require_once '../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader,[
    'cache'=>'../cache',
    'auto_reload'=>true
]);


session_start();
 //print_r($_SESSION);
if (isset($_SESSION['user_id']) && $_SESSION['rol']) {
    $inicio='Dashboards';
    $user=$_SESSION['user'];
    $rol = $_SESSION['rol'];
    $template = $twig->load('index2.html');
    echo $template->render(['inicio'=>$inicio,'name'=>$user,'rol'=>$rol]);
    
} else {
	
    $template = $twig->load('index1.html');
    echo $template->render();
	
}
?>