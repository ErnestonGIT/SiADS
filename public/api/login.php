<?php
require_once '../../app/loginController.php';


$username = $_POST['username'];
$password = $_POST['password'];
$controller = new LoginController();
$result = $controller->login($username,$password);
session_start([
    'cookie_lifetime'=>60,
    'cache_expire'=>60
]);
if($result){
    echo $result;
    $_SESSION['user_id']=$result['ID'];
    $_SESSION['rol']=$result['rol'];
    $_SESSION['user']=$result['nombre'];
    header('Location:/index.php');
}else{
    echo "Usuario o contraseña incorrecta";
}