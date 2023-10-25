<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    // This function will show register page

	public function register()
	{
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name','First Name', 'required');
        $this->form_validation->set_rules('last_name','Last Name', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('phone','Phone', 'required');
        $this->form_validation->set_rules('password','Password', 'required');
        $this->form_validation->set_error_delimiters('<p class= "invalid-feedback">','</p>');

        if($this->form_validation->run()== false) {
            // Here we will load our view page
            $this->load->view('register');
        }else{
            // Here we will save user record in db

            $this->load->model('Auth_model');
            $formArray = array();
            // user ki entry ko database me save kr dega 
            $formArray['first_name'] = $this->input->post('first_name');
            $formArray['last_name'] = $this->input->post('last_name');
            $formArray['email'] = $this->input->post('email');
            $formArray['phone'] = $this->input->post('phone');
            // Hash the password using bcrypt
            $password = $this->input->post('password');
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $formArray['password'] = $hashedPassword;
            $formArray['created_at'] = date('Y-m-d H:i:s');
            $this->Auth_model->create($formArray);

            $this->session->set_flashdata ('msg', 'Your account has been created successfully.');
            redirect(base_url('Auth/register'));
        }

		
	}
}
?>