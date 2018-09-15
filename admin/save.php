<?php

    $file = file_get_contents("../info.json");
    $json_o = json_decode($file, true);
    foreach ($_POST as $key => $value) {
        if (!empty($value)) {
            $json_o[$key] = $value;
        }
    }
    $result = json_encode($json_o, JSON_UNESCAPED_UNICODE);
    $file_put = file_put_contents("../info.json", $result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Админ панель</title>
    <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

    <?php if($file_put) echo '<div class="alert alert-success">Успешно сохранено</div>';
        else echo '<div class="alert alert-danger">Произошла ошибка</div>';
    ?>
</body>
</html>