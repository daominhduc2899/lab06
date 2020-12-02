<?php namespace App\Controllers;

use App\Models\User;
class SuaNguoiDung extends BaseController
{
    public function index(){

        if(isset($_POST['btnsua'])){
            $data['iduser'] = $_POST['iduser'];
            $data['hoten'] = $_POST['hoten'];
            $data['phonenumber'] = $_POST['phonenumber'];
            $data['email'] = $_POST['email'];
            echo view('UpdateUser',$data);
        }

        if(isset($_POST['btnupdate'])){
            $validation = \Config\Services::validation();
            $config = array(
                'newhoten' => 'required',
                'newphonenumber' => 'required',
                'newemail'=>'required|valid_email',
            );
            $validation->setRules($config);
            if(!$validation->run($_POST)){
                $data['UpdateException'] = 1;
                $data['iduser'] = $_POST['iduser'];
                $data['hoten'] = $_POST['hoten'];
                $data['phonenumber'] = $_POST['phonenumber'];
                $data['email'] = $_POST['email'];
                echo view('UpdateUser',$data);
            }
            else{
                $iduser = $_POST['iduser'];
                $hoten = $_POST['newhoten'];
                $phonenumber = $_POST['newphonenumber'];
                $email = $_POST['newemail'];
                $user_obj = new User();
                $user_obj->updateUser($iduser,$hoten,$phonenumber,$email);
                $data['users'] = $user_obj->getUsers();
                echo view('List_User',$data);
            }
        }
    }
}
?>