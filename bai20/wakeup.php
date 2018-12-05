<?php

class ConNguoi
{
    private $name = 'Khuất văn B';
    private $age = 22;
    public function __sleep()
    {
        return array('name');
    }
    public function getName()
    {
        echo $this->name;
    }
    /**
     * gọi hàm getName khi unserialize()
     */
    public function __wakeup()
    {
        $this->getName();
    }
}
unserialize(serialize(new ConNguoi()));