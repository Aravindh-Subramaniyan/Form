<html>
<head>
<title>FORM3</title>
<style>
 body {
    background-color : #db564d;
    margin: 100;
    padding: 50;
     color:white;
    font-size:10px;
    font-weight:bold;
}
h1 {
    color : #000000;
    text-align : center;
    font-family: "SIMPSON";
}
form {
    width: 500px;
    margin: 0 auto;
    display: inline-block;

}
input[type=text] {
 background-color: #db564d;
  color: white;
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 4px;
  font-size:20px;

}

input[type=submit]{
background-color: #db564d;
color: white;
box-sizing: border-box;
border: 2px solid #db564d;
border-radius: 4px;
font-weight:bold;
font-size:30px;
}

}
</style>
</head>
<body>
<form action="page3_db.php" method="post">
       <table>
        <tr>
	      <td><b>Marital Status-</b></td> &nbsp;<td><input type="text" name="Marital_Status" required></td><br><br>
        </tr>
        <tr>
         <td><br><br><br><b>Highest education- <b></td> 
         <td><br><br><br><input type="text" name="Edu" required></td><br>
        </tr>
         <tr>
         <td><b><br><br><input type="submit" value="Submit"><b></td><br>
        </tr>
        
</body>
</html>
