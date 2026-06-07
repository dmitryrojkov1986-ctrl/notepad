
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>БЛОКНОТ</title>
</head>
<style>
    .bord
        {   display:inline-block;
            border:2px solid black;
        }
</style>
<body>
    <h1>добавить заметку</h1>
    <?= require 'views/form.php'?>
    <h1>все заметки</h1>
    <?php foreach($notes as $note): ?>
    <div class="bord">
        <p><?= htmlspecialchars($note['title']) ?></p>
        <p><?= htmlspecialchars($note['content']) ?></p>
        <p><?= htmlspecialchars($note['created_et']) ?></p>

        <form action="views/edit.php"  method="post">
            <input type="hidden" name=""  >
            <input type="hidden" name="id" value="<?=$note['id']?>" >
            <input type="submit"  value="обновить" >
        </form>

        <form action="" method="post"><input name="del" type="submit" value="удалить">
            <input type="hidden" name="id" value="<?=$note['id']?>">
        </form>
        
    </div><br>
    <?php endforeach ?>


</body>
</html>