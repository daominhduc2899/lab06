<?php namespace App\Controllers;

use App\Models\User;
class XoaNguoiDung extends BaseController
{
    public function index(){
        if(isset($_POST['btnxoa'])){
            $user = new User();
            $user->deleteUser($_POST['iduser']);
            $list_user = $user->getUsers();
            $data['users'] = $list_user;
            echo view('List_User',$data);
        }
    }
}
?>