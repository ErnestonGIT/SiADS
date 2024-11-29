<?php
require_once '../../../app/Controllers/StudentInfoController.php';

$id=$_GET['id'];

$controller = new StudentInfoController();

$result = $controller->getStudent($id);

if($result){
    echo $result;
}