<html> 
    <body style = "text-align:center;"> 
        <input type="text" value="fahad" name= "aa" id="ttInput"> 
        <button onclick="GeeksForGeeks()">Copy text</button>  
        <script> 
            function GeeksForGeeks() { 
              var copyText = document.getElementById("ttInput"); 
			  
              copyText.select(); 
              document.execCommand("copy"); 
              
            }  
        </script> 

    </body> 
</html> 



<?php

if(isset($_POST['aa'])){
$tt = "<script>document.writeln(copyText)</script>";

echo $tt;

}

?>