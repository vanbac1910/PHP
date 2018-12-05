<?php

class ConNguoi
{
    private $name = 'khuất văn B';
    private $age = 22;

    public function __sleep()
    {
        return array('name');
    }
}

echo serialize(new ConNguoi());