<?php
require '../functions.php';
require '../config.php';

if(($_GET['error']??'')==='empty_fields')
{
    echo 'Заполните поля';
}

$id = (int)($_POST['id'] ?? 0);
$stmt = $pdo->prepare("SELECT * FROM notes WHERE id = ?");
$stmt->execute([$id]);
$note = $stmt->fetch();

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
    заметка:<input type="text" name="title"value="<?= htmlspecialchars($note['title']) ?>" ><br>
    текст:  <textarea name="content" id="" ><?= htmlspecialchars($note['content']) ?></textarea><br>
            <input type="hidden" name="update" value="1" >
            <input type="hidden" name="id" value="<?=$_POST['id']?>">
            <input type="submit" value="обновить">
            
            
    </form>
</body>
</html>