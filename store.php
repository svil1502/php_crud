<?php
//пояснить метки
$data=[

  //  "id" => $_GET['id'],
    "title" => $_POST['title'],
    "content" => $_POST['content']

];
//подключиться к бд
$pdo= new PDO("mysql:host=localhost; dbname=test", "root", "02091502");

//создать запрос как строку
$query="Insert into tasks(title, content) values (:title,:content)";
//подготовить запрос в prepare
$statement=$pdo->prepare($query);
//выполнить запрос для меток data и получить результат true|false
$result=$statement->execute($data);
header("Location: /");exit;

?>

