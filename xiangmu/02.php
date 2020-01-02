<?php
$yname=$_POST['yname'];
$sal=$_POST['sal'];
$city=$_POST['city'];
echo $yname;
echo $sal;
echo $city;
require_once 'DAOPDO.class.php';
$configs=array(
    'dbname'=>'test'
);
$dao=DAOPDO::getSingleton($configs);
$sql="insert into employ(id,yname,sal,city) values (null,'$yname','$sal','$city')";
$res=$dao->query($sql);
if($res){
    header("Location:01.php");
}else{
    header("Location:02.html");
}