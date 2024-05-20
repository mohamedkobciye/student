<?php
include "navbar.php";


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
    <form class="mt-2 " method="post" action="save.php">
  <h2 style="text-align:center;  font-weight:bold">Student information</h2>
<div class="row  justify-content-sm-center  " >
<div class="col-6 bg-primary ">


  <div class="form-group my-3">
    <label for="">Full name</label>
    <input type="text" name="txtname" id="" required placeholder="Enter your name" class="form-control">
  </div>


  <div class="form-group my-3 ">
    <label for="">Email</label>
    <input type="email" name="txtemail" id="" required placeholder="Enter your email" class="form-control">
  </div>

  <div class="form-group my-3">
    <label for="">Date</label>
    <input type="date" name="txtdate" id=""   class="form-control">
  </div>
  
  
  <div class="form-group my-3">
    <label >Gender</label>
    <select class="form-control" name="txtgender">
      <option>Choose your gender</option>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>

  <div class="form-group my-3">
    <label for="">Class</label>
    <input type="text" name="txtclass" id="" required  placeholder="Enter your Class" class="form-control">
  </div>
  <div class="form-group my-3">
    <label for="">Address</label>
    <input type="text" name="txtaddress" id="" required placeholder="Enter your address" class="form-control">
  </div>
  <div class="form-group my-3">
    <label for="">Contact</label>
    <input type="text" name="txtcontact" id="" required placeholder="Enter your contact" class="form-control">
  </div>
  <div class="form-group my-3">
    
    <input type="hidden" name="txtcontact" id="" required placeholder="Enter your contact" class="form-control">
  </div>
  
  


</div>
<div class="form-group my-3 center ">
   <button  name="savebtn" style ="margin-left:45% ; margin-top:1%;font-weight:bold" id="btn" class="button btn-primary">Submit</button>
</div>

</div>

</form>

</div>




</body>
</html>








<?php 

include "footer.php";
?>