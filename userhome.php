<?php
session_start();
if(isset($_POST['delete_btn']))
     {
        $user_id=$_POST['id'];
        $delete_query="DELETE FROM task where id='$user_id'"; 
        $delete_query_run= mysqli_query($connection,$delete_query);
        if($delete_query_run)
        {
            $_SESSION['status']="Data deleted successfully";
            header('location:userhome.php');
            

        }
        else
        {
            $_SESSION['status']="unsuccessful deletion of data";
            header('location:userhome.php');
        }

     }
?>
<!DOCTYPE html>
<html>
<head>
	<title>user</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
 #result {
 position: absolute;
 width: 100%;
 max-width:870px;
 cursor: pointer;
 overflow-y: auto;
 max-height: 400px;
 box-sizing: border-box;
 z-index: 1001;
}
 body
 {
 background-color:LightCyan;

 }

 </style>

</head>

<body>
<a href="logout.php" ><button class="btn btn-info">logout</button></a>


	<center>
<h1>USER HOMEPAGE</h1>

<table class="table table-bordered" style="width:50%">

<thead>
        <tr>
		    <th>ID</th>
            <th>USERNAME</th>
            <th>TASK</th>
            <th>DESCRIPTION</th>
			<th>STATUS</th>

            
		</tr>
		
</thead>
<tbody>
<?php
        $connection=mysqli_connect("localhost","root","","user");
        $username = $_SESSION['username'];
        $fetch_query="select * from task WHERE username = '$username'";
        $fetch_query_run=mysqli_query($connection,$fetch_query);
        if(mysqli_num_rows($fetch_query_run)>0)
        {
            foreach($fetch_query_run as $row)
            {
        
                ?>
   

            <tr>
			    <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['task']; ?></td>
                <td><p align="justify"><?php echo $row['description']; ?></p></td>
				<td>
                        <form action="userhome.php" method="POST">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>">
                    <button type="submit" name="delete_btn"  class="btn btn-info">Completed</button></td>
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



</center>
</body>
</html>