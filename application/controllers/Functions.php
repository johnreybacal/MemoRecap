<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Functions extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Scrapbook_model', 'scrapbook');
		$this->load->model('User_model', 'user');		
	}

	public function reportScrapbook(){
		$this->user->report($this->input->post('id'), $this->session->userdata('username'),$this->input->post('reason'), 'scrapbooks');
	}

	public function reportUser(){
		$this->user->report($this->input->post('id'), $this->session->userdata('username'),$this->input->post('reason'), 'users');	
	}

	public function reportAssets(){
		$this->user->report($this->input->post('id'), $this->session->userdata('username'),$this->input->post('reason'), 'assets');	
	}

	public function likeScrapbook($scrapbook_id){
		$this->user->likeScrapbook($this->session->userdata('username'), $scrapbook_id);
	}

	public function unlikeScrapbook($scrapbook_id){
		$this->user->unlikeScrapbook($this->session->userdata('username'), $scrapbook_id);
	}

	public function Logout(){
		$this->session->sess_destroy();
		redirect(base_url('Home'));
	}

	public function changeDP(){
		$config['upload_path'] = './dp/';
        $config['allowed_types'] = 'gif|jpeg|jpg|png';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')){
            $error = array('error' => $this->upload->display_errors());            
            print_r($error);
        }else{
            $data = array('upload_data' => $this->upload->data());
            $this->session->set_userdata(
            	$this->user->changeDP(
            		$this->session->userdata('username'),
            		$data['upload_data']['file_name']
            	)
            );
        }
        redirect(base_url('Profile'));  
	}

	public function updateAccount(){		
        $this->session->set_userdata(
        	$this->user->updateAccount(
        		$this->session->userdata('username'),
        		$this->input->post('name'),
        		$this->input->post('newpassword'),
        		$this->input->post('curpassword')
        	)
        );
        redirect(base_url('Profile'));  
	}

	public function uploadAsset(){
        $config['upload_path'] = './uploaded_assets/'.$this->input->post('category');
        $config['allowed_types'] = 'gif|jpeg|jpg|png';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')){//lol imposibleng mag-error 'to
            $error = array('error' => $this->upload->display_errors());            
            print_r($error);
        }else{
            $data = array('upload_data' => $this->upload->data());
            echo $this->scrapbook->uploadAsset($data['upload_data']['file_name'], $this->input->post('category'), $this->input->post('privacy'));
            redirect(base_url('Assets'));
        }
	}

	public function save(){		
		$json = file_get_contents('php://input');
		$id = substr($json, 0, 4);
		$json = substr($json, 4, strlen($json));
		header('Content-type: application/json');
		$json = json_decode($json, true);
		$blob = array_shift($json);
		$json = json_encode($json);		
		$result = $this->scrapbook->save($id, $json, $blob);
		echo $result;
	}

	public function delete($id){
		$this->scrapbook->delete($id);
		redirect(base_url('myScrapbooks'));
	}






}

?>