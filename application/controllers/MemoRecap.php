<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemoRecap extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Scrapbook_model', 'scrapbook');
		$this->load->model('User_model', 'user');		
	}

	public function index(){
		redirect(base_url('Home'));
	}

	public function Login($method, $param = null){
		$this->session->set_userdata($this->user->Login($this->input->post('username'), $this->input->post('password')));
		$url = $method;
		if(isset($param)){
			$url .= '/'.$param;
		}
		echo $url;
		redirect(base_url($url));
	}
	
	public function Signup(){
		$this->session->set_userdata($this->user->Signup($this->input->post('username'), $this->input->post('name'), $this->input->post('password')));
		redirect(base_url('Home'));		
	}

	public function loadNav(){
		if($this->session->userdata('logged_in')){
			$this->load->view('includes/navLoggedIn');
		}else{
			$this->load->view('includes/nav');
		}
	}

	public function loadHeader(){
		$data['logged_in'] = false;
		if($this->session->has_userdata('Error')){
			$data['Error'] = $this->session->userdata('Error');
			$this->session->unset_userdata('Error');			
		}
		if($this->session->userdata('logged_in')){
			$data['logged_in'] = true;
		}
		$this->load->view('includes/header', $data);
	}

	public function Home(){		
		$this->loadHeader();
		$this->loadNav();			
		$this->load->view('includes/modal');			
		$this->load->view('home');
		$this->load->view('includes/footer');			
	}

	public function Account(){
		$this->loadHeader();
		$this->loadNav();		
		if($this->session->userdata('logged_in')){
			$data['profile'] = $this->session->userdata();
			$this->load->view('includes/modal');
			$this->load->view('account', $data);
		}else{
			$this->load->view('errors/MemoRecap_errors/loginPoMuna');
		}
		$this->load->view('includes/footer');
	}

	public function Scrapbooks($gallery = null){		
		$this->loadHeader();
		$this->loadNav();
		$this->load->view('includes/modal');
		switch($gallery){
			case "Editors_Pick":				
				$data['editors_pick'] = $this->scrapbook->getEditorsPick();
				$this->load->view('Gallery/editorsPick', $data);
				break;
			case "Featured_Works":
				$data['fw'] = $this->scrapbook->getFeaturedWorks();		
				$this->load->view('Gallery/featuredWorks', $data);
				break;
			case "Latest_Works":
				$data['lw'] = $this->scrapbook->getLatestWorks();
				$this->load->view('Gallery/latestWorks', $data);
				break;
			default:	$this->load->view('scrapbooks');	break;
		}		
		$this->load->view('includes/footer');			
	}

	public function Assets(){
		$this->loadHeader();
		$this->loadNav();
		$this->load->view('includes/modal');		
		$data['user_images'] = $this->scrapbook->getAssets('user_images/', $this->session->userdata('logged_in'));
		$data['stickers'] = $this->scrapbook->getAssets('stickers/', $this->session->userdata('logged_in'));
		$data['backgrounds'] = $this->scrapbook->getAssets('backgrounds/', $this->session->userdata('logged_in'));
		$data['shapes'] = $this->scrapbook->getAssets('shapes/', $this->session->userdata('logged_in'));
		$this->load->view('assets', $data);
		$this->load->view('includes/footer');			
	}

	public function Profile($username){
		$this->loadHeader();
		$this->loadNav();
		$this->load->view('includes/modal');		
		$data['profile'] = $this->user->getProfile($username);
		$this->load->view('profile', $data);
		$this->load->view('includes/footer');
		// if($this->session->has_userdata('Error')){
		// 	$data['Error'] = $this->session->userdata('Error');
		// 	$this->session->unset_userdata('Error');
		// 	$this->load->view('includes/header', $data);
		// }else{
		// 	$this->loadHeader();
		// }			
		// $this->loadNav();
		// if($this->session->userdata('logged_in')){
		// 	$this->load->view('includes/modal');		
		// 	$data['profile'] = $this->user->getProfile($username);
		// 	$this->load->view('profile', $data);
		// }else{
		// 	$this->load->view('errors/MemoRecap_errors/loginPoMuna');
		// }
		// $this->load->view('includes/footer');
	}

	public function About(){
		$this->loadHeader();			
		$this->loadNav();
		$this->load->view('includes/modal');		
		$this->load->view('about');		
		$this->load->view('includes/footer');	
	}

	public function myScrapbooks(){
		$this->loadHeader();			
		$this->loadNav();
		if($this->session->userdata('logged_in')){
			$data['title'] = 'MemoRecap';
			$data['list_of_scrapbooks'] = $this->scrapbook->displayScrapbooks($this->session->userdata('username'));
			$this->load->view('myScrapbooks',$data);		
		}else{
			$this->load->view('errors/MemoRecap_errors/loginPoMuna');
		}
		$this->load->view('includes/footer');
	}

	public function view($id){
		$data['title'] = 'MemoRecap';
		if($this->session->userdata('logged_in')){
			if($this->scrapbook->loadJSON(1, $id, $this->session->userdata('username'))){
				$data['assignAssets'] = $this->scrapbook->assignAssets();
				$data['loadWorkspace'] = $this->scrapbook->loadWorkspace();
				$data['loadPagination'] = $this->scrapbook->loadPagination();
				$data['script'] = $this->scrapbook->script();		
				$data['id'] = $id;
				$this->load->view('view', $data);
			}else{
				$this->loadHeader();
				$this->loadNav();				
				$this->load->view('errors/MemoRecap_errors/privatePo');
				$this->load->view('includes/footer');				
			}
		}else{
			if($this->scrapbook->loadJSON(1, $id)){
				$data['assignAssets'] = $this->scrapbook->assignAssets();
				$data['loadWorkspace'] = $this->scrapbook->loadWorkspace();
				$data['loadPagination'] = $this->scrapbook->loadPagination();
				$data['script'] = $this->scrapbook->script();		
				$data['id'] = $id;
				$this->load->view('view', $data);				
			}else{
				$this->loadHeader();
				$this->loadNav();				
				$this->load->view('errors/MemoRecap_errors/privatePo');
				$this->load->view('includes/footer');
			}
		}
	}

	public function editor($id){
		if($this->session->userdata('logged_in')){
			if($id == 'new'){
				$id = $this->scrapbook->createScrapbook($this->input->post('name'), $this->input->post('pages'), $this->input->post('size'), $this->input->post('privacy'));
				redirect(base_url('editor/'.$id));
			}
			$data['title'] = 'MemoRecap';
			if($this->scrapbook->loadJSON(0, $id, $this->session->userdata('username'))){
				$data['assignAssets'] = $this->scrapbook->assignAssets();
				$data['displayAssets'] = $this->scrapbook->displayAssets($this->session->userdata('username'));
				$data['loadWorkspace'] = $this->scrapbook->loadWorkspace();
				$data['loadPagination'] = $this->scrapbook->loadPagination();
				$data['loadZOrder'] = $this->scrapbook->loadZOrder();
				$data['script'] = $this->scrapbook->script();
				$this->load->view('editor', $data);
			}else{
				$this->loadHeader();
				$this->loadNav();
				$this->load->view('errors/MemoRecap_errors/notYours');
				$this->load->view('includes/footer');
			}		
		}else{
			$this->loadHeader();
			$this->loadNav();
			$this->load->view('errors/MemoRecap_errors/loginPoMuna');
			$this->load->view('includes/footer');
		}
	}
	
	public function four_oh_four(){
		$this->loadHeader();
		$this->loadNav();
		$this->load->view('errors/MemoRecap_errors/four_zero_four');
		$this->load->view('includes/footer');
	}
	
}

?>