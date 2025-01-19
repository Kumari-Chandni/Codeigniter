<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
{
    protected $table = 'users';

    public function create_user($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function get_user_by_email($email)
    {
        return $this->db->get_where($this->table, ['email' => $email])->row_array();
    }
}
