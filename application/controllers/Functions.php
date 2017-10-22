<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Functions extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
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
		echo $this->user->likeScrapbook($this->session->userdata('username'), $scrapbook_id);
	}

	public function unlikeScrapbook($scrapbook_id){
		echo $this->user->unlikeScrapbook($this->session->userdata('username'), $scrapbook_id);
	}

	public function editDescription(){
		$this->memorecap->editDescription($this->input->post('id'), $this->input->post('description'));
	}

	public function togglePrivacy($table, $target, $privacy){
		$priv = 'private';
		if($privacy == $priv){
			$priv = 'public';
		}
		$this->memorecap->togglePrivacy($table, $target, $priv);
		echo $priv;
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
		if(isset($_FILES['image']) && !empty($_FILES['image'])){
			if($_FILES['image']['error'] != 4){
		        $config['upload_path'] = './uploaded_assets/'.$this->input->post('category');
		        $config['allowed_types'] = 'gif|jpeg|jpg|png';
		        $this->load->library('upload', $config);
		        if (!$this->upload->do_upload('image')){//lol imposibleng mag-error 'to
		            $error = array('error' => $this->upload->display_errors());            
		            print_r($error);
		        }else{
		            $data = array('upload_data' => $this->upload->data());
		            echo $this->asset->uploadAsset($data['upload_data']['file_name'], $this->input->post('category'), $this->input->post('privacy'));
		            // redirect(base_url('Assets'));
		        }
		    }
	    }
	}

	public function create(){
		$id = $this->scrapbook->createScrapbook($this->input->post('name'), $this->input->post('description'), $this->input->post('pages'), $this->input->post('size'), 'private');
		redirect(base_url('editor/normal'.$id));
	}

	public function save(){		
		// $json = file_get_contents('php://input');
		// $id = substr($json, 0, 4);
		// header('Content-type: application/json');
		// $json = substr($json, 4, strlen($json));
		$id = $this->input->post('id');
		$json = $this->input->post('json');
		$json = json_decode($json, true);
		$blob = array_shift($json);
		$json = json_encode($json);		
		$result = $this->scrapbook->save($id, $json, $blob);
		echo $result;
	}

	public function delete($id){
		$this->scrapbook->delete($id);		
	}

	public function loginAction(){
		$this->session->set_userdata($this->user->Login($this->input->post('username'), $this->input->post('password')));
		if(!$this->session->has_userdata('Error')){
			redirect(base_url('Home'));
		}else{
			redirect(base_url('Login'));
		}
	}
	
	public function signupAction(){
		$this->session->set_userdata($this->user->Signup($this->input->post('username'), $this->input->post('name'), $this->input->post('password')));
		if(!$this->session->has_userdata('Error')){
			redirect(base_url('Home'));
		}else{
			redirect(base_url('Signup'));
		}
	}

}

?>