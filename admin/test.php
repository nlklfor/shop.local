
<?php

 require_once "includes/connect.php" ;
 $variables = mysqli_query($connect , "SELECT * FROM `variables`");
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Enter</title>
</head>
<body>


<?php

            while($var = mysqli_fetch_assoc($variables)){

                    echo '
                            <tr class="content">
                            <th scope="row">' . $var["id"] . '</th>
                            <td>' . $var["title"] . '</td>
                            <td>' . $var["value"] . '</td>
                            <td align-items="right">
                                <div class="group_del_chng">
                                    <ul class="del-chng">
                                        <li><a href="update.php? id=' . $var["id"] . '" id="" class="chng">Изменить</a></li>
                                        <li><a  class="del" href="includes/delete-variables.php? id=' . $var["id"] . '">Удалить</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>';
    

            }

?>


                <h3 class="add-var">Добавить переменную</h3>

                <form action="includes/add-variables.php" method="POST" enctype="multipart/form-data" class="adding">
                    <div class="col-md-6">
                        <label for="var-title" class="form-label">Название переменной</label>
                        <input type="text" name="title" id="var-title" class="form-control">
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
                        <input type="text" name="value" id="text" class="form-control">
                    </div>
                    <div class="col-md-12 d-none" id="image-form">
                        <label for="image" class="form-label">Изображение</label>
                        <input type="file" name="image" id="text" class="form-control img">
                    </div>
                    <div class="col-12">
                            <button type="submit" class="btn btn primary">
                                Добавить
                            </button>
                    </div>
                </form>

    <div class="header-contr">
        <a href="#"> Управление контеном</a>
        <a href="../index.php">Выйти</a>
    </div>
    
</body>
</html>