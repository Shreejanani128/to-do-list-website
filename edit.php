<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD USER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
body
{
 background-color:LightCyan;
}
</style>
</head>
<body>
<div class="container mt-5">
<div class="row justify-content-center">
                 <div class="col-md-9">
                    <div class="card">
                    <div class="card-header">
                        <h1> EDIT DATA </h1>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id']))
                        {
                            $connection=mysqli_connect("localhost","root","","user");
                            $id=$_GET['id'];
                        
                            $fetch_data="select * from  login where id='$id'";
                            $fetch_data_run=mysqli_query($connection,$fetch_data);
                            if(mysqli_num_rows($fetch_data_run)>0)
                            {
                                foreach($fetch_data_run as $row)
                                {
                                    ?>
                                 <form action="adminhome.php" method="post">
                                      <div class="mb-3">
                                         <label>Reg.num</label>
                                         <input type="id" name="id" class="form-control" value="<?php echo $row['id'];?>"  placeholder="enter user ID" required>
                                         </div>
                                         <div class="mb-3">
                                         <label>Name</label>
                                         <input type="text" name="username" class="form-control" value="<?php echo $row['username'];?>" placeholder="user name" required>
                                         </div>
                                         <div class="mb-3">
                                         <label>Password</label>
                                         <input type="text" name="password" class="form-control" value="<?php echo $row['password'];?>" placeholder="password" required>
                                         </div> 
                                         <div class="mb-3">
                                         <label>Usertype</label>
                                         <input type="text" name="usertype" class="form-control" value="<?php echo $row['usertype'];?>" placeholder="user type" required>
                                      </div>
                                        <br/>
                                     <center> <input type="submit" class="btn btn-primary" name="submit" value="update data"></center>
                                      </form>
                                      <?php
                                }
                                                      

                            }

                            
                            else
                            {
                             echo "no data";
                            }
                        }
                        else{
                            echo"error";
                        }
                        
?>
</body>
</html>
