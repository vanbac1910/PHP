<?php
/*class foo {
    public function foo(){
        echo 'class foo được khởi tạo';
    }
}

new foo();*/

class Foo {
    public function __construct()
    {
        echo 'class Foo được khởi tạo';

    }
}
new Foo();