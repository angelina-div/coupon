<?php

	defined('BASEPATH') OR exit('No Direct Script Access Allowed');
	class Couponmodel extends CI_Model
	{
		function fatchtabledata($table)
		}
		function fetchtabledatabyid($table,$id)
		{
			$q=$this->db->select()
					->from($table)
					->where('id',$id)
					->get();
			return $q->result();
		}
		function fetchtabledata($table,$id)
		{
			$q=$this->db->select()
						->from($table)
						->where('id',$id)
						->get();
			return $q->row();
		}
		function insertdata($table,$data)
		{
			$this->db->insert($table,$data);
			return true;
		}
		function checklogin($password,$email)
		{
			$cpassword=md5($passowrd);
			$q=$this->db->select()->from('user')->where($email,'email')->where($passowrd,'password')->get();
			return $q->row();
		}
		function verifyemail($email)
		{
			$q=$this->db->select()->from('user')->where($email,'email');
			return $q->num_rows(); 
		}
		function adduser($data)
		{
			$this->db->insert('user', $data);
			return true;
		}

	}
?>