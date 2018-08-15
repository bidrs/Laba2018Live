<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends MY_Controller {

	// Declare database table
	private $table_name           = 'laba_vendor';
	private $table_cat_name       = 'laba_vendor_sector';
	private $table_cer            = 'laba_certification';
	private $table_course         = 'laba_course';
	private $table_course_outline = 'laba_course_outline';
	private $table_newsletter     = 'laba_newsletter';


	public function __construct()
	{
        parent::__construct();
        $this->load->model('courses/model_course'); 
    }

	public function index()
	{
		// $this->load->view('index');
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['content_view'] = 'front/index';
		$this->template->template_home($data);
	}


	public function about()
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['title']        = 'About Us';
		$data['content_view'] = 'front/about';
		$this->template->template_otherpages($data);
	}

	public function whylaba()
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['title']        = 'Why LABA';
		$data['content_view'] = 'front/whylaba';
		$this->template->template_otherpages($data);
	}

	public function achievement()
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['title']        = 'Achievements and Milestones';
		$data['content_view'] = 'front/achievement';
		$this->template->template_milestone($data);
	}

	public function quality()
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['title']        = 'Quality Approach';
		$data['content_view'] = 'front/quality';
		$this->template->template_otherpages($data);
	}

	public function training()
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['title']        = 'Training Approach';
		$data['content_view'] = 'front/training';
		$this->template->template_otherpages($data);
	}

	public function opportunity()
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['title']        = 'Equal Opportunities and Diversity';
		$data['content_view'] = 'front/opportunity';
		$this->template->template_otherpages($data);
	}

	public function health()
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['title']        = 'Health and Safety';
		$data['content_view'] = 'front/health';
		$this->template->template_otherpages($data);
	}

	public function services($id)
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['title']        = 'Services';
		$data['content_view'] = 'front/services';
		$this->template->template_otherpages($data);
	}
	
	public function news()
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['title']        = 'News';
		$data['content_view'] = 'front/news';
		$this->template->template_otherpages($data);
	}

	public function innernews()
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['title']        = 'News Content';
		$data['content_view'] = 'front/innernews';
		$this->template->template_otherpages($data);
	}

	public function career()
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['title']        = 'Career';
		$data['content_view'] = 'front/career';
		$this->template->template_otherpages($data);
	}

	public function careerdetail()
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);
		
		$data['title']        = 'Career Detail';
		$data['content_view'] = 'front/careerdetail';
		$this->template->template_otherpages($data);
	}

	public function careerform()
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['title']        = 'Career Form';
		$data['content_view'] = 'front/careerform';
		$this->template->template_otherpages($data);
	}

	public function contact()
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['title']        = 'Contact Us';
		$data['content_view'] = 'front/contact';

		// $this->load->view('emailtemp');
		// $this->load->view('course_page');
		$this->template->template_contactpages($data);
	}

	// public function events()
	// {
	// 	$data['title']        = 'Events';
	// 	$data['content_view'] = 'front/events';
	// 	$this->template->template_otherpages($data);
	// }

	public function events()
	{
		$data['title']        = 'Events';
		$data['content_view'] = 'front/new_sample_event';
		$this->template->template_milestone($data);
	}
	
	public function innerevent()
	{
		$data['title']        = 'Inner Events';
		$data['content_view'] = 'front/innerevent';
		$this->template->template_otherpages($data);
	}


	// COURSE RELATED NAVIGATION

	



	public function certification($id)
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['certification']= $this->model_course->retrieve_row($this->table_cer, $id); 
		$data['courses']      = $this->model_course->retrieve_all_By_Id($this->table_course, $id, $new = 'certification');
		$data['content_view'] = 'front/course_certification';
		$this->template->template_pages($data);
	}


	public function courses($id)
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['course']       = $this->model_course->retrieve_row($this->table_course, $id);
		$data['outline']      = $this->model_course->retrieve_all_By_Id($this->table_course_outline, $id, $new = 'course_id');
		$data['content_view'] = 'front/courses';
		$this->template->template_pages($data);
	}


	public function allvendor()
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		// $data['certification']= $this->model_course->retrieve_row($this->table_cer, $id); 
		// $data['courses']      = $this->model_course->retrieve_all_By_Id($this->table_course, $id, $new = 'certification');
		$data['content_view'] = 'front/vendor_all';
		$this->template->template_pages($data);
	}

	public function vendor($id)
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['vendor']       = $this->model_course->retrieve_row($this->table_name, $id);
		$data['course']       = $this->model_course->retrieve_all_By_Id($this->table_course, $id, $new = 'vendor');
		$data['content_view'] = 'front/brand';
		$this->template->template_pages($data);
	}


	public function category($id)
	{
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);

		$data['category']     = $this->model_course->retrieve_row($this->table_cat_name, $id);
		$data['course']       = $this->model_course->retrieve_all_By_Id($this->table_course, $id, $new = 'sector');
		$data['content_view'] = 'front/category';
		$this->template->template_pages($data);
	}


	public function specific()
	{
		$this->load->view('course_page');
	}

	function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6Le4GUAUAAAAAJMj58yS6VR19xFELizIClai1qJ1',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

	// SENDING MAIL FROM CONTACT PAGE 
	public function sendMailInfo()
	{
		// $res = $this->post_captcha($_POST['g-recaptcha-response']);
		// var_dump($res); die;
		// if (!$res['success']) 
		// {
	        // What happens when the reCAPTCHA is not properly set up
	        // echo 'reCAPTCHA error: Check to make sure your keys match the registered domain and are in the correct locations. You may also want to doublecheck your code for typos or syntax errors.';
	    // } else {
	        // If CAPTCHA is successful...

	        // Paste mail function or whatever else you want to happen here!
	        // echo '<br><p>CAPTCHA was completed successfully!</p><br>';
	    // }

		$this->load->helper('security');

		$data['fname']    = $this->input->post('fname');
		$data['lname']    = $this->input->post('lname');
		$data['email']    = $this->input->post('email');
		$spam             = $this->input->post('email_1');
		$data['subject']  = $this->input->post('subject');
		$fiter            = xss_clean($this->input->post('content'));
		$fiter1           = htmlentities($fiter,ENT_QUOTES);
		$data['content']  = filter_var($fiter1, FILTER_SANITIZE_STRING);

		if($spam != '')
		{
			$_SESSION['success'] = 'Thank You ! We Will Contact You Soon';
			redirect('front/contact', 'refresh');
		}
		else
		{
			$this->load->library('email');
			$this->email->set_newline("\r\n");
			$config['protocol'] = 'sendmail';
			$config['mailpath'] = '/usr/sbin/sendmail';
			$config['charset']  = 'utf-8';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html'; 
			$this->email->initialize($config);
			$sender_email= $data['email'];

			$mail_to = 'mmj@labanepal.com';
			$data['date'] = date('Y-m-d');
			$cc      = 'roshan.maharjan@labanepal.com';

			$body = $this->load->view('emailtemp', $data, true);
		
			$this->email->from($sender_email);
			$this->email->subject($data['subject']);    		   	
			$this->email->message($body);
			$this->email->to($mail_to);
			$this->email->cc($cc);
			
			$this->email->send();

			$_SESSION['success'] = 'Thank You ! We Will Contact You Soon';

			redirect('front/contact','refresh');
		}
	}


	public function newsletter()
	{
		$email = $this->input->post('email');
		$spam  = $this->input->post('email_n');
		$url   = $this->input->post('url');
		$date  = date('Y-m-d');

		if($spam !== '')
		{
			$_SESSION['success'] = 'Thank You For Subscription';
			if($url !== '')
			{
				redirect('front/'.$url, 'refresh');
			} else {
				redirect(base_url(), 'refresh');
			}
			
		}
		else {
			$result = $this->model_course->retrieve_all($this->table_newsletter);
            $available = '';
			$x = 1; 
			foreach ($result as $r) {
				if($r->email == $email) {
					$available = $r->email;
					$_SESSION['success'] = 'Email Has Been Already Registered';
						if($url !== '') {
							redirect('front/'.$url, 'refresh');
						} else {
							redirect(base_url(), 'refresh');
						}
				}
				$x++;
			}

			if($available == '') {
				$data = array('email' => $email, 'date'  => $date);

				$this->model_course->insert($this->table_newsletter, $data);

				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$config['protocol'] = 'sendmail';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset']  = 'utf-8';
				$config['wordwrap'] = TRUE;
				$config['mailtype'] = 'html'; 
				$this->email->initialize($config);
				$sender_email= 'noreply@labanepal.com';

				$mail_to = $email;

				$body = $this->load->view('newstemp', '', true);
			
				$this->email->from($sender_email);
				$this->email->subject('Newsletter Subscription');    		   	
				$this->email->message($body);
				$this->email->to($mail_to);
				
				$this->email->send();

				$_SESSION['success'] = 'Thank you for signing up for our Newsletter';

				if($url !== '') {
					redirect('front/'.$url, 'refresh');
				} else {
					redirect(base_url(), 'refresh');
				}

			}
		}
	}
}
