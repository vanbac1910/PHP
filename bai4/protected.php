<?php
class Person{
    //khai báo thuộc tính dưới dạng protected
    protected $name;
}

class male extends Person{
    function setName($name)
    {
        $this->name = $name;

}
    function getName()
    {
        return $this->name;
    }
}

//KHời tạo lớp Person

$person = new Person();

//khởi tạo lớp male
$male = new Male();
// tác động vào biến name qua hàm setname
$male->setName('KHuất Văn B');
echo $male->getName();