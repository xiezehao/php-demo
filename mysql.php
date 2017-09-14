<?php
$link=mysqli_connect("localhost","root","","blog") or die("连接失败");
var_dump($link);
// mysql_select_db("blog") or die("链接数据表错误");
// $row=mysql_query($link,"select * from blog-content");
$row=$link->query("select * from blog-content");
var_dump($row);
$link->close();