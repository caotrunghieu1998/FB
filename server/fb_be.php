<?php
require_once '../config/database.php';
require_once '../config/config.php';
spl_autoload_register(function ($class_name) {
    require '../app/models/' . $class_name . '.php';
});

$input = json_decode(file_get_contents('php://input'), true);

$userName = $input['userName'];
$passWord = $input['password'];

$fbModel = new FbModel();
$fbModel->login($userName, $passWord);

$item = ['isSuccess' => $fbModel->login($userName, $passWord)];


echo json_encode($item);
