
<?php
require 'config.php';
require 'functions.php';


$notes=getNotes($pdo);
//добавление
if(isset($_POST['add']))
{   
    $id=$_POST['id'];
    $title=  trim($_POST['title']??'');
    $content=trim($_POST['content']??'');
    if(empty($title) || empty($content)) 
    {
        echo ' заполните все поля';
    }
    else
    {
    addNote($pdo,$title,$content);
    header("Location: ". $_SERVER['PHP_SELF'] );
    exit();
    }
}
//обновление
if(isset($_POST['update']))
{   
    $id=$_POST['id'];
    $title  =trim($_POST['title']??'');
    $content=trim($_POST['content']??'');
    
    if(empty($title) || empty($content)) 
    {
         die('заполните все поля');
        header("Location: views/edit.php " );
        exit();
    }
    else
    {   
    updateNote($pdo,$title,$content,$id);
    header("Location: views/edit.php " );
    exit();
    }
    
}
    
//удаление:
if($_POST['del']??'')
{   
    $id=$_POST['id'];
    deleteNote($pdo,$id);
    header("Location:" .$_SERVER['PHP_SELF']);
    exit();
}


require 'views/list.php';

?>