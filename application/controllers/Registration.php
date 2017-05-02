<?php

class Registration extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
        $this->load->model('Registration_model');
    }

    public function index()
    {
        $this->register();
    }

    public function register()
    {
        // Validate user input field constraints are not violated
        if($this->input->post('register-submit'))
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('password-confirm', 'confirm password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE)
        {
            // Load the registration view
            $title = array(
                'title' => 'Registration');
            $this->load->view('header', $title);
            $this->load->view('registration_view');
            $this->load->view('footer');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email')
            );

            if ($this->Registration_model->insertNewUser($data)) {
                redirect('/');
            }
        }
    }
}