<?php
include 'constante.php';
require_once '../Twig/Autoloader.php';
//Производим подключение к бд
$connect_str = DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_NAME;
$db = new PDO($connect_str, DB_USER, DB_PASS);

$error_arr = $db->errorInfo();

if ($db->errorCode() != 0000)
  echo "SQL ошибка: " . $error_arr[2] . "<br>";


//Настраимаем подключение к шаблонизатору
Twig_Autoloader::register();

try{

  $loader = new Twig_Loader_Filesystem('../templates');

  $twig = new Twig_Environment($loader);

} catch (Exception $e){
  die ('ERROR: '. $e->getMessage());
}
