<?php
if (!empty($_POST['folder_name'])){// if may nilagay na name ng folder gagawin yung nasa baba....
   
    $foldername = $_POST['folder_name']; 
    $Name_of_folder = $foldername;
    $path = "UserCreatedFolder";
    $fullPath   = $path . '/' . $Name_of_folder;
    


    if (isset($_POST['create'])){
        
        mkdir($fullPath,0777,true);
   
   
     $filename = $_POST['file_name'];
     
     $myfile = 'X:/xampp/htdocs/php_write_to_file/'.$fullPath.'/'.$filename.'';
     
     $current = $myfile;
     
     $current= $_POST['text_content'];
     
     file_put_contents($myfile, $current);
    

    }
}

echo "<h2>Create a Folder and file In PHP then Display it as a Link </h2>";
//$fileList = glob('X:\xampp\htdocs\php_write_to_file\UserCreatedFolder\*');
$owner_path_folder = glob('UserCreatedFolder\*\*');


foreach($owner_path_folder as $filename2){
   
    if(is_file($filename2)){
    

 

		$namefolder="<img src='icon.jpg' width='30px'>";

		echo "<table id='tbl_folder' border='0' style='border:1px solid grey;min-width:30%;max-width:30%;text-align:center;'>";

		
		echo "<tr>";
        echo "<td style='border:px solid red;width:80px;'>$namefolder  </td> 
        <td style='padding:0px;width:100%;text-align:left;border:0px solid green;float:;'><a href='$filename2'> $filename2 </a> </td>";


        echo "</tr>";
        echo "</table>";
		
    }   
}
?>

<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <form  method="POST" action="">
        <input type="text" name="folder_name" placeholder="Enter Folder Name"><br></br>
        <input type ="text" name ="file_name" placeholder="Enter FileName"><br><br>
        <textarea  name="text_content" placeholder="Type here..."></textarea>
        <br><br>
        <input type="submit" name="create" value="Create">
    </form>
</body>
</html>