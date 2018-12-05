<?php
class Bar {
    public function __construct()
    {
        echo 'clas Bar đã được khởi tạo';
        echo '<br>';
    }
    public function __destruct()
    {
       echo 'class Bar đã đưuộc hủy';
    }
}
class Foo extends Bar {
    public function __construct()
    {
        parent::__construct(); //gọi phương thức tạo của cha
        echo 'class Foo được khởi tạo';
        echo '<br>';
    }
    public function __destruct()
    {
        parent::__destruct(); //gọi phương thức hủy của cga
        echo 'class Foo đã được hủy';
    }
}

$foo = new Foo();