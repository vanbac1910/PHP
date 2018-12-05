<?php

class ConNguoi
{
    private $name = "khuất văn Bắc";
    private $age = 22;
    public static function __set_state(array $arr)
    {
        foreach ($arr as $key => $value) {
            echo $key . '->' . $value . '<br/>';
        }
    }
}
$connguoi = new ConNguoi();
eval(var_export($connguoi, true) . ';');