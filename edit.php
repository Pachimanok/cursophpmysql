
<?php 
include('includes/header.php');
include('db.php');

$id = $_GET['id'];

$query = "SELECT * FROM task WHERE id=$id";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {

  $row = mysqli_fetch_array($result);

  $title = $row['title'];
  $description = $row['description'];
}

?>


<div class="card p-2">
        <form action="edit_task.php?id=<?php echo $id ?>" method="POST">
          <div class="form-group">
            <input type="text" name="title" value="<?php echo $title ?>" class="form-control" placeholder="Task Title" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2"  class="form-control" placeholder="Task Description"><?php echo $description ?></textarea>
          </div>
          <input type="submit" name="edit_task" class="btn btn-success btn-block" value="Save Task">
        </form>
</div>