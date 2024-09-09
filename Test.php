<?
$USER=$_POST["USER"];
$file_path = "Data/".$USER."/".$USER.".long";
if(is_file($file_path)){
echo "存在";
}else{
echo "不存在";
}
