<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->module('template');
		$this->load->module('Template_Front');
	}
}