

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
			  ?>






<style>
.ph{
 position: relative; 
 top: 40%; 
 left : 41.5%;
 font-size: 110% ; 
}
 </style>
 




 
 <html>
 <head>
 <style>





 /* Navbar container */
.navbar {
width: 2.7%;
  background-color: #333;
  font-family: Arial;
   float : left;
  position: absolute;
  top : 3px;
    margin : 5px 2px;
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
 left : 600px;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}


</style>

  <div class="topright">
    <img src="gov.png", 
    />
</div>
 <title>ETS</title>
 <div class="vertical-center"><h1> طلبات المركز الإعلامي<h1></div>
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
 left : -10px;
   text-align: right;
 border-spacing: 20px;
  ">

<tr>
<th>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    :العنوان   </th>
</tr>



<tr>
<th> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :الحدث   </th>
</tr>



<tr>
<th>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  :المكان  </th>
</tr>


<tr>
<th>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  :التاريخ </th>
</tr>

<tr>
<th>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :علومات إضافية  </th>
</tr>

</table>



<table style=" position: relative;
 top : -265px;
 left : -190px;
   text-align: right;
 border-spacing: 20px;
  "><tr>
<th>
  <?php echo $rows["title"];?> </th>
</tr><tr>
<th>
  <?php echo $rows["Event"];?></th>
</tr><tr>
<th>
   <?php echo $rows["Place"];?></th>
</tr><tr>
<th>
  <?php echo $rows["DT"];?></th>
</tr><tr>
<th>
  <?php echo $rows["Note"];?></th>
</tr>
</table>




<?php


			  
			   
			   
				
			   
			  
			   
			   
			   
			   
			   
			   
		   }
		   
	   }
	   
	   else{
		   
		   echo 'no requests';
		   
	   }
	   
}




?>


  <div class="relative ; ">
  

</div>
<div style=" position: relative;
  left:15px;
  top : -5	0px;">


</body>
</html>
 