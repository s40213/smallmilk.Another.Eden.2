<?
$USER=$_POST["USER"];
$file_path = "Data/".$USER."/".$USER.".long";
if(file_exists($file_path)){
$fp = fopen($file_path,"r");
$str = fread($fp,filesize($file_path));
fclose($fp);
echo $str = str_replace("\r\n","<br />",$str);
}
