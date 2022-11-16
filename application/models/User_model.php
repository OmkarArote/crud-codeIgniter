<?php
class User_model extends CI_model{
    function create($formArray){
        $this->db->insert('users',$formArray); //insert into users(name, email) value (?, ?);
    }
    function all(){
        return $users = $this->db->get('users')->result_array(); //select * from users;
    }
    function getUser($userID){
        $this->db->where('user_id', $userID);
        return $user = $this->db->get('users')->row_array(); //select * from users where user_id= ?
    }
    function updateUser($userID, $formArray){
        $this->db->where('user_id', $userID);
        $this->db->update('users', $formArray); //update users set name = ? , email = ? where user_id = ?
    }
    function deleteUser($userID){
        $this->db->where('user_id', $userID);
        $this->db->delete('users');
    }
}
?>