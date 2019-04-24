<?php

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $connect = mysqli_connect('localhost','root','','bweb');
    $query = "DELETE FROM todo_liste where id='$id' ";  
    $todo = mysqli_query($connect, $query);

    header("location: ../../index.php");
}

?>