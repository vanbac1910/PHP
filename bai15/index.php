<?php
//khai báo hàm __autoload
function __autoload($className)
{
    //kiểm tra xem file tồn tại không
    if(file_exists($className . '.php')){

        include_once $className . '.php';
    }
}
//Khởi tạo 2 class
$nguoilon = new NguoiLon();

$trecon = new TreCon();
