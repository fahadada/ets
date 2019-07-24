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

    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
  
  <div class = "vertical-center">
  
    <div class="container">
      <div class="row">
        <form action="" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
		    <input type="text" name="title"> العنوان<br>
   <br>
  <input type="text" name="event"> الحدث  <br>
  <br>
  <input type="text" name="place"> المكان  <br>
  <br>
  <input type="text" name="tt"> التاريخ<br>
  <br>
  <input type="text" name="info"> معلومات إضافية  <br>
  <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
	</div>
  </body>
</html>

<?php
// connect to the database

include 'DB.php';


	 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pp";
	 
 $conn =  new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

	
	

if(isset($_GET['id'])){

	

$id = $_GET['id'];	



// Uploads files
if (isset($_POST['save'])) { 

$tt = $_POST['title'];	
$ee = $_POST['event'];
$pp = $_POST['place'];
$dt = $_POST['tt'];
$in = $_POST['info'];// if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx' , 'rar'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads,RID,event,place,DT,notes,title) VALUES ('$filename', '$size', 0,'$id','$ee','$pp','$dt','$in','$tt')";
			$sql2="update mr set status='accepted' where RID = $id";
            if (mysqli_query($conn, $sql)) {
				 if (mysqli_query($conn, $sql2)) {
                header("Location: listM.php");
				 }
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

}
?>
