<?php

class db{
    public $localhost="localhost";
    public $name="root";
    public $password="";
    public $db_name="blog";
    public $db;

    public function __construct()
    {
        $this->db=new mysqli($this->localhost,$this->name,$this->password,$this->db_name);
        mysqli_query($this->db,"set names utf8");
    }

    public function query($sql)
    {
        return $this->db->query($sql);
    }

    public function __destruct ()
    {
        $this->db->close();
    }
}

class db2 extends db 
{
    static $nub="123";
    function show()
    {
        echo self::$nub;
    }
}


$db=new db2();
$result=$db->query("select * from `blog-content`");
while ($row=$result->fetch_assoc()) {
    echo $row["id"],$row["title"],"<br>";
}
$db->show();