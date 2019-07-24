
 <?php
 
 
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
 

	 
	 $sql = " SELECT * FROM emp WHERE name = '$nn' AND pass = '$pp'";
	 
	 
	 
	 
	  $res = $conn->query($sql);
	
	 if($res){
		 
		 $rows = mysqli_num_rows($res);
		 
		 if($rows > 0){
			 
			 $data = $res->fetch_assoc();
			 
			 $eid = $data["EID"];
			 
			 
			
		return $eid;
			 
			 
			 
		 }
		 
		 
		 
			 
		 
		 
		 
		 
		 
		
	 
	 }
	 return null;
	 
	 
 }
 
 
 
 
 function requests($ee){
	 
	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
	 
$sql = "INSERT INTO requests(EID) VALUES ($ee)";
$conn->query($sql);







 $eid =  mysqli_insert_id($conn); 
 
 
 return $eid;



	 
	 
	 
	 
	 
	 }
 
 
 
 function insertEr($rr,$dd,$pp,$ss,$tt){
	 
	 
	 
	 
	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	
	 
	 $sql = "INSERT INTO er VALUES ('$rr','$dd','$pp','$ss','$tt')";
	   $conn->query($sql);
	   
	 
	 
	 }
	 
	 
 
 function insertHr($rr,$et,$pp,$nop,$dt,$note,$ss,$tt){
	 
	 
	 
	 
	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	
	 
	 $sql = "INSERT INTO hr VALUES ('$rr','$et','$pp','$nop','$dt','$note','$ss','$tt')";
	   $conn->query($sql);
	   
	 
	 
	 }
 
 
 
 
 function insertMr($rr,$ee,$pp,$dt,$note,$ss,$tt){
	 
	 
	 
	 
	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	
	 
	 $sql = "INSERT INTO mr VALUES ('$rr','$ee','$pp','$dt','$note','$ss','$tt')";
	   $conn->query($sql);
	   
	 
	 
	 }
	 
	 

	 
function listH(){


	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	 //$sql = "select * FROM hr";
	 
	 $sql = "select title FROM hr";
	   $res =$conn->query($sql);
	   
	   if($res){
		   
		   
		   
		   while($rows = mysqli_fetch_assoc($res)){
			  
			   
			   echo $rows["title"];
			   echo "<br>";
			   
			   
			   
		   }
		   
	   }
	   
	   else{
		   
		   echo 'no requests';
		   
	   }
	   
	   
	   



}
 
 
 
function listE(){


	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	 //$sql = "select * FROM hr";
	 
	 $sql = "select title FROM er";
	   $res =$conn->query($sql);
	   
	   if($res){
		   
		   
		   
		   while($rows = mysqli_fetch_assoc($res)){
			  
			   
			   echo $rows["title"];
			   echo "<br>";
			   
			   
		   }
		   
	   }
	   
	   else{
		   
		   echo 'no requests';
		   
	   }
	   
	   
	   


}
 
 
 
 
 
 
 
 
 
function listM(){


	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	 //$sql = "select * FROM hr";
	 
	 $sql = "select title FROM mr";
	   $res =$conn->query($sql);
	   
	   if($res){
		   
		   
		   
		   while($rows = mysqli_fetch_assoc($res)){
			  
			   
			   echo $rows["title"];
			   echo "<br>";
			   
			   
		   }
		   
	   }
	   
	   else{
		   
		   echo 'no requests';
		   
	   }
	   
	   
	   


}


 
function hDetail($tt){


	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	 //$sql = "select * FROM hr";
	 
	 $sql = "select * FROM hr where title = '$tt'";
	   $res =$conn->query($sql);
	   
	   if($res){
		   
		   
		   
		   while($rows = mysqli_fetch_assoc($res)){
			  
			   
			   echo $rows["title"];
			    echo "<br>";
			   echo $rows["EventType"];
			    echo "<br>";
			   echo $rows["Place"];
			    echo "<br>";
			   echo $rows["NoPeople"];
			    echo "<br>";
			   echo $rows["DT"];
			    echo "<br>";
			   echo $rows["Note"];
			   
			   echo "<br>";
			   echo "----------";
			   echo "<br>";
			   
			   
			   
		   }
		   
	   }
	   
	   else{
		   
		   echo 'no requests';
		   
	   }
	   
}



function eDetail($tt){


	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	 //$sql = "select * FROM hr";
	 
	 $sql = "select * FROM er where title = '$tt'";
	   $res =$conn->query($sql);
	   
	   if($res){
		   
		   
		   
		   while($rows = mysqli_fetch_assoc($res)){
			  
			   
			   echo $rows["title"];
			    echo "<br>";
			   echo $rows["Details"];
			    echo "<br>";
			   echo $rows["Place"];
			    echo "<br>";
			  
			   
			   
			   echo "----------";
			   echo "<br>";
			   
			   
			   
		   }
		   
	   }
	   
	   else{
		   
		   echo 'no requests';
		   
	   }
	   
}




function mDetail($tt){


	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	 //$sql = "select * FROM hr";
	 
	 $sql = "select * FROM mr where title = '$tt'";
	   $res =$conn->query($sql);
	   
	   if($res){
		   
		   
		   
		   while($rows = mysqli_fetch_assoc($res)){
			  
			   
			   $tt= $rows["title"];
			    echo "<br>";
			   $ee= $rows["Event"];
			    echo "<br>";
			   $pp= $rows["Place"];
			    echo "<br>";
			   $dt= $rows["DT"];
			    echo "<br>";
			   $nn= $rows["Note"];
			   
			   
			    echo "<br>";
			  
			   
			   
			   echo "----------";
			   echo "<br>";
			   
			   
			   
		   }
		   
	   }
	   
	   else{
		   
		   echo 'no requests';
		   
	   }
	   
}





 


 ?>