<?php

class ConNguoi
{
    private $name = 'Khuất Văn Bắc';
    private $age = 22;
    public function __invoke($name)
    {
        if ($name === 'name') {
            echo $this->name;
        }
    }
}
$congnuoi = new ConNguoi();
$congnuoi('name');