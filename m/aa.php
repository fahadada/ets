 
 
 
 
 
 
 
 
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 


.topright {
    position: absolute;
    right:0;
    top:0;
}
.topleft {
    position: absolute;
    left:10;
    top:10;
}
.pc {
    position: absolute;
    right:25%;
    top:50%;
}

.pr {
    position: absolute;
    left:20%;
    top:55%;

}

.vertical-center {
  margin: 0;
  position: absolute;
  top: 40%;
  left: 40%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.pr-t{
  margin: 0;
  position: absolute;
  top: 86%;
  left: 22%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}




.pc-t {
  margin: 0;
  position: absolute;
  top: 86%;
  left: 63%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

</style>
 <title>ETS</title>
 <div class="vertical-center"><h2  >حدد نوع الطلب<h2></div>
  <div class="pr-t"> <a href = 'myHList.php' style="text-decoration : none; color : #000000;" > <h2  >العلاقات العامة<h2> </a></div>
 <div class="pc-t"> <a href = 'pc.html' style="text-decoration : none; color : #000000;" > <h2  >الدعم الفني<h2> </a></div>
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
	  <a href ="logout.php"> تسجيل الخروج </a>
     
    </div>
  </div> 
 </div>
 
 
 
 
 
 <div class="topright">
   <img src="gov.png", 
    />
</div>



 <div class="pc">
   <a href = 'pc.html'> <img src="pc.png", 
    /> </a>
</div>

 <div class="pr">
   <a href = 'pagepr.html'> <img src="pr.png",
    width = '160', height = '160'/> </a>
</div>



 </body>
</html>


<?php



?>