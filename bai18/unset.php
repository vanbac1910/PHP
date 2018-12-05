<?php

class ConNguoi
{
    private $name;
    public function __unset($name)
    {
        echo 'Bạn vừa hủy thuộc tính: ' . $name;
    }
}
//Khởi tạo đối tượng
$connguoi = new ConNguoi();
unset($connguoi->name);
unset($connguoi->age);
