<?php
interface DongVat {
    public function getName();
}

interface ConTrau extends DongVat {
    public function CheckSung();

}

class ConNghe implements ConTrau {
    private $name;
    const SUNG = false;
    public function getName(){
        return $this->name;

    }

    public function checkSung(){
        return self::SUNG;
    }
}