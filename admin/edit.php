<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
if($user != 'admin' or $pass != 'pass') { echo 'You have not access!';die; }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Админ панель</title>
    <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <script src="../js/jquery.min.js"></script>
    <script src="admin.js"></script>
</head>
<body>
    <form class="form-admin" action="save.php" method="POST">
        <div class="form-group">
            <label for="price">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="price">Description</label>
            <input type="text" name="description" class="form-control" placeholder="Description">
        </div>
        <div class="form-group">
            <label for="price">H1</label>
            <input type="text" name="h1" class="form-control" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="price">Поклейка обоев в квартирах, домах и офисах</label>
            <textarea name="home" class="form-control" placeholder="Поклейка обоев в квартирах, домах и офисах"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Доступные цены</label>
            <textarea name="user" class="form-control" placeholder="Доступные цены"></textarea>
        </div>
        <div class="form-group">
            <label for="pass">Текст рядом с картой</label>
            <textarea name="map" class="form-control" placeholder="Текст рядом с картой"></textarea>
            <span class="btn btn-dark add_tag" data-value="<h2></h2>">h2</span>
            <span class="btn btn-dark add_tag" data-value="<ol></ol>">ol</span>
            <span class="btn btn-dark add_tag" data-value="<li></li>">li</span>
            <span class="btn btn-dark add_tag" data-value="<p></p>">p</span>
        </div>
        <button type="submit" class="btn btn-success">Сохранить</button>
        <button type="reset" class="btn btn-danger">Сбросить</button>
    </form>
</body>
</html>