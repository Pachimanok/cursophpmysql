<?php  include('db.php');


if(isset($_POST['save_task'])){
    /* Revisamos si esta ok el boton */

    $title = $_POST['title'];
    $description = $_POST['description']; 

    $query = "INSERT INTO task(title,description) VALUE ('$title','$description')";
    $result =  mysqli_query($conn,$query);
    

    if(!$result){
        die("Query Failed");
    }

    $_SESSION['message'] = 'Tu tarea se guardó ok!';
    $_SESSION['type'] = 'success';
    
    header('Location:index.php');

}


?>