<html>
<head>
<title>FORM1</title>
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
  font-size:18px;

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
<form action="page1_db.php" method="post">
       <table>
        <tr>
         <td><b>Name -</b></td> <td>&nbsp;<input type="text" name="name" required></td><br><br>
        </tr>
        <tr>
         <td><br><br><br><b>State issue Divorce Id- <b></td> 
         <td><br><br><br>&nbsp;<input type="text" name="divorce_id" required></td><br>
        </tr>
         <tr>
         <td><b><br><br><input type="submit" value="Next"><b></td><br>
        </tr>
        
</body>
</html>
