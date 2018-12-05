<?php
class Role
{
    public $role;

    public function __construct($role)
    {
        $this->role = $role;
    }

    function getRole($role)
    {
        return $role();
    }
}

        //khởi tạo class Role
        $role = new Role(function () {
            return 'Học lập trình PHP ';
        });
        //gán data bằng thuộc tính role
        $data = $role->role;
        //hiển thị role
        echo $data();

        //gọi getRole
        echo $role->getRole(function () {
            return 'Học lập trình Nodejs ';
        });
