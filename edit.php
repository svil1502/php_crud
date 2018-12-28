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

            <table class="table">
                <thead>

                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <form action="update.php?id=<?=$task['id'];?>" method="post">
                        <td>
                        <div class="form-group">
                            <input type="text" name="title" value="<?=$task['title']; ?>">
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                            <textarea type="text" name="content"><?=$task['content']; ?>
                            </textarea>
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                          <button class="btn btn-warning" type="submit" >Update</button>
                        </div>
                        </td>
                    </form>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>