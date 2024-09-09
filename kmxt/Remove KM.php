
<?php    
$USER=$_POST["USER"];
$file_path = "Data/".$USER."/";
unlink($file_path.$USER.".id");
unlink($file_path.$USER.".start");
if(file_path){  
echo "删除成功";    
}else{  
echo "删除失败";    
}  
?>

