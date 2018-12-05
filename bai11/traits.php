<?php
class ConNguoi
{
    private $name;
    private $age;
    //gọi trait
    use SetGetName, SetGetAge;

    public function getAll()
    {
        return $this->getName();
    }
}