<?php
//подключиться к бд
$pdo= new PDO("mysql:host=localhost; dbname=test", "root", "02091502");

//создать запрос как строку
$query="Select * from tasks where id=:id";
//подготовить запрос в prepare
$statement=$pdo->prepare($query);
//пояснить метку
$statement->bindParam(":id", $_GET['id']);
//выполнить запрос и получить результат true|false
$result=$statement->execute();
//кладем результат в массив tasks
$task=$statement->fetch(2);

?>




<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>
                Task <?= $_GET['id'];?>
            </h1>
            <a href="\">Back</a>
            <table class="table">
                <thead>

                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><?= $task['id'];?></td>
                        <td><?= $task['title'];?></td>
                        <td><?= $task['content'];?></td>

                    </tr>


                </tbody>

            </table>
        </div>
    </div>
</div>


</body>
</html>