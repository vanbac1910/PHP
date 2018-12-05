<?php

class ConNguoi
{
    private $name = "Khuất Văn B";
    private $age = 22;
    public function __call($methodName, $arguments)
    {
        echo 'Bạn vừa gọi phương thức: ' . $methodName . ' và có các tham số: ' . implode('-', $arguments);
    }
    private function getInfo()
    {
        echo $this->name . ' + ' . $this->age;
    }
}
$connguoi = new ConNguoi();
//Khi không truyền tham số.
$connguoi->getInfo();
//Khi truyền tham số
$connguoi->getInfo('name', 'age');