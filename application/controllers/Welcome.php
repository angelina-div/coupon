<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('index');
	}
	// public function home($page_url)
	// {
	// 	$this->load->view($page_url);
	// }
	function login()
	{
		$this->load->view('login');
	}

	function checklogin()
	{
		$password=$this->input->post('password');
		$email=$this->input->post('email');
		$checklogin=$this->model->checklogin($email,$password);
		$this->session->set_flashdata('success',"Wrong Email or Password");
		return redirect();
	}
	function logout()
	{
		$this->session->unset_userdata('divinetarotlogin');
		$this->session->set_flashdata('success',"Logged out successfully.");
		return redirect();
	}
	function register()
	{
		$cpassword = $this->input->post('cpassword');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		// $data['country'] = $this->input->post('country');
		// $data['city'] = $this->input->post('city');
		$data['password'] = md5('password');
		if($cpassword!=$password)
		{
			$this->session->set_flashdata('error',"Password and confirm password does not match");
			return redirect();
		}
		else
		{
			//email verification model
			$verifymail=$this->model->verifyemail($email);
				if($verifyemail!=0)
				{
					$this->session->set_flashdata('warning',"Email Address is Already Registered");
					return redirect();   
				}
				elseif($verifyemail==0 && !empty(trim($email)))
				{
					$this->model->adduser($data);
					$this->session->set_flashdata('success',"Register Successfully");
					return redirect();
				}
		}
				
	}
	// wiew page register page
	function registration()
	{
		$this->load->view('registeration');
	}

}
