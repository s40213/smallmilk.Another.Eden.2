<?
$USER=$_POST["USER"];
$file_path = "Data/".$USER."/";
unlink($file_path.$USER.".id");
unlink($file_path.$USER.".start");
unlink($file_path.$USER.".long");
$file_path = "Data/".$USER;
//删除文件夹
if(is_dir($file_path)){//先判断是不是文件夹 
 if(rmdir($file_path)){//判断是否能删除成功 
  echo "删除卡密成功"; 
 }else{ 
  echo "无法删除卡密";//如果文件夹不为空，是无法删除的 
 } 
}else{ 
 echo "卡密不存在"; 
} 
 