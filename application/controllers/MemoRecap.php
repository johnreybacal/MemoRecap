<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemoRecap extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Scrapbook_model', 'scrapbook');
		$this->load->model('User_model', 'user');		
	}

	public function Home(){		
		$this->load->view('includes/header');			
		$this->load->view('includes/nav');			
		$this->load->view('includes/modal');			
		$this->load->view('home');
		$this->load->view('includes/footer');			
	}

	public function Account($options = null){
		$this->load->view('includes/header');			
		$this->load->view('includes/navLoggedin');
		$this->load->view('includes/modal');
		$this->load->view('includes/sidebar');
		switch($options){
			case "activities":	$this->load->view('Account/activities');	break;			
			case "dp":	$this->load->view('Account/profilepicture');	break;			
			case "username":	$this->load->view('Account/username');	break;			
			case "password":	$this->load->view('Account/password');	break;			
			case "manage":	$this->load->view('Account/manage');	break;			
			default:	$this->load->view('account');	break;
		}		
		$this->load->view('includes/footer');
	}

	public function Scrapbooks($gallery = null){		
		$this->load->view('includes/header');			
		$this->load->view('includes/nav');			
		$this->load->view('includes/modal');
		switch($gallery){
			case "Editors_Pick":	$this->load->view('Gallery/editorsPick');	break;
			case "Featured_Works":	$this->load->view('Gallery/featuredWorks');	break;
			case "Latest_Works":	$this->load->view('Gallery/latestWorks');	break;
			default:	$this->load->view('scrapbooks');	break;
		}		
		$this->load->view('includes/footer');			
	}

	public function Assets(){
		echo 'Nani?';
	}

	public function Profile(){
		$this->load->view('includes/header');			
		$this->load->view('includes/navLoggedin');
		$this->load->view('includes/modal');		
		$this->load->view('profile');		
		$this->load->view('includes/footer');			
	}

	public function About(){
		$this->load->view('includes/header');			
		$this->load->view('includes/navLoggedin');
		$this->load->view('includes/modal');		
		$this->load->view('about');		
		$this->load->view('includes/footer');	
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
			redirect(base_url('editor/'.$id));
		}
		$data['title'] = 'MemoRecap';
		$this->scrapbook->loadJSON($id);
		$data['assignAssets'] = $this->scrapbook->assignAssets();
		$data['displayAssets'] = $this->scrapbook->displayAssets();
		$data['loadWorkspace'] = $this->scrapbook->loadWorkspace();
		$data['loadPagination'] = $this->scrapbook->loadPagination();
		$data['loadZOrder'] = $this->scrapbook->loadZOrder();
		$data['script'] = $this->scrapbook->script();
		$this->load->view('editor', $data);		
	}
	
	public function uploadAsset(){
        $config['upload_path'] = './uploaded_assets/'.$this->input->post('category');
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')){//lol imposibleng mag-error 'to
            $error = array('error' => $this->upload->display_errors());            
            print_r($error);
        }else{
            $data = array('upload_data' => $this->upload->data());
            echo $this->scrapbook->uploadAsset($data['upload_data']['file_name'], $this->input->post('category'), $this->input->post('privacy'));
            redirect('myScrapbooks');
        }
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
		redirect(base_url('myScrapbooks'));
	}
	
}
