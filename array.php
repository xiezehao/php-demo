<?php
// $array=array('0' =>"qwe" ,"1"=>"asd","2"=>"zxc" );
// $array = array('0','1','2','3' );
// $array = array(array('1' ,'2','3'),array('4' ,'5','6'), array('7' ,'8','9'));
// $array=["1","2","3"];
// $array=[["1","2","3"],["4","5"]];
// $array=["qwe"=>"123","asd"=>456,"zxc"=>true];
// $array[1]=array("id"=>"1","name"=>"qwe");
// $array[2]=array("id"=>"2","name"=>"asd");
// $array[3]=array("id"=>"3","name"=>"zxc");
// foreach ($array as $key => $value) {
//     $id[]=$value["id"];
//     $name[]=$value["name"];
// }
// $id=array_column($array,"id");
// $name=array_column($array,"name");
// var_dump($name);
// var_dump($id);

// $str="2017-09-17";
// var_dump(explode("-",$str));
// $array = array('0','1','2','3' );
// var_dump(implode("-",$array));

// $array = array('4','3','2','6',"q","d" );
// sort($array);//正序
// var_dump($array);
// rsort($array);//倒序
// var_dump($array);
// shuffle($array);//打乱顺序
// var_dump($array);

// $array=array("q"=>2,"a"=>6,"f"=>"1");
// asort($array);
// var_dump($array);
// ksort($array);
// var_dump($array);

// $array = array('4','3','2','6',"q","d" );
// var_dump(array_reverse($array));
// $arr=array("100" => "PHP中文网", "200" => "www.php.cn", "300" => "百度","400" => "搜狗");
// var_dump(array_reverse($arr,true));

// $array = array('4','3','2','6',"q","d" );
// var_dump(array_slice($array,2,3));
// var_dump($array);
// $arr=array_splice($array,1,2,array("z","q");
// var_dump(array_chunk($array,2));
// $array2=array("a","r","b","5");
// var_dump(array_merge($array,$array2));
// $array3=array("qwe"=>12,"asd"=>45);
// $array4=array("zxc"=>78,"asd"=>963);
// var_dump(array_merge($array3,$array4));
// var_dump(array_pop($array));//删除尾部元素
// var_dump($array);
// var_dump(array_shift($array));//删除头部元素
// var_dump($array);
// unset($array);
// var_dump($array);
$array = array('4','2','2','6',"4","d" );
// var_dump(array_unique($array));
// var_dump(array_unshift($array,"1","4"));
// var_dump($array);
foreach ($array as $key => $value) {
    $array[$key]*=2;
}
var_dump($array);