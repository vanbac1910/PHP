<?php

class ConNguoi
{
    protected static $name = 'ConNguoi';

    public static function getSelf()
    {
        return new self;

    }

    public static function getStatic()
    {
        return new static;

    }
}

        class NguoiLon extends ConNguoi
        {
        }

        echo get_class(NguoiLon::getSelf());
        //ConNguoi
        echo get_class(NguoiLon::getStatic());
        //NguoiLon