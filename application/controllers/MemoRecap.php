<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemoRecap extends CI_Controller {

	public function __construct(){
		parent::__construct();		
	}

	public function index(){
		redirect(base_url('Home'));
	}

	public function Login(){
		$this->loadHeader();
		$this->loadNav();
		$this->load->view('login');
		$this->load->view('includes/footer');
	}

	public function Signup(){
		$this->loadHeader();
		$this->loadNav();
		$this->load->view('signup');
		$this->load->view('includes/footer');
	}

	public function loadNav(){
		if($this->session->userdata('logged_in')){
			$data['profile'] = $this->session->userdata();
			$this->load->view('includes/navLoggedIn', $data);
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
		if($this->session->userdata('logged_in')){
			$data['scrapbooks'] = $this->memorecap->displayScrapbooks($this->session->userdata('username'));
			$this->load->view('myScrapbooks',$data);
		}else{
			$data['featured_works'] = $this->memorecap->getFeaturedWorks('LIMIT 3');
			$this->load->view('home', $data);
		}
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
				$data['editors_pick'] = $this->memorecap->getEditorsPick();
				$this->load->view('Gallery/editorsPick', $data);
				break;
			case "Featured_Works":
				$data['featured_works'] = $this->memorecap->getFeaturedWorks();		
				$this->load->view('Gallery/featuredWorks', $data);
				break;
			case "Latest_Works":
				$data['latest_works'] = $this->memorecap->getLatestWorks();
				$this->load->view('Gallery/latestWorks', $data);
				break;
			default:
				$data['editors_pick'] = $this->memorecap->getEditorsPick('LIMIT 3');
				$data['featured_works'] = $this->memorecap->getFeaturedWorks('LIMIT 3');
				$data['latest_works'] = $this->memorecap->getLatestWorks('LIMIT 3')
				$this->load->view('scrapbooks', $data);
				break;
		}		
		$this->load->view('Gallery/includes/reportModal');			
		$this->load->view('Gallery/includes/script');			
		$this->load->view('includes/footer');			
	}

	public function Assets(){
		$this->loadHeader();
		$this->loadNav();
		$this->load->view('includes/modal');		
		$data['user_images'] = $this->asset->getAssets('user_images/', $this->session->userdata('logged_in'));
		$data['stickers'] = $this->asset->getAssets('stickers/', $this->session->userdata('logged_in'));
		$data['backgrounds'] = $this->asset->getAssets('backgrounds/', $this->session->userdata('logged_in'));
		$data['shapes'] = $this->asset->getAssets('shapes/', $this->session->userdata('logged_in'));
		$this->load->view('assets', $data);
		$this->load->view('includes/footer');			
	}

	public function Profile($username){
		$this->loadHeader();
		$this->loadNav();
		$this->load->view('includes/modal');
		$data['profile'] = $this->user->getProfile($username);
		if($data['profile'] == 'No such user'){
			echo '<h1>No such user</h1>';
		}else{
			$this->load->view('profile', $data);
		}
		$this->load->view('includes/footer');		
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
			$data['scrapbooks'] = $this->memorecap->displayScrapbooks($this->session->userdata('username'));
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

	public function editor($mode, $id){
		if($this->session->userdata('logged_in')){			
			$data['title'] = 'MemoRecap';
			if($this->scrapbook->loadJSON(0, $id, $this->session->userdata('username'))){
				$data['assignAssets'] = $this->scrapbook->assignAssets();
				$data['ui'] = $this->asset->displayAssets(1, $this->session->userdata('username'));
				$data['bg'] = $this->asset->displayAssets(2, $this->session->userdata('username'));
				$data['st'] = $this->asset->displayAssets(3, $this->session->userdata('username'));
				$data['sh'] = $this->asset->displayAssets(4, $this->session->userdata('username'));
				$data['loadWorkspace'] = $this->scrapbook->loadWorkspace();
				$data['loadPagination'] = $this->scrapbook->loadPagination();
				$data['loadZOrder'] = $this->scrapbook->loadZOrder();
				$data['script'] = $this->scrapbook->script();
				$data['id'] = $id;
				if($mode == 'normal'){
					$data['normal'] = true;
					$this->load->view('includes/editor_header', $data);
					$this->load->view('editor', $data);
				}
				if($mode == 'advanced'){
					$data['normal'] = false;
					$this->load->view('includes/editor_header', $data);
					$this->load->view('editor_advanced', $data);
				}
				$this->load->view('includes/editor_footer', $data);
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

	public function Create(){
		$this->loadHeader();
		$this->loadNav();
		$this->load->view('pre_create');
		$this->load->view('includes/footer');
	}
	
	public function four_oh_four(){
		$this->loadHeader();
		$this->loadNav();
		$this->load->view('errors/MemoRecap_errors/four_zero_four');
		$this->load->view('includes/footer');
	}

	public function Search(){
		$this->loadHeader();
		$this->loadNav();
		if(null !== $this->input->get('search')){
			$data['scrapbooks'] = $this->memorecap->searchScrapbooks(strtolower($this->input->get('search')), $this->session->userdata('username'));
			$data['users'] = $this->memorecap->searchUsers(strtolower($this->input->get('search')));
			$this->load->view('search', $data);
		}else{
			$this->load->view('search');
		}
		$this->load->view('Gallery/includes/script');	
		$this->load->view('includes/footer');	
	}
	
}

?>
