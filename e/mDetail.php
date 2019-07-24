

 <?php
 


include 'DB.php';

if(isset($_GET['id'])){
	
	
	 $id = $_GET['id'];
	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	 
	 //$sql = "select * FROM hr";
	 
	 $sql = "select * FROM mr where RID = $id";
	   $res =$conn->query($sql);
	   
	   if($res){
		   
		   
		   
		   while($rows = mysqli_fetch_assoc($res)){
			  
			   
			    echo $rows["title"];
			    echo "<br>";
			   echo $rows["Event"];
			    echo "<br>";
			   echo $rows["Place"];
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





?>






 
 <html>
 <head>
 <style>





 /* Navbar container */
.navbar {
width: 3.2%;
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
    left:40%;
    top:50%;
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
      <a href="#">الطلبات الحالية</a>
      <a href="#">مغلق</a>
	  <a href ="login.html"> تسجيل الخروج </a>
     
    </div>
  </div> 
 </div>

<form 
   action="/action_page.php" method="get">
<div class="lc" >
<style>
div.relative {
  position: relative;
  left:15px;;
  top : -290px;
border-spacing: 10px;
line-height:120%;
 
}

  </style>

<table style=" position: relative;
 top : -50px;
 left : 120px;
 border-spacing: 20px;
  ">

<tr>
<th>  العنوان </th>
</tr>



<tr>
<th> ا لحدث</th>
</tr>



<tr>
<th> المكان </th>
</tr>


<tr>
<th> التاريخ </th>
</tr>

<tr>
<th> معلومات إضافية </th>
</tr>

</table>

  <div class="relative ; ">
  

</div>
<div style=" position: relative;
  left:15px;
  top : -200px;">
<form action ="" method ="post">



 
</form>
<form>

 <?php  echo '<a href="send.php?id='.$_GET['id'].'">replay</a>'; ?>
 </form>
 
 
 
 
<form action="" method="POST">
<div class="vertical-center">

 <br>

<br>
<input type="submit" value="reject" name="reject" />
</div>
</form>


</body>
</html>
 
 
 
 
 
 <?php
 
 
 
if(isset($_POST['reject'])){
	
	
	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
	$sql = "update mr set status='rejected' where RID = $id";
	
	
	
	if($conn->query($sql)){
		
		header("Location:listM.php");
		exit();
		
		
	}
	
	else {
		
		echo 'wrong query';
		
	}
	
	
	
	
}


 
 
 
 ?>