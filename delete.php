<?php
include "connection.php";
$id = $_GET["id"];
$sql = "DELETE FROM `student` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: view.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
