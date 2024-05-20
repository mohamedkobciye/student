<?php 
include "connection.php";
if (isset($_POST['savebtn']))

{

	$name= $_POST['txtname'];
	$email =$_POST['txtemail'];
	$date = $_POST['txtdate'];
	$gender = $_POST['txtgender'];
	$address = $_POST['txtaddress'];
	$class = $_POST['txtclass'];
	$contact = $_POST['txtcontact'];
	
	if($conn){
		
		$quary = (" INSERT INTO `student` VALUES (NULL, '$name', '$email', '$date', '$gender', 
		 '$class','$address', '$contact')");
		$quary_run =mysqli_query($conn , $quary);
		if($quary_run){
			echo "<script>alert('data saved successfully')</script>";

        header("Location: view.php");

		}else{
			echo "not saved";
		}
	}

}











 ?>