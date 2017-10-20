<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();		
	}

	public function index(){
		// if($this->checkLogin){
		// 	redirect(base_url('Admin/Home'));
		// }else{
			$this->loadHeader();
			$this->load->view('Admin/login');
			$this->load->view('Admin/includes/footer');
		// }
	}

	public function login(){
		$this->session->sess_destroy();
		$this->session->set_userdata(
			$this->admin->login(
				$this->input->post('username'),
				$this->input->post('password')
			)
		);
		redirect(base_url('Admin/Home'));		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Admin/'));
	}

	public function blockUser($user_id){
		$this->admin->blockUser($user_id);
		echo 'Unblock';
	}

	public function unblockUser($user_id){
		$this->admin->unblockUser($user_id);
		echo 'Block';
	}

	public function blockScrapbook($scrapbook_id){
		$this->admin->blockScrapbook($scrapbook_id);
		echo 'Unblock';
	}

	public function unblockScrapbook($scrapbook_id){
		$this->admin->unblockScrapbook($scrapbook_id);
		echo 'Block';
	}

	public function blockAsset($asset_id){
		$this->admin->blockAsset($asset_id);
		echo 'Unblock';
	}

	public function unblockAsset($asset_id){
		$this->admin->unblockAsset($asset_id);
		echo 'Block';
	}

	public function acceptReport($type, $target, $id){
		if($type == 'scrapbooks'){
			$this->blockScrapbook($target);
		}else if($type == 'users'){
			$this->blockUser($target);
		}else if($type == 'assets'){
			$this->blockAsset($target);
		}
		$this->admin->deleteReport($id);
	}

	public function deleteReport($report_id){
		$this->admin->deleteReport($report_id);
	}

	public function addToEP($scrapbook_id){
		$this->admin->addToEP($scrapbook_id);
		echo 'Remove from Editor\'s pick';
	}

	public function removeFromEP($scrapbook_id){
		$this->admin->removeFromEP($scrapbook_id);
		echo 'Add to Editor\'s pick';
	}

	public function addAdmin(){
		$this->admin->addAdmin(
			$this->input->post('username'),
			$this->input->post('name'),
			$this->input->post('password')
		);
	}

	public function checkLogin(){
		if($this->session->userdata('logged_in') == 0){
			redirect(base_url('Admin/'));
		}
	}

	public function loadHeader(){		
		if($this->session->has_userdata('Error')){
			$data['Error'] = $this->session->userdata('Error');
			$this->session->unset_userdata('Error');
			$this->load->view('Admin/includes/header', $data);		
		}else{
			$this->load->view('Admin/includes/header');
		}		
	}

	public function Home(){
		$this->loadHeader();
		$this->checkLogin();
		$this->load->view('Admin/home');
		$this->load->view('Admin/includes/footer');
	}

	public function Users(){
		$data['users'] = $this->admin->getUsers();
		$this->loadHeader();
		$this->checkLogin();
		$this->load->view('Admin/users', $data);
		$this->load->view('Admin/includes/script');
		$this->load->view('Admin/includes/footer');
	}

	public function Scrapbooks(){
		$data['scrapbooks'] = $this->admin->getScrapbooks();
		$this->loadHeader();
		$this->checkLogin();
		$this->load->view('Admin/scrapbooks', $data);
		$this->load->view('Admin/includes/ep_script');
		$this->load->view('Admin/includes/script');
	}

	public function Assets(){
		$data['assets'] = $this->admin->getAssets();
		$this->loadHeader();
		$this->checkLogin();
		$this->load->view('Admin/assets', $data);
		$this->load->view('Admin/includes/script');
		$this->load->view('Admin/includes/footer');		
	}

	public function Reports(){
		$data['reports'] = $this->admin->getReports();
		$this->loadHeader();
		$this->checkLogin();
		$this->load->view('Admin/reports', $data);
		$this->load->view('Admin/includes/footer');			
	}

	public function Editors_Pick(){
		$data['editors_pick'] = $this->admin->getEP();
		$this->loadHeader();
		$this->checkLogin();
		$this->load->view('Admin/editors_pick', $data);
		$this->load->view('Admin/includes/ep_script');		
	}

	public function Add_Admin(){
		$this->loadHeader();
		$this->checkLogin();
		$this->load->view('Admin/add_admin');
		$this->load->view('Admin/includes/footer');
	}

}
?>