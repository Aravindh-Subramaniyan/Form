<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '','divorce_form');

$Name=$_POST['name'];
$DivorceId =$_POST['divorce_id'];
$i=1; 
$_SESSION['tbl'];
$_SESSION['D_ID'] = $DivorceId; 
$i=$_SESSION['tbl'];
$i=$i+1;
$sql = "CREATE TABLE`table".$i."` (
Name VARCHAR(30) ,
Divorce_Id Int(10),
DOB VARCHAR(10),
Nationality VARCHAR(50),
Marital_Status VARCHAR(10),
Education Varchar(10)
)";
$con=mysqli_query($conn,$sql);

$sql2= "INSERT INTO `table".$i."`(Name,Divorce_Id)
    VALUES ('$Name','$DivorceId')";
   
   $_SESSION['tbl']=$i;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
	
 
if ($conn->query($sql2) === TRUE) {
   // echo "New record created successfully";
   header("Location: page2.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>