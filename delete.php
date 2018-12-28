<?php

$id=$_GET['id'];
//подключиться к бд
$pdo= new PDO("mysql:host=localhost; dbname=test", "root", "02091502");

//создать запрос как строку
$query="Delete from tasks where id=:id";
//подготовить запрос в prepare
$statement=$pdo->prepare($query);
//пояснить метки
$statement->bindParam('id', $id);
//выполнить запрос для меток data и получить результат true|false
$result=$statement->execute();
header("Location: /");exit;

?>

