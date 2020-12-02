<?php namespace App\Controllers;

use App\Models\User;
class TimKiemNguoiDung extends BaseController
{
    public function index(){
        $user_obj = new User();
        $keysearch = $_POST['keysearch'];
        $users = $user_obj->searchUsers($keysearch);
        $data['users'] = $users;
        echo view('List_User',$data);
    }
}
?>