<?php namespace App\Models;
use CodeIgniter\Model;

class User extends Model
{
    
    public function getUsers()
    {   
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function searchUsers($keysearch)
    {   
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->like('hoten',$keysearch);
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function addUser($user){
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->insert($user);
    }

    public function deleteUser($idUser){
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->delete(['idUser'=>$idUser]);
    }

    public function updateUser($iduser,$hoten,$phonenumber,$email){
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $array = array(
            'hoten'=>$hoten,
            'phonenumber'=>$phonenumber,
            'email'=>$email,
        );
        $builder->where('iduser',$iduser);
        $builder->update($array);
    }

}

?>