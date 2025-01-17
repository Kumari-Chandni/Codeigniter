<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function index(){
        //How to add load view page in controller
        // $var['name'] = "Heavy Coding";
        // $data['name'] = "Heavy Coding";
        // $data['names'] = array("heavy","youtube","coding");
        // $this->load->view('homepage',$data); //how to pass data in form of array

        //how to load model in controller
        // $this->load->model('homemodel');
        // $data['name']=$this->homemodel->sum();
        // $data['sub']=$this->homemodel->sub();
        // $this->load->view('homepage',$data);

        //how to load library in controller
        // $this->load->library('session');
        // $this->session;

        //how to load helper in controller
        // $this->load->helper('form');
        // echo form_input('username','johndoe');

        //How to use Custom Helper
        // $array = array('Name'=> 'Heavy Coding','Work'=>'Youtube Tutorial');
        // $array2 = array('Name'=> 'Codignitor','Work'=>'Framework');
        // $this->load->helper('test');
        // clean($array);

        // echo "<pre>";
        // print_r($array);
        // print_r($array2);


        //How to use custom libray
        // $this->load->library('custom');
        // $this->custom->sum();
        

        //Form Page
        $this->load->helper('form');
        $this->load->view('form');
    }
    public function myfunc($name=''){
        $data['name'] = $name;
        // $var['name'] = "Heavy Coding";
        // $data['name'] = "Heavy Coding";
        $data['names'] = array("heavy","youtube","coding");
        $this->load->view('homepage',$data);
    }

}