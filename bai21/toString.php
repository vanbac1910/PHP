<?php

class ConNguoi
{
    private $name = 'Khuất Văn Bắc';
    private $age = 22;
    public function __toString()
    {
        return 'Phương thức __toString() được gọi';
    }
}
echo new ConNguoi();