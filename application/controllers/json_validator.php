<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Json_validator extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$data = array(
			'page' => 'json_validator',
			'title' => 'JSON Validator',
			'description' => 'Online tool for validating JSON',
			'view' => 'json_validator_view'
		);
		$this->load->view('page', $data);
	}
	
}