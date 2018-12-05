<?php
abstract class Dongvat
{
    protected $name;
    abstract protected function getName();

}

class ConHo extends Dongvat {
    public function getName()
    {
        return $this->name;
    }
}