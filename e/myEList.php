<?php

session_start();
	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

$a = $_SESSION['a'];
	 
	 //$sql = "select * FROM hr";
	 
	 echo "sended";
	 echo "<br>";
	 
	 $sql = "select * from er where RID=any(SELECT RID from requests where EID =any(select EID FROM emp where EID =$a)) AND status = 'sended'";
	   $res =$conn->query($sql);
	   
	   if($res){
		   
		   
		   
		   while($rows = mysqli_fetch_assoc($res)){
			  
			   
			     echo '<a href="retriveOnly.php?id='.$rows["RID"].'">'.$rows["title"].'</a>';
			   echo "<br>";
			   
			   
		   }
		   
	   }
	   
	   else{
		   
		   echo 'no requests';
		   
	   }
	   
	   
	   
echo '------------------';


 echo "<br>";
 
  echo "accepted";
  echo "<br>";
	 
	 $sql2 = "select * from er where RID=any(SELECT RID from requests where EID =any(select EID FROM emp where EID =$a)) AND status = 'accepted'";
	   $res =$conn->query($sql2);
	   
	   if($res){
		   
		   
		   
		   while($rows = mysqli_fetch_assoc($res)){
			  
			   
			     echo '<a href="retriveOnly.php?id='.$rows["RID"].'">'.$rows["title"].'</a>';
			   echo "<br>";
			   
			   
		   }
		   
	   }
	   
	   else{
		   
		   echo 'no requests';
		   
	   }
	   


echo '------------------';
 
 
 echo "<br>";
	 
  echo "rejected";
  echo "<br>";
	 $sql3 = "select * from er where RID=any(SELECT RID from requests where EID =any(select EID FROM emp where EID =$a)) AND status = 'rejected'";
	   $res =$conn->query($sql3);
	   
	   if($res){
		   
		   
		   
		   while($rows = mysqli_fetch_assoc($res)){
			  
			   
			     echo '<a href="retriveOnly.php?id='.$rows["RID"].'">'.$rows["title"].'</a>';
			   echo "<br>";
			   
			   
		   }
		   
	   }
	   
	   else{
		   
		   echo 'no requests';
		   
	   }
	   


?>