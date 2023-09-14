<?php  include('db.php');


if(isset($_POST['edit_task'])){
    /* Revisamos si esta ok el boton */
    $id = $_GET['id'];

    $title = $_POST['title'];
    $description = $_POST['description']; 

    $query = "UPDATE task SET title = '$title' ,description = '$description' WHERE id = $id";
    $result =  mysqli_query($conn,$query);
    

    if(!$result){
        die("Query Failed");
    }

    $_SESSION['message'] = 'Tu tarea se editó ok!';
    $_SESSION['type'] = 'info';
    
    header('Location:index.php');

}


?>