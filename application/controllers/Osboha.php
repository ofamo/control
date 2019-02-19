<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Osboha extends CI_Controller {
	
	public function index(){
	  session_start();
	
	
	
	if(isset($_SESSION['id']) && isset($_SESSION['password'])){
										
										$status=false;
										$this->load->model('Mymodel');
										$dates = $this->Mymodel->get_date();
										foreach ($dates as $date){
											$data['sd'] = $date['start_date'];
											$data['ed'] = $date['end_date'];
										}	
										
										if($this->input->post('send') != NULL ){
									
										$this->Mymodel->get_date();
										$postData = $this->input->post();
										$start=$postData['start'];
										$end=$postData['end'];
										$this->Mymodel->updateDate($start,$end);
										$status=true;
										$data['response']='تم اعتماد الموعد';
										//$webpage=$this->load->view('cotrolPanel',$data);
										header('Location:https://osboha180suggestion.000webhostapp.com/control');
										}
										else if($this->input->post('destroy') != NULL){
											session_destroy();
											header('Location: https://osboha180suggestion.000webhostapp.com/control');
										}
										else{
											$this->load->view('cotrolPanel',$data);
											$status=false;
										}
												$webpage;
	}
	
	
	else{
	if($this->input->post('login') != NULL ){
		$this->load->model('Mymodel');
		$postData = $this->input->post();
		$username = $postData['username'];
		$password = $postData['password'];
		$admins = $this->Mymodel->get_admin($username);
		foreach ($admins as $admin){
		$epassword = $admin['password'];
		}
		
			/*if(!$row = $admins){
				$this->load->view('login');
			}*/
			
											if(password_verify($password,$epassword)){
												 	
													
													//--------------------------------------------------------
									
									foreach ($admins as $admin){
										$_SESSION['id'] = $admin['username'];
										$_SESSION['password'] = $admin['password'];
									}
										
						//else{
										$status=false;
										$this->load->model('Mymodel');
										$dates = $this->Mymodel->get_date();
										foreach ($dates as $date){
											$info['sd'] = $date['start_date'];
											$info['ed'] = $date['end_date'];
										}	
										
										if($this->input->post('send') != NULL ){
									
										$this->Mymodel->get_date();
										$postData = $this->input->post();
										$start=$postData['start'];
										$end=$postData['end'];
										$this->Mymodel->updateDate($start,$end);
										$status=true;
										$data['response']='تم اعتماد الموعد';
										$webpage=$this->load->view('cotrolPanel',$data);
										}
										else{
											$this->load->view('cotrolPanel',$info);
											$status=false;
										}
												$webpage;
												//-----------------------------------------------------------------
												}
												else{
													
												//	$this->load->view('login');
												}
	}
		else{
	    $this->load->view('login');	
			
	}
		}
		
		
	/*if(!$row = $admins){
		$webpage = $this->load->view('login');
	}
		else{*/
			
 	
	
		
	//if(){
		
	//}
	/*$status=false;
	$this->load->model('myModel');
	$dates = $this->myModel->get_date();
	foreach ($dates as $date){
		$info['sd'] = $date['start_date'];
		$info['ed'] = $date['end_date'];
	}	
	
	if($this->input->post('submit') != NULL ){
	$this->myModel->get_date();
	$postData = $this->input->post();
	$start=$postData['start'];
	$end=$postData['end'];
	$this->myModel->updateDate($start,$end);
	$status=true;
	$data['response']='تم اعتماد الموعد';
	$webpage=$this->load->view('cotrolPanel',$data);
	}
	else{
		$this->load->view('cotrolPanel');
		$status=false;
	}
			$webpage;*/
		//}
	}
 }

?>