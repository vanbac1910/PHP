<?php
class Foo {
    public function __construct()
    {
        echo 'class FOo đã được tạo';

    }

    public function getMessage(){
        echo '<br>';
        echo ' đây là class Foo';

}
    public function __destruct()
    {
        echo '<br>';
        echo 'class Foo đã đưuọc hủy';
    }
}

$foo = new Foo();  //KHởi tạo class Foo

$foo->getMessage();