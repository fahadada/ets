

 
 

<?php


session_start();


include 'DB.php';







if(isset($_SESSION['a'])){

	
	header("Location: aa.php");
	exit();
	
	
}

if(isset($_POST['zero'])){
	
$nn = $_POST['uname'];
$pp = $_POST['pass'];

$a=checkEmp($nn ,$pp);

if($a>0){
	
	
	$_SESSION['a'] = $a;
 
	header("Location: aa.php");
	exit();
	
	
	
}
	else 
		?>
<html>

		<div class = 'gtg'>
		<?php
		echo "wrong user name or password";
		?>
	</div>
<?php

	
}



?>


<head>

 <style>






 input[type="text"]::placeholder {  

                text-align: right; 
            } 
			input[type="password"]::placeholder {  

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
  left: 40%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.gtg {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 39.2%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}






</style>

</head>
<body>

<div class="topright">
   <img src="gov.png", 
    />
</div>

<form action="" method="POST">
<div class="vertical-center">
<input type="text" placeholder="اسم الستخدم" name="uname" required>
 <br>
<input type="password" placeholder="كلمة المرور" name="pass" required>
<br>
<input type="submit" value="تسجيل الدخول" name="zero" />
</div>
</form>

</body>
</html>

 

