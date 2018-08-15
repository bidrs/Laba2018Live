<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MY_Controller {

	public function __construct()
	{
        parent::__construct();
    }

	public function template($data = NULL)
	{
		$this->load->view('template/template', $data);
	}

	public function template_ck($data = NULL)
	{
		$this->load->view('template/template_ck', $data);
	}

	public function template_home($data = NULL)
	{
		$this->load->view('template/template_front_home', $data);
	}

	public function template_pages($data = NULL)
	{
		$this->load->view('template/template_front', $data);
	}

	public function template_otherpages($data = NULL)
	{
		$this->load->view('template/template_front_other', $data);
	}

	public function template_milestone($data = NULL)
	{
		$this->load->view('template/template_front_milestone', $data);
	}

	public function template_contactpages($data = NULL)
	{
		$this->load->view('template/template_front_contact', $data);
	}

}
