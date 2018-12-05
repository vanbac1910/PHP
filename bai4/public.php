<?php
class Person{
    public $name;
    function setName($name)
    {
        $this->name = $name;
        //đúng vì sử dụng trong class con
    }
    function getName(){
        return $this->name;
    }
}
//khởi tạo lớp Person
$person = new Person();
$person->name = ' Khuat Van B';
$person->setName('Kiều Thị Phương');
echo $person->getName();