<?php
session_start(); 
$conn = mysqli_connect('localhost', 'root', '','divorce_form');

$DOB=$_POST['DOB'];
$Nationality =$_POST['Nationality'];
$DivID=$_SESSION['D_ID'];
$i=$_SESSION['tbl'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE `table".$i."` SET DOB='$DOB', Nationality='$Nationality' WHERE Divorce_Id='$DivID'";
 
if ($conn->query($sql) === TRUE) {
	header("Location: page3.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>