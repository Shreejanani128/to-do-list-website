<?php

    $connection=mysqli_connect("localhost","root","","user");

     if(isset($_POST['submit']))
     {
       $id=$_POST['id'];
       $username=$_POST['username'];
       $task=$_POST['task'];
       $description=$_POST['description'];
       
       $sql="insert into task(id,username,task,description)values('$id','$username','$task','$description')";
       if(mysqli_query($connection,$sql))
       {
       
        echo'<script>location.replace("adminhome.php")</script>';
       }
       else
       {
        echo "ERROR".$connection->error;
       }
     }
     if(isset($_POST['delete_btn']))
     {
        $user_id=$_POST['id'];
        $delete_query="DELETE FROM login where id='$user_id'";
        $delete_query_run= mysqli_query($connection,$delete_query);
        if($delete_query_run)
        {
            $_SESSION['status']="Data deleted successfully";
            header('location:adminhome.php');
            

        }
        else
        {
            $_SESSION['status']="unsuccessful deletion of data";
            header('location:adminhome.php');
        }

     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD TASK</title>
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
                        <h1> ADD task </h1>
                    </div>
                    <div class="card-body">
 
    <form action="" method="post">
        <div class="form-group">
            <label>Reg.num</label>
            <input type="id" name="id" class="form-control"   placeholder="enter user ID" required>
            
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="username" class="form-control"  placeholder="user name" required>
        </div>
        <div class="form-group">
            <label>Task</label>
            <input type="text" name="task" class="form-control"  placeholder="add task" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" class="form-control"  placeholder="task description" required>
        </div>
        <br/>
       <center> <input type="submit" class="btn btn-primary" name="submit" value="add"></center>
    </form>
    
</body>
</html>