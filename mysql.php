<?php
header("Content-Type: text/html;charset=utf-8"); 
$link=new mysqli("localhost","root","","blog") or die("连接失败");
var_dump($link);
// mysql_select_db("blog") or die("链接数据表错误");
// $row=mysql_query($link,"select * from blog-content");
mysqli_query($link,"set names utf8");//留意names，有一个s结尾
$link->query("insert into `blog-content` (id,title,content,click_count) values ('','啊啊所多','阿萨德','1')");
$row=$link->query("SELECT * FROM `blog-content` WHERE 1") or die("查询失败");
var_dump($row);
if ($row->num_rows>0) {
    while($row2=$row->fetch_assoc()){
        echo $row2["id"], $row2["title"],"<br>";
    }
}
$link->close();