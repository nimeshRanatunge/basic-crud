<?php
  include './config.php';
  $id=$_GET['updateid'];
  $sql="select * from `crud` where id=$id";
  $result=mysqli_query($con, $sql);
  $row=mysqli_fetch_assoc($result);

  $name=$row['name'];
  $email=$row['email'];
  $mobile=$row['mobile'];
  $password=$row['password'];

    

  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "update `crud` set name='$name', email='$email',mobile='$mobile',password='$password' where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
      // echo "data inseretd successfully";
      header('location:./display.php');
    }else{
      die(mysqli_error($con));
    }
  }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD OPERATION</title>
  </head>
  <body>
    <div class="container">
        <form method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value=<?php echo $name;?>>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" value=<?php echo $email;?>>
    </div>
    <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter mobile" value=<?php echo $mobile;?>>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" name="password" class="form-control" id="password" placeholder="Enter password" value=<?php echo $password;?>>
    </div>
   
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>