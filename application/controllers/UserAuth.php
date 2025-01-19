<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserAuth extends CI_Controller {

    public function index(){
        echo "Hi";
    }
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('session');
        $this->load->helper(['form', 'url']);
    }

    public function signup()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[50]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

            if ($this->form_validation->run()) {
                $data = [
                    'username' => $this->input->post('username'),
                    'email'    => $this->input->post('email'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                ];
                $this->User_model->create_user($data);
                $this->session->set_flashdata('success', 'Account created successfully!');
                redirect('signin');
            }
        }

        $this->load->view('signup');
    }

    public function signin()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->User_model->get_user_by_email($email);

            if ($user && password_verify($password, $user['password'])) {
                $session_data = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'is_logged_in' => TRUE,
                ];
                $this->session->set_userdata($session_data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Invalid login credentials.');
                redirect('signin');
            }
        }

        $this->load->view('signin');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('signin');
    }


}