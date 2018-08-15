<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_front extends MY_Controller {

	public function __construct()
	{
        parent::__construct();
    }

	public function template_home($data = NULL)
	{
		$this->load->view('template/template_front_home', $data);
	}

	public function template_pages($data = NULL)
	{
		$this->load->view('template/template_front', $data);
	}

}
