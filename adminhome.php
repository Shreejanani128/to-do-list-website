<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
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
<a href="add.php" ><button class="btn btn-info">add user</button></a>
<a href="add_task.php" ><button class="btn btn-info">add task</button></a>
<a href="logout.php" ><button class="btn btn-info">logout</button></a>

<center><h1>ADMIN HOMEPAGE</h1>
<br><br>
<table class="table table-bordered"style="width:55%" >

<thead>
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>USERTYPE</th>
            <th>EDIT</th>
            <th>DELETE</th>
</tr>
</thead>
<tbody>
    <?php
       $connection=mysqli_connect("localhost","root","","user");
       $fetch_query="select * from  login";
       $fetch_query_run=mysqli_query($connection,$fetch_query);
       if(mysqli_num_rows($fetch_query_run)>0) 
       {
        foreach($fetch_query_run as $row){
            ?>
            
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['usertype']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a></td>
                    <td>
                        <form action="add.php" method="POST">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>">
                    <button type="submit" name="delete_btn"  class="btn btn-info" align="center" >Delete</button></td>
                    </form>
        </tr>
            <?php 
        }

       }
       else
       {
        ?>
        <tr>
            <td colspan="4"> no data</td>
       </tr>
       <?php
       }
      ?>
    </tbody>
</table>
<h4>LIST OF TASKS</h4>

<table class="table table-bordered" style="width:50%">

<thead>
        <tr>
		    <th>ID</th>
            <th>USERNAME</th>
            <th>TASK</th>
            <th>DESCRIPTION</th>
            
            
		</tr>
</thead>
<tbody>
    <?php
       $connection=mysqli_connect("localhost","root","","user");
       $fetch_query="select * from  task";
       $fetch_query_run=mysqli_query($connection,$fetch_query);
       if(mysqli_num_rows($fetch_query_run)>0) 
       {
        foreach($fetch_query_run as $row){
            ?>
            <tr>
			    <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['task']; ?></td>
                <td><p align="justify"><?php echo $row['description']; ?></p></td>
              
                
        </tr>
            <?php 
        }

       }
       else
       {
        ?>
        <tr>
            <td colspan="4"> no data</td>
       </tr>
       <?php
       }
      ?>
    </tbody>
</table>
</center>
</body>
</html>
