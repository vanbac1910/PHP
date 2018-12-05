<?php
class Personnel {
    private $name = 'khuat van B';
    private $age = 22;

    public function getPersonnel(){
        return $this->name . '-'  . $this->age;
    }
}