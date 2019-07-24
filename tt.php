
	 
	 $sql = " SELECT * FROM emp ";
	 $res = mysqli_query($sql  ,$conn);
	
	 if($res){
		 
		 $rows = mysqli_num_rows($res);
		 
		 if($rows > 0){
			 
			 
			 echo "goooood";
			 
			 
			 
		 }
		 
		 
		 
		 
		 
	 }
	 
	 else {
		 
		 
		 echo 'faaaaaaild';
	
	
	 }
	 
	 
	 return  $rows;
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	  $res = $conn->query($sql);
	
	 if($res){
		 
		 $rows = mysqli_num_rows($res);
		 
		 if($rows > 0){
			 
			 
			
			 
			 
			 echo "goooood";
			 
			 
			 
		 }
		 
		 
		 
		 
		 
	 }
	 
	 else {
		 
		 
		 echo 'faaaaaaild';
	
	
	 }
	 
	 
	 
	
	
	