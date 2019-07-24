
<?php
	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	 //$sql = "select * FROM hr";
	 
	 $sql = "select * FROM mr";
	   $res =$conn->query($sql);
	   
	   if($res){
		   
		   
		   
		   while($rows = mysqli_fetch_assoc($res)){
			  
		        echo $rows["RID"];
				echo "  ";
			   echo $rows["title"];
			  echo "<br>";
			   
			   
			   
		   }
		   
	   }
	   
	   else{
		   
		   echo 'no requests';
		   
	   }
	   
?>	   