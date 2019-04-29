<?php

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $connect = mysqli_connect('localhost','root','','bweb');
    $query = "UPDATE todo_liste set etat='Done' where id='$id' ";  
    $todo = mysqli_query($connect, $query);

    header("location: ../../index.php");
}

?>