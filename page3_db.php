<?php
session_start(); 
$conn = mysqli_connect('localhost', 'root', '','divorce_form');

$MS=$_POST['Marital_Status'];
$H_Edu =$_POST['Edu'];
$DivID=$_SESSION['D_ID'];
$i=$_SESSION['tbl'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE `table".$i."` SET Marital_Status='$MS', Education='$H_Edu' WHERE Divorce_Id='$DivID'";
 
if ($conn->query($sql) === TRUE) {
	header("Location: thanks.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>