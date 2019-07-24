

<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>

<table>
<thead>
  
    <th>Filename</th>
	<th>title</th>
	<th>place</th>
	<th>DT</th>
	<th>notes</th>
	
  
   
    <th>Action</th>
</thead>
<tbody>
  <?php

include 'DB.php';

if(isset($_GET['id'])){

$id = $_GET['id'];	

$sql = "SELECT * FROM files WHERE RID= $id";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
foreach ($files as $file): ?>
    <tr>
     
      <td><?php echo $file['name']; ?></td>
	  <td><?php echo $file['title']; ?></td>
	  <td><?php echo $file['event']; ?></td>
	  <td><?php echo $file['place']; ?></td>
	  <td><?php echo $file['DT']; ?></td>
	  <td><?php echo $file['notes']; ?></td>
    
      
      <td><a href="pvTest.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>



<?php



// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}

?>


<?php


// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
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
 <div class="vertical-center"><h3>طلبات المركز الإعلامي<h3></div>
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
  right:-200px;
 
}
  </style>
  <div class="relative">
<ol>
 <output type="text" name="title"  > :title<br>
   <br>
   <output type="text" name="type"  > :النوع<br>
   <br>
  <output type="text" name="place">  :المكان  <br>
  <br>
  <output type="text" name="no">  :الحدث  <br>
  <br>
  <output type="text" name="tt">  :التاريخ<br>
  <br>
  <output type="text" name="info"> :معلومات إضافية  <br>
  <br>
  </ol>
</div>
<h5> اختيار المرفقات </h5>

<form action="/action_page.php">
   <input type="file" name="myFile" multiple><br><br>
  
</form>

  <input type="submit" value="قبول">
  
  
   <input type="button" value="رفض"
  button onclick="location.href = 'pagepr.html'" >
</form>



</body>