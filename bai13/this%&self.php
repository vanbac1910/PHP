<?php


class ConNguoi
{
public static $name = 'ConNguoi';

public function setName($name)
{
$this->name = $name;
}

public function echoName()
{
echo $this->name;
}
}

//Khởi tạo class
$nguoilon = new ConNguoi();
//setName
$nguoilon->setName('khuất văn B');
//echoName
$nguoilon->echoName();

echo $nguoilon->name;

// Khởi tạo  class Tre con
$trecon = new ConNguoi();
//gọi phương thức echoName
$trecon->echoName();

//gọi thuộc tính name
$trecon->name;
