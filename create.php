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
                Task
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
                    <form action="store.php" method="post">
                        <td>
                            <div class="form-group">
                                <input type="text" name="title">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                            <textarea type="text" name="content">
                            </textarea>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <button class="btn btn-warning" type="submit" >Create</button>
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