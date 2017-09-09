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
		$data['title'] = 'MemoRecap';
		$data['list_of_scrapbooks'] = $this->scrapbook->displayScrapbooks('0001');
		$this->load->view('myScrapbooks',$data);
		if($this->input->post('create')){
			$scrapbook_id = $this->scrapbook->createScrapbook($this->input->post('name'), $this->input->post('pages'));
			$this->editor($scrapbook_id);
		}
	}

	public function editor($id){
		$data['title'] = 'MemoRecap';
		$this->scrapbook->loadJSON($id);
		$data['assignAssets'] = $this->scrapbook->assignAssets();
		$data['displayAssets'] = $this->scrapbook->displayAssets();
		$data['loadWorkspace'] = $this->scrapbook->loadWorkspace();
		$data['loadPagination'] = $this->scrapbook->loadPagination();
		$data['loadZOrder'] = $this->scrapbook->loadZOrder();
		$data['script'] = $this->scrapbook->script();
		$this->load->view('editor', $data);
		if($this->input->post('imageSubmit')){
			if(getimagesize($_FILES['image']['tmp_name'])== FALSE){
					echo "Choose effing Image";
			}else{
				$image = addslashes($_FILES['image']['tmp_name']);			
				$image = file_get_contents($image);
				$image = base64_encode($image);
				$this->scrapbook->uploadAsset($image);
			}
		}		
	}

	public function save(){		
		$json = file_get_contents('php://input');
		$id = substr($json, 0, 4);
		$json = substr($json, 4, strlen($json));
		header('Content-type: application/json');
		$this->scrapbook->save($id, $json);
		// $con = mysqli_connect("localhost","root","");
		// mysqli_select_db($con,"memo_recap");
		// $qry = "UPDATE scrapbooks set json='".$json."' WHERE scrapbook_id='".$id."'";
		// $result = mysqli_query($con,$qry);
	}
}
