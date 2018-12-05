<?php

class ConNguoi
{
    private $name = "khuất văn B";
    private $age = 22;

    public static function __callStatic($methodName, $arguments)
    {
        echo 'Bạn vừa gọi phương thức: ' . $methodName . ' và có các tham số: ' . implode('-', $arguments);
    }

    private static function getInfo()
    {
        echo $this->name . ' + ' . $this->age;
    }
}
ConNguoi::getInfo();
/*Khi truyền tham số*/
ConNguoi::getInfo('name', 'age');
