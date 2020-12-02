<?php namespace App\Controllers;

use App\Models\User;
class DanhSachNguoiDung extends BaseController
{
    public function index(){
        $user_obj = new User();
        $users = $user_obj->getUsers();
        $data['users'] = $users;
        echo view('List_User',$data);
    }
}
?>