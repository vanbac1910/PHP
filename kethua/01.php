<?php
class ParentClass {
    function getClass() {
        return 'ParentClass';
    }
}
Class ChildClass extends ParentClass{
    var $name = 'ChildClass';

    function getclass()
    {
    return 'ChildClass';
    }
    function getMethod(){
        echo 'Đây là phương thức ăn của lớp ' . $this->getclass();
    }
    function getMethodParent(){
        echo 'đây là phương thức ăn của lớp' . parent::getClass();
    }
}

$class = new ChildClass();
$class->getMethod(); //Đây là phương thức ăn của lớp trẻ con
echo '<br>';
$class->getMethodParent(); // Đây là phương thức ăn của Lớp người lớn
