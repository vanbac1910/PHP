<?php

class ConNguoi
{
    public $name = "KHuất Văn Bắc";
    public $age = 21;
    public function __debugInfo()
    {
        return [
            'name' => $this->name,
        ];
    }
}
$connguoi = new ConNguoi();
var_dump($connguoi);