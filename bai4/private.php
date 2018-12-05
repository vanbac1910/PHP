<?php
class Person {
    private $name;
    private function run(){
        return 'đây là hàm run';
    }
    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
    function getRunMethod(){
        return $this->run();
    }
}

//Khởi tạo class
 $person = new Person();
$person->setName('Khuat Van Bac'); //set thuộc tính name
echo $person->getName(); //lấy ra thuộc tính name
echo '<br>';
echo $person->getRunMethod(); //gọi ra giá trị của phương thức run