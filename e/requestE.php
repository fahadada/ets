

 <?php
 


include 'DB.php';



if(isset($_POST['submit'])){
$e = checkEmp("fahad","123");

$b = requests($e);


$tt = $_POST['title'];
$oi = $_POST['orderinfo'];


$pp = $_POST['place'];

insertEr($b,$oi,$pp,'sended',$tt);
	
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
  left: 40%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
</style>

  <div class="topright">
    <img src="gov.png", 
    />
</div>
 <title>ETS</title>
 <div class="vertical-center"><h3  >طلب أجهزة الكمبيوتر وملحقاته<h3></div>
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

<form action="" method="post">
<div class="lc">
 <input type="text" name="title"> title <br>
   <br>
   <input type="text" name="orderinfo"> تفاصيل الطلب<br>
   <br>
      
  <input type="text" name="place"> وصف الموقع  <br>
  <br>
  <input type="submit" name = "submit" value="ارسال">
  
  
   <input type="button" value="تراجع"
  button onclick="location.href = 'p2.html'" >
</form>




</body>