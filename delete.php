<?php 
include('db.php');

$id = $_GET['id'];

$query = "DELETE FROM `task` WHERE `id` = $id";
$result = mysqli_query($conn, $query);


if(!$result){
    die("Query Failed");
}

$_SESSION['message'] = 'Tu tarea se eliminó ok!';
$_SESSION['type'] = 'danger';

header('Location:index.php');
?>