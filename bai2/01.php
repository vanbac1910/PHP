<?php
class connguoi {
    //Khai báo thuộc tính động
    var $name;
    var $mat;
    var $mui;
    //Khai báo contstant
    const sochan = 22;

    //khai báo phương thức
    public function an(){

    }
    public function noi($caunoi){
        return $this->getSoChan(); //gọi phương thức trong class
    }
    public function di(){

    }
    public function getName(){
        return $this->name; // gọi  thuộc tính động trong class
    }

    public function getSoChan(){
        return self::sochan; //gọi thuộc tính contstant trong class
    }
}
// Khởi tạo class
$connguoi = new ConNguoi();
//gọi thuộc tính ngoài class đồng thời tạo gán giá trị
$connguoi->name = 'Khuat Van Bac';

echo  $connguoi->name;
echo '<br>';
echo $connguoi->noi('Khuat Van Bac');
