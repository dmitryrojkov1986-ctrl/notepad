
<?php
require 'config.php';
require 'functions.php';

$notes=getNotes($pdo);

if($_SERVER['REQUEST_METHOD']==='POST')
{ 
    $title=  trim($_POST['title'])??'';
    $content=trim($_POST['content'])??'';
    if(empty($title) || empty($content)) 
    {
        echo ' заполните все поля';
    }
    elseif(isset($_POST['update']))
    {    
       
        $id=$_POST['id'];
        $sql=$pdo->prepare("UPDATE notes SET  title=? ,content=? WHERE id=?");
        $sql->execute([$title,$content,$id]);
        header("Location: views/edit.php" );
        exit();
    }
    else
        {
            addNote($pdo,$title,$content);
            header("Location:" .$_SERVER['PHP_SELF']);
            exit();
        }
} 


require 'views/list.php';
//удаление:
if($_POST['del']??'')
{   
    $id=$_POST['id'];
    deleteNote($pdo,$id);
    header("Location:" .$_SERVER['PHP_SELF']);
    exit();
}


?>