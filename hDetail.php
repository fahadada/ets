

 <?php
 


include 'DB.php';
if(isset($_GET['id'])){
	
	
$id = $_GET['id'];
 
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
	 
	 $sql = "select * FROM hr where RID = $id " ;
	   $res =$conn->query($sql);
	   
	   if($res){
		   
		   
		   
		   while($rows = mysqli_fetch_assoc($res)){
			  ?>

			   
		
 
 <html>
 <head>
 <style>





 /* Navbar container */
.navbar {
width: 2.8%;
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px; 
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a black background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: black;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
 















.lc {
    position: absolute;
    left:37%;
    top:45%;
	 text-align: right;
}


.topright {
    position: absolute;
    right:0;
    top:0;
}
.vertical-center {
  margin: 0;
  position: absolute;
  top: 40%;
  left: 42%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
</style>

  <div class="topright">
    <img src="gov.png", 
    />
</div>
 <title>ETS</title>
 <div class="vertical-center"><h3> طلبات الضيافة<h3></div>
</head>
<body>
<div class="navbar">

 <div class="dropdown">
    <button class="dropbtn"><img src="4s.png" width = '10' size = '10' , 
    />
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a href="homePage.php">طلباتي</a>
	    <a href="listMr.php">الوارد</a>
	  <a href ="logout.php"> تسجيل الخروج </a>
     
    </div>
  </div> 
 </div>

<form 
   action="" method="post">
<div class="lc" >
<style>
div.relative {
  position: relative;
  right:-200px;
 
}
  </style>
 
<ol>
   <output type="text" name="type"  > <?php  echo $rows["RID"]; ?> :الرقم الوظيفي<br>
   <br>
   <output type="text" name="type"  > <?php  echo $rows["EventType"]; ?> :النوع<br>
   <br>
  <output type="text" name="place"> <?php   echo $rows["Place"];  ?>  :المكان<br>
  <br>
  <output type="text" name="no"> <?php   echo $rows["NoPeople"];  ?> :العدد<br>
  <br>
  <output type="text" name="tt">  <?php   echo $rows["DT"];  ?>:التاريخ والوقت<br>
  <br>
  <output type="text" name="info"> <?php   echo $rows["Note"];  ?>:معلومات إضافية<br>
  <br>
  
  </ol>
</div>
<?php	   
		   }
		   
	   }
	   
	   else{
		   
		   echo 'no requests';
		   
	   }

}




?>
<!--
<h5> اختيار المرفقات </h5>

<form action="/action_page.php">
   <input type="file" name="myFile" multiple><br><br>
  
</form>
-->

<form action = "hDetail.php" method="POST">
<div class="vertical-center">

 <br>

<br>

</div>
</form>

</body>

 </html>


<?php

if(isset($_POST['accept'])){
	
	
	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
	$sql = "update hr set status='accepted' where RID = $id";
	
	if($conn->query($sql)){
	
	header("Location:listH.php");
	exit();
	
	}
	
	else {
		
		echo 'wrong';
	}
	
	
}


if(isset($_POST['reject'])){
	
	
	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
	$sql = "update hr set status='rejected' where RID = $id";
	
	
	
	if($conn->query($sql)){
		
		header("Location:listH.php");
		exit();
		
		
	}
	
	
	
	
}





?>