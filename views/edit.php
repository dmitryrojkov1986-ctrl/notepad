<?php
require '../functions.php';

if($_GET['error']==='empty_fields')
{
    echo 'Заполните поля';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>обновление заметки</title>
</head>
<style>
    .bord
        {   display:inline-block;
            border:2px solid black;
        }
</style>
<body>
<a href="../index.php">НАЗАД</a>
    <h1>обновить заметку</h1>
    <form action="../index.php" method="POST">
    заметка:<input type="text" name="title"><br>
    текст:  <textarea name="content" id="" ></textarea><br>
            <input type="hidden" name="update" value="1" >
            <input type="hidden" name="id" value="<?=$_POST['id']?>">
            <input type="submit" value="обновить">
            
            
    </form>
</body>
</html>