<?php
//подключиться к бд
$pdo= new PDO("mysql:host=localhost; dbname=test", "root", "02091502");

//создать запрос как строку
$query="Select * from tasks";
//подготовить запрос в prepare
$statement=$pdo->prepare($query);
//выполнить запрос и получить результат true|false
$result=$statement->execute();
//кладем результат в массив tasks
$tasks=$statement->fetchAll(2);
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
                All Tasks
            </h1>
            <a href="create.php" class="btn btn-success">Add</a>
            <table class="table">
                <thead>

                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($tasks as $task): ?>
                <tr>
                    <td><?= $task['id'];?></td>
                    <td><?= $task['title'];?></td>
                    <td>
                        <a href="show.php?id=<?=$task['id'];?>" class="btn btn-info">Show</a>
                        <a href="edit.php?id=<?=$task['id'];?>" class="btn btn-warning">Edit</a>
                        <a onclick="return confirm('Уверены?'); " href="delete.php?id=<?=$task['id'];?>" class="btn btn-danger">Delete</a>


                    </td>
                </tr>
                <?php endforeach;?>

                </tbody>

            </table>
        </div>
    </div>
</div>


</body>
</html>