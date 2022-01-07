
<?php
    require './config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud opr</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="./user.php" class="text-light">Add user</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  
    <?php
        $sql = "select * from `crud`";
        $result = mysqli_query($con, $sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $mobile=$row['mobile'];
                $password=$row['password'];

                echo '
                    <tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$password.'</td>
                    <td>
                        <button class="btn btn-secondary my-2"><a class="text-light" href="./update.php?updateid='.$id.'">Update</a></button> <br>
                        <button class="btn btn-danger" type="button"><a class="text-light" href="./delete.php?deleteid='.$id.'">Delete</a></button>
                        
                    </td>
                    </tr>';
            }
            
        }
    ?>
  
  </tbody>
</table>
    </div>
</body>
</html>