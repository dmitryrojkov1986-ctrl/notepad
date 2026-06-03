<?php
require 'config.php';

if($_SERVER['REQUEST_METHOD']==='POST')
{ 
    //$id=$_POST['id'];
    $title=  trim($_POST['title'])??'';
    $content=trim($_POST['content'])??'';
    if(empty($title) || empty($content)) 
    {
        echo ' заполните все поля';
    }
    elseif(isset($_POST['update']))
        {   
            //обновление:
            $id=$_POST['id'];
            $sql=$pdo->prepare("UPDATE notes SET  title=? ,content=? WHERE id=?");
            $sql->execute([$title,$content,$id]);
            header("Location:" .$_SERVER['PHP_SELF']);
            exit();
        }
    else
        {
            $sql=$pdo->prepare("INSERT notes  (title,content) VALUE(?,?)");
            $sql->execute([$title,$content]);
            header("Location:" .$_SERVER['PHP_SELF']);
            exit();
        }
} 

//добавление в базу:
$sql=$pdo->query("SELECT * FROM notes");
$notes=$sql->fetchAll();

//удаление:
if($_POST['del'])
{   
    $id=$_POST['id'];
    $sql=$pdo->prepare("DELETE  FROM notes WHERE id=?");
    $sql->execute([$id]);
    header("Location:" .$_SERVER['PHP_SELF']);
    exit();
}


?>