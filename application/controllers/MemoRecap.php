<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemoRecap extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Scrapbook_model', 'scrapbook');
		$this->load->model('User_model', 'user');
		$this->load->helper('url');
	}

	public function index(){
		//redirect muna kase wala pang parent page
		redirect(base_url('MemoRecap/myScrapbooks'));
	}

	public function myScrapbooks(){
		$data['title'] = 'MemoRecap';
		$data['list_of_scrapbooks'] = $this->scrapbook->displayScrapbooks('0001');
		$this->load->view('myScrapbooks',$data);		
	}

	public function view($id){
		$data['title'] = 'MemoRecap';
		$this->scrapbook->loadJSON($id);
		$data['assignAssets'] = $this->scrapbook->assignAssets();
		$data['loadWorkspace'] = $this->scrapbook->loadWorkspace();
		$data['loadPagination'] = $this->scrapbook->loadPagination();
		$data['script'] = $this->scrapbook->script();		
		$data['id'] = $id;
		$this->load->view('view', $data);
	}

	public function editor($id){
		if($id == 'new'){
			$id = $this->scrapbook->createScrapbook($this->input->post('name'), $this->input->post('pages'), $this->input->post('size'));
			redirect(base_url('MemoRecap/editor/'.$id));
		}
		$data['title'] = 'MemoRecap';
		$this->scrapbook->loadJSON($id);
		$data['assignAssets'] = $this->scrapbook->assignAssets();
		$data['displayAssets'] = $this->scrapbook->displayAssets();
		$data['loadWorkspace'] = $this->scrapbook->loadWorkspace();
		$data['loadPagination'] = $this->scrapbook->loadPagination();
		$data['loadZOrder'] = $this->scrapbook->loadZOrder();
		$data['script'] = $this->scrapbook->script();
		$data['functionalityScript'] = $this->scrapbook->functionalityScript();
		$this->load->view('editor', $data);		
	}

	public function uploadAsset($c, $f, $p){// controller function parameter
		if(getimagesize($_FILES['image']['tmp_name'])== FALSE){
			echo "Choose effing Image";
		}else{
			$image = addslashes($_FILES['image']['tmp_name']);			
			$image = file_get_contents($image);
			$image = base64_encode($image);
			$this->scrapbook->uploadAsset($image);
		}
		redirect(base_url($c.'/'.$f.'/'.$p));
	}

	public function save(){		
		$json = file_get_contents('php://input');
		$id = substr($json, 0, 4);
		$json = substr($json, 4, strlen($json));
		header('Content-type: application/json');
		$result = $this->scrapbook->save($id, $json);
		echo $result;
	}

	public function delete($id){
		$this->scrapbook->delete($id);
		redirect(base_url('MemoRecap/myScrapbooks'));
	}
	
}
