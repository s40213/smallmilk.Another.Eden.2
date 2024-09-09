<?
$USER=$_POST["USER"];
$TIMELONG=$_POST["TIMELONG"];
$Key=$_POST["Key"];

if($Key==1917767839){

//文件夹的创建 
$file_path = "Data/".$USER."/"; 
if(!file_exists($file_path)){ 
 mkdir($file_path); 
 file_put_contents($file_path.$USER.".long",$TIMELONG);
 echo $USER."|".$TIMELONG."\n成功";
}else{ 
 echo "卡密已存在"; 
} 
}else{ 
 echo "获取失败"; 
} 