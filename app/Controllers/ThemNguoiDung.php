<?php namespace App\Controllers;

use App\Models\User;
class ThemNguoiDung extends BaseController
{
    public function index(){
        if(isset($_POST['btnadd'])){
            $validation = \Config\Services::validation();
            $config = array(
                'hoten' => 'required',
                'email' => 'required|valid_email',
                'phonenumber' => 'required',
                'username' => 'required|is_unique[users.username]',
                'password' => 'required',
                'pass_confirm' => 'required|matches[password]'
            );
            $validation->setRules($config);
            if(!$validation->run($_POST)){
                if ($validation->hasError('username')){
                    if($_POST['username']) $data['UserExistException'] = 1;
                }
                if ($validation->hasError('pass_confirm')){
                    $data['PasswordException'] = 1;
                }
                $data['AddException'] = 1;
                echo view('AddUser',$data);
            }
            else{
                $user = array(
                    'hoten' => $_POST['hoten'],
                    'email' => $_POST['email'],
                    'phonenumber' => $_POST['phonenumber'],
                    'username' => $_POST['username'],
                    'password' => md5($_POST['password']),
                );
                $user_obj = new User();
                $user_obj->AddUser($user);
                $data['users'] = $user_obj->getUsers();
                echo view('List_User',$data);
            }
        }
        else echo view('AddUser');
    }
}
?>