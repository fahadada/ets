



 <?php
 
 
 
 
 ///database class
 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 
 
 
 function checkEmp($nn ,$pp){
	 
	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	 ///$sql = " SELECT * FROM emp ";
	 
	 $sql = "INSERT INTO test VALUES ('$nn','$pp')";
	   $conn->query($sql);
	   
}
	 
 
 ?>
 
 
 
 -------------------------------------------------------------------
 


 <?php
 
///login class

include 'DB.php';


//$sql = "INSERT INTO test VALUES ('hhhdddhh','999399')";
//$conn->query($sql);

checkEmp("hiii","gggg");




?>
 
 
 

<html>
<head>
<title>EMS</title>
</head>
<body>

<form name="form" action="" method="get">
  <input type="text" name="un" id="nn">
  <input type="text" name="psw" id="pp">
  <input type="submit" value="Submit">
  
</form>

</body>
</html>

 
 
 
 

