<?php
header('content-type:text/html;chartset=utf-8');
// $stu=array("name1"=>"tom","name2"=>'qwe',"name3"=>"asd");
// $str1=serialize($stu);
// var_dump($str1);
// file_put_contents("c:/txt.txt",$str1);
// echo "<hr>";
// $str2=file_get_contents("c:/txt.txt");
// var_dump($str2);
// $array=unserialize($str2);
// var_dump($array);
echo DIRECTORY_SEPARATOR;// '\'

class obj
{
    public $name="asd";
}

$obj=new obj();
$ser1=serialize($obj);
file_put_contents("c:/test.txt",$ser1);
$str=file_get_contents("c:/test.txt");
$ser2=unserialize($str);
var_dump($ser2);