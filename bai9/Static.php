<?php
class ConNguoi {
    private static $name = ' amonymouse';

    public function setName($name)
    {
        self::$name = $name;
    }
    public function getName(){
        return self::$name;
    }
}

//Khởi tạo class con người
$chuBlog = new ConNguoi();

//set Name
$chuBlog->setName('Khuất văn Bắc');
echo $chuBlog->getName();
echo '<br>';
$nguoixem = new ConNguoi();
echo $nguoixem->getName();