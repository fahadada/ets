 <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Multiple image upload</title>
  </head>
  <body>
 <form method="post" action="process.php">
 <input type="file" name="image[]" multiple="multiple" >
 <p align="center"><button type="submit" class="btn btn-warning" id="butsave">Submit<span class="glyphicon glyphicon-send"></span></button></p>
 </form>
 </body>
 </html>
 
 
  <?php 
 $output_dir = "upload/";/* Path for file upload */
    $fileCount = count($_FILES["image"]['name']);
	for($i=0; $i < $fileCount; $i++)
		
		{
            $RandomNum   = time();
        
            $ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][$i]));
            $ImageType      = $_FILES['image']['type'][$i]; /*"image/png", image/jpeg etc.*/
         
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt       = str_replace('.','',$ImageExt);
            $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            
            $ret[$NewImageName]= $output_dir.$NewImageName;
            
            /* Try to create the directory if it does not exist */
			if (!file_exists($output_dir . $last_id))
			{
				@mkdir($output_dir . $last_id, 0777);
			}
                        
            move_uploaded_file($_FILES["image"]["tmp_name"][$i],$output_dir.$last_id."/".$NewImageName );
		    
             $insert_img = "insert into images SET `category_ads_id`='".$category_ads_id_image."', `image`='".$NewImageName."'";
              $result = $dbobj->query($insert_img);*/
               }
    
        echo "Image Uploaded Successfully";
        ?>
        