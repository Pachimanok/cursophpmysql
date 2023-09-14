<?php include('includes/header.php'); ?>
  <?php  include('db.php') ?>

<div class="container mt-5">
    <div class="row">
    <div class="col-sm-6">

        <?php if(isset($_SESSION['message'])){ ?>

        
        <div class="alert alert-<?php echo $_SESSION['type'] ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['message'] ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <?php session_unset();} ?>
    
            
        <div class="card p-2">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">
        </form>

        </div>
    
</div>
<div class="col-sm-6">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>

  <?php 

  $query = "SELECT * FROM task;";
  $result_task = mysqli_query($conn, $query);

  while( $row = mysqli_fetch_assoc($result_task)){?>
    <tr>
    <th scope="row"><?php echo $row['id']; ?></th>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
  </tr>
  <?php  }
  ?>
    
    
  </tbody>
</table>

</div>
    </div>
    
</div>
<?php include('includes/footer.php'); ?>
 
