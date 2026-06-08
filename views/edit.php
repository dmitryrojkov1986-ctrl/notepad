<?php
require '../functions.php';

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
    <h1>обновить заметку</h1><?php  var_dump($_POST)?><?= $err?>
    <form action="../index.php" method="POST">
    заметка:<input type="text" name="title"><br>
    текст:  <textarea name="content" id="" ></textarea><br>
            <input type="hidden" name="update" value="" >
            <input type="hidden" name="id" value="<?=$_POST['id']?>">
            <input type="submit" value="обновить">
            id=<?php echo $_POST['id']?>
            
    </form>
</body>
</html>