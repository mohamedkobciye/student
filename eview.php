<?php include "connection.php";
include "navbar.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student view </title>
</head>
<body>
    
<div class="container">
    
      <center>  <h2 class="mt-3">Student Information </h2><hr></center>
   
        <div class="col-12">
       
            
<table class="table table-striped table-hover table-bordered border-primary ">
    <thead class="bg-primary text-white fw-bold">
<tr>
    <th scope="row">ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Date</th>
    <th>Gender</th>
    <th>Class</th>
    <th>Address</th>
    <th>Contact</th>
</tr>
    </thead>
    <?php
$query= "select * from student";
$result=mysqli_query($conn , $query);
while($row=mysqli_fetch_array($result)){




?>
    <tbody>
<tr>
    <td><?php echo $row ['ID'];?></td>
    <td><?php echo $row ['name'];?></td>
    <td><?php echo $row ['email'];?></td>
    <td><?php echo $row ['date'];?></td>
    <td><?php echo $row ['gender'];?></td>
    <td><?php echo $row ['class'];?></td>
    <td><?php echo $row ['address'];?></td>
    <td><?php echo $row ['contact'];?></td>
</tr>


    </tbody>


<?php
}
?>




</table>
<center>
<button type="button" class="btn btn-primary text-light fw-bold" ><a href="regg.php" ><span style="color:white ">Register</span></button></a>


</center>


</div>
 

</div>

</body>
</html><br>
<br>
<br>
<br>


<?php include "footer.php";   ?>