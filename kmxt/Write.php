<?
$USER=$_POST["USER"];
$TIMESTART=$_POST["TIMESTART"];
$ID=$_POST["ID"];
$Key=$_POST["Key"];

$file_path = "Data/".$USER."/"; 
if($Key==1917767838){

 file_put_contents($file_path.$USER.".start",$TIMESTART);
 file_put_contents($file_path.$USER.".id",$ID);
 echo "开始时间".$TIMESTART."\n成功";
 
}else{ 
 echo "获取失败"; 
} 