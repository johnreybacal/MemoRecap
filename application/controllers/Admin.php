<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model', 'admin');		
	}

	public function index(){
		$this->load->view('Admin/login');
	}

	public function authorize(){
		if($this->input->post('username') == 'admin' && $this->input->post('password') == '123'){
			redirect(base_url('Admin/Home'));
		}else{
			redirect(base_url('Admin'));
		}
	}

	public function blockUser($user_id){
		$this->admin->blockUser($user_id);
	}

	public function unblockUser($user_id){
		$this->admin->unblockUser($user_id);
	}

	public function blockScrapbook($scrapbook_id){
		$this->admin->blockScrapbook($scrapbook_id);
	}

	public function unblockScrapbook($scrapbook_id){
		$this->admin->unblockScrapbook($scrapbook_id);
	}

	public function blockAsset($asset_id){
		$this->admin->blockAsset($asset_id);
	}

	public function unblockAsset($asset_id){
		$this->admin->unblockAsset($asset_id);
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
	}

	public function removeFromEP($scrapbook_id){
		$this->admin->removeFromEP($scrapbook_id);
	}

	public function Home(){
		$this->load->view('Admin/home');
	}

	public function Users(){
		$data['users'] = $this->admin->getUsers();
		$this->load->view('Admin/users', $data);
	}

	public function Scrapbooks(){
		$data['scrapbooks'] = $this->admin->getScrapbooks();
		$this->load->view('Admin/scrapbooks', $data);	
	}

	public function Assets(){
		$data['assets'] = $this->admin->getAssets();
		$this->load->view('Admin/assets', $data);		
	}

	public function Reports(){
		$data['reports'] = $this->admin->getReports();
		$this->load->view('Admin/reports', $data);			
	}

	public function Editors_Pick(){
		$data['editors_pick'] = $this->admin->getEP();
		$this->load->view('Admin/editors_pick', $data);
	}

}
?>