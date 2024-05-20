<?php
include "connection.php";
include "navbar.php";
if (isset($_POST["updatebtn"])) {
    $name= $_POST['txtname'];
    $email =$_POST['txtemail'];
    $date = $_POST['txtdate'];
    $gender = $_POST['txtgender'];
    $class = $_POST['txtclass'];
    $address = $_POST['txtaddress'];
    $contact = $_POST['txtcontact'];
    $id = $_POST["txtid"];
      
  $sql = "UPDATE `student` SET  name = '$name', email = '$email', date = '$date', gender = '$gender', class = '$class', address = '$address', contact = '$contact' where `ID`  = '$id'"
    ;
    $result = mysqli_query($conn, $sql);
  
  if($conn){
  echo "database connected successfully";
  }
  
  if(!$conn){
    echo "error database";
  }
  
  
  if ($result) {  
      header("Location: view.php?msg=Data updated successfully");
    }
  
  //else {
   //   echo "Failed: " . mysqli_error($conn);
   // }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>student</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style> 

#btn{
  margin-right: 60px;
}

</style>

</head>
<body>
  <div class="container  fw-bold ">
  <?php
    include "connection.php";
    $id= $_GET['updateid'];
    $sql = "SELECT * FROM `student` WHERE ID = $id ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <form class="mt-2 " method="post" action="#">
  <h2 style="text-align:center;  font-weight:bold">Update Student information</h2>
<div class="row  justify-content-sm-center  " >
<div class="col-6 bg-primary">
  <div class="form-group ">
    
    <input type="hidden" name="txtid" id=""  placeholder="Enter your name" value="<?php echo $id ?>" class="form-control">
  </div>
  <div class="form-group my-3">
    <label for="">Full name</label>
    <input type="text" name="txtname" id="" required placeholder="Enter your name" value="<?php echo $row['name']?>" class="form-control">
  </div>

  <div class="form-group my-3 ">
    <label for="">Email</label>
    <input type="email" name="txtemail" id="" required placeholder="Enter your email" class="form-control" value="<?php echo $row['email']?>">
  </div>

  <div class="form-group my-3">
    <label for="">Date</label>
    <input type="date" name="txtdate" id=""   class="form-control" value="<?php echo $row['date']?>">
  </div>
  
  
  
  <div class="form-group my-3">
    <label for=" gender ">Gender</label>
    <select  id="gender" class="form-control" name="txtgender" value="<?php echo $row['gender']?>">
      <option value="Male" <?php if($row["gender"]=="Male") echo "selected" ?>>Male</option>
      <option value="Female"<?php if($row["gender"]=="Female") echo "selected" ?>>Female</option>
    </select>
  </div>

  <div class="form-group my-3">
    <label for="">Class</label>
    <input type="text" name="txtclass" id="" required  placeholder="Enter your Class" value="<?php echo $row['class']?>" class="form-control">
  </div>
  <div class="form-group my-3">
    <label for="">Address</label>
    <input type="text" name="txtaddress" id="" required placeholder="Enter your address" class="form-control" value="<?php echo $row['address']?>" >
  </div>
  <div class="form-group my-3">
    <label for="">Contact</label>
    <input type="text" name="txtcontact" id="" required placeholder="Enter your contact" class="form-control" value="<?php echo $row['contact']?>" >
  </div>
  <div class="form-group my-3">
    
    <input type="hidden" name="txtcontcact" id="" required placeholder="Enter your contact" class="form-control">
  </div>
  
  


</div>
<div class="form-group my-2 center ">
   <button  name="updatebtn" style ="margin-left:45% ; margin-top:1%;font-weight:bold;width:100px; height:40px" id="btn" class="button btn-primary">Update</button>
</div>

</div>

</form>

</div>





</body>
</html>