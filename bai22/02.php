<?php

class ConNguoi
{
    public $name = "Khuất Văn Bắc";
    public $age = 21;
    public function __clone()
    {
        echo 'Phương thức __clone() được gọi';
    }
}
$connguoi = new ConNguoi();
$connguoi2 = clone $connguoi;
// Phương thức clone() được gọi
echo $connguoi2->name;