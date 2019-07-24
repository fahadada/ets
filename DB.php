
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
		 $type = $data["Dep"];
		 
		 if($type == "tech"){
			 
			 header("Location: e/listE.php");
			 
			 
		 }
		 
		 if($type == "pr"){
			 
			 header("Location: h/listH.php");
			 
			 
		 }
		 
		 if($type == "media"){
			 
			 header("Location: m/listM.php");
			 
			 
		 }
		 
		  if($type == "it"){
			 
			 header("Location: aa.php");
			 
			 
		 }
			 
			
		return $eid;
			 
			 
			 
		 }
		 
		 
		 
			 
		 
		 
		 
		 
		 
		
	 
	 }
	 return null;
	 
	 
 }
 
 
 
 
 function requests(){
	 
	 session_start();
	 
	 $ss = $_SESSION['a'];
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
	 
$sql = "INSERT INTO requests(EID) VALUES ($ss)";
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
	 
	 $sql = "select * FROM hr where status = 'sended'";
	   $res =$conn->query($sql);
	   
	   if($res){
		   
		   
		   
		   while($rows = mysqli_fetch_assoc($res)){
			  
			   
			   echo '<a href="hDetail.php?id='.$rows["RID"].'">'.$rows["title"].'</a>';
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
	 
	 $sql = "select * FROM er where status = 'sended'";
	   $res =$conn->query($sql);
	   
	   if($res){
		   
		   
		   
		   while($rows = mysqli_fetch_assoc($res)){
			  
			   
			   echo '<a href="eDetail.php?id='.$rows["RID"].'">'.$rows["title"].'</a>';
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
	 
	 $sql = "select * FROM mr where status = 'sended'";
	   $res =$conn->query($sql);
	   
	   if($res){
		   
		   
		   
		   while($rows = mysqli_fetch_assoc($res)){
			  
			   
			     echo '<a href="mDetail.php?id='.$rows["RID"].'">'.$rows["title"].'</a>';
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





 
function listMr(){


	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	 //$sql = "select * FROM hr";
	 
	 $sql = "SELECT * FROM files WHERE RID=any(select RID from mr where RID=any(SELECT RID from requests where EID =any(select EID FROM emp)))";
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
	   
	   
	   


}



 
function myHList($id){


	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	 //$sql = "select * FROM hr";
	 
	 $sql = "select * from hr where RID=any(SELECT RID from requests where EID =any(select EID FROM emp where EID =$id))";
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
	   
	   
	   


}

 
 
 


 ?>