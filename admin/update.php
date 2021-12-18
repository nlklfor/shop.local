<?php



require_once("includes/connect.php");

$id = $_GET["id"];


$var = mysqli_fetch_assoc(mysqli_query($connect , "SELECT * FROM `variables` WHERE `id` = $id"));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Update</title>
</head>
<body>
    <h3 class="add-var">Обновить переменную переменную</h3>

    <form action="includes/save-variables.php" method="POST" enctype="multipart/form-data" class="updating">
        <input type="hidder" value="<?php echo $var["id"] ?>" name="id">
        <div class="col-md-6">
            <label for="var-title" class="form-label">Название переменной</label>
            <input type="text" name="title" class="form-control" value="<?php echo $var["title"] ?>">
        </div>
        <div class="col-md-6">
            <label for="data-type" class="form-label">Тип значения</label>
            <select id="data-type" name="type" class="form-select">
                <option value="1" selected>Текст</option>
                <option value="2">Изображение</option>
            </select>
        </div>
        <div class="col-md-12" id="text-form">
            <label for="text" class="form-label">Содержимое</label>
            <input type="text" name="value" class="form-control" value="<?php echo $var["value"] ?>">
        </div>
        <div class="col-md-12 d-none" id="image-form">
            <label for="image" class="form-label">Изображение</label>
            <input type="file" name="image" id="text" class="form-control img">
        </div>
        <div class="col-12">
                <button type="submit" class="btn btn primary">
                    Сохранить
                </button>
        </div>
    </form>

    <div class="header-contr">
    <a href="#"> Управление контеном</a>
    <a href="../index.php">Выйти</a>
    </div>

</body>
</html>