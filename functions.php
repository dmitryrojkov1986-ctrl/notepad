<?php

function getNotes($pdo)
{
    //вывод
    $sql=$pdo->query("SELECT * FROM notes");
    $notes=$sql->fetchAll();
    return $notes;

}

function addNote($pdo,$title,$content)
{   
    //добавление
    $sql=$pdo->prepare("INSERT notes  (title,content) VALUES(?,?)");
    $sql->execute([$title,$content]);
    return $sql;

    
}

function deleteNote($pdo,$id)
{   
    //удаление
    $sql=$pdo->prepare("DELETE  FROM notes WHERE id=?");
    $sql->execute([$id]);
}

function updateNote($pdo,$title,$content,$id)
{
    //обновление
    $id=$_POST['id'];
    $sql=$pdo->prepare("UPDATE notes SET  title=? ,content=? WHERE id=?");
    $sql->execute([$title,$content,$id]);
    return $sql;
}
?>