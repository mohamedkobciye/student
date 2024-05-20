<?php include "navbar.php";?>
<?php include "connection.php";?>






<html>
<head><link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <title>Student view </title>
</head>
<body>
<section class="intro">
  <div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px"><br><br>
                  <form action="" method="post">
  <center id="head"><h2>Students View</h2></center><hr>
 



               
            
                  <table class="table table-striped mb-0 table-bordered border-primary">
                    <tbody>
                    <thead style="background-color: blue; color:white">
                      <tr>
                       <th> ID</th>
      <th> Name</th>
      <th>Email</th>
      <th>Date</th>
      <th>Gender</th>
      <th>class</th>
      <th>Address</th>
      <th>Contact</th>
      <th>Edit</th>
      <th>Delete</th>
                      </tr>
                    </thead>
                    <?php 


$query="select * from student";
$result=mysqli_query($conn ,$query);
while($row=mysqli_fetch_array($result))
{
?>

<tr>
<th scope="row"><?php echo $row['ID']; ?></th>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['date']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['class']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['contact']; ?></td>
<td><a href="editt.php?updateid=<?php echo $row['ID'] ?>" class="link-dark"><img src="edit.png" height="30" width="36"></a></TD>
           <td>   <a href="delete.php?id=<?php echo $row["ID"] ?>" ><img src="delete.png" height="30" width="36"></a></td>

</tr>
                    
                      
                     
                    </tbody>
                    <?php } ?>
                  </table><br>
                  <center>
                  <button type="button" class="btn btn-primary" style="color: #f5f7fa;"><a href="regg.php" ><Span style="color: #f5f7fa; font-weight:bold;">Register</Span></button></a>

</center> 

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>

</body>
</html>


<?php 
include "footer.php";


?>