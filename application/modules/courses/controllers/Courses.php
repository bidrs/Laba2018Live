<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends MY_Controller {

	// Declare database table
	private $table_name           = 'laba_vendor'; 
	private $table_cat_name       = 'laba_vendor_sector';
	private $table_cer            = 'laba_certification';
	private $table_course         = 'laba_course';
	private $table_course_outline = 'laba_course_outline';



	public function __construct()
	{
        parent::__construct();
        $this->load->model('courses/model_course'); 
        $this->load->library('user_agent');
    }

	public function index()
	{
		$data['title'] = 'All listing Courses';
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content']      = $this->model_course->retrieve_all($this->table_course);
		$data['chapter']      = $this->model_course->retrieve_all($this->table_course_outline);
		$data['content_view'] = 'courses/courses';
		$this->template->template($data);
	}


	public function course_add()
	{
		$data['title'] = 'Add Course';
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content_view'] = 'courses/course_add';
		$this->template->template($data);
	}

	public function course_upload()
	{
		if(array_filter($_POST['list']) == array()) { $total = 0; } else { $total = count(array_filter($_POST['list'])); } // TO KNOW MODULE LIST

		// var_dump($total); die;
		// var_dump($total); die;

		$data = array('title'  => $this->input->post('title'),
					  'content' => $this->input->post('content'),
					  'vendor' => $this->input->post('vendor'),
					  'certification' => $this->input->post('certification'),
					  'sector' => $this->input->post('sector'),
					  'duration' => $this->input->post('duration'),
					  'level' => $this->input->post('level'),
					  'benefit' => $this->input->post('benefit'),
					  'objective' => $this->input->post('objective'),
					  'prerequisities' => $this->input->post('pre'),
					  'exam' => $this->input->post('exam'),
					  'module' => $total,
					  'created' => date('Y-m-d')
	                 );

		$row_id = $this->model_course->insert_return_id($this->table_course, $data);   // GETTING ID FROM INSERT

		if(($row_id > 0) AND ($total > 0)) 
		{
			for($i=0; $i < $total; $i++)
			{
				$data = array('title' => $_POST['list'][$i],'content' => $_POST['sub_list'][$i],'course_id' => $row_id,'created' => date('Y-m-d'));
					$this->model_course->insert($this->table_course_outline, $data);
			}

			// echo "successfully inserted";
			redirect('courses');
		}
		else 
		{
			redirect('courses', 'refresh');
		}

	}

	public function course_view($id)
	{
		$data['title'] = 'Course Detail';
		$data['content']      = $this->model_course->retrieve_row($this->table_course, $id);
		$data['chapter']      = $this->model_course->retrieve_all_By_Id($this->table_course_outline, $id, $new = 'course_id');
		// $data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		// $data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		// $data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content_view'] = 'courses/course_view';
		$this->template->template($data);
	}

	public function course_edit($id)
	{
		$new = 'course_id';
		$data['title']   = 'Course Modification';
		$data['content']      = $this->model_course->retrieve_row($this->table_course, $id);
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['s_list']       = $this->model_course->retrieve_all($this->table_cat_name);
		$data['chapter']      = $this->model_course->retrieve_all_By_Id($this->table_course_outline, $id, $new);
		$data['content_view'] = 'courses/course_edit';
		$this->template->template($data);
	}

	public function course_edited($id)
	{
		$data = array('title'  => $this->input->post('title'),
					  'content' => $this->input->post('content'),
					  'vendor' => $this->input->post('vendor'),
					  'certification' => $this->input->post('certification'),
					  'sector' => $this->input->post('sector'),
					  'duration' => $this->input->post('duration'),
					  'level' => $this->input->post('level'),
					  'benefit' => $this->input->post('benefit'),
					  'objective' => $this->input->post('objective'),
					  'prerequisities' => $this->input->post('pre'),
					  'exam' => $this->input->post('exam'),
					  'module' => $this->input->post('module'),
					  'updated' => date('Y-m-d')
	                 );

		if($this->model_course->update($this->table_course, $data, $id)) 
		{
			redirect('courses'); 
		}
	}

	public function course_remove($id)
	{
		if($this->model_course->remove($this->table_course, $id)) 
		{
			$this->model_course->remove_cat_id($this->table_course_outline, $id, $new = 'course_id');
				redirect('courses');
		}
	}


	public function course_outline($id)
	{
		$new = 'course_id';
		$data = array();
		$data['title']   = 'Course Outline of';
		$data['content'] = $this->model_course->retrieve_row($this->table_course, $id);
		// $data['chapter'] = $this->model_course->retrieve_all_By_Id($this->table_course_outline, $id, $new);

		// FOR PAGINATION
        $limit_per_page = 5;
        $page           = ($this->uri->segment(4)) ? ($this->uri->segment(4) - 1) : 0;
        $total_records  = count($this->model_course->retrieve_all_By_Id($this->table_course_outline, $id, $new));

        // var_dump($total_records); die;

        if ($total_records > 0)
        {
        	// get current page records
            $data["chapter"] = $this->model_course->retrieve_all_By_Id_Limit($limit_per_page, $page * $limit_per_page, $this->table_course_outline, $id, $new);

            $config['base_url']    = base_url() . 'courses/course_outline/' . $id;
            $config['total_rows']  = $total_records;
            $config['per_page']    = $limit_per_page;
            $config["uri_segment"] = 4;

            // custom paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';
             
            $config['first_link'] = 'First Page';
            $config['first_tag_open'] = '<span class="firstlink">';
            $config['first_tag_close'] = '</span>';
             
            $config['last_link'] = 'Last Page';
            $config['last_tag_open'] = '<span class="lastlink">';
            $config['last_tag_close'] = '</span>';
             
            $config['next_link'] = 'Next Page';
            $config['next_tag_open'] = '<span class="nextlink">';
            $config['next_tag_close'] = '</span>';
 
            $config['prev_link'] = 'Prev Page';
            $config['prev_tag_open'] = '<span class="prevlink">';
            $config['prev_tag_close'] = '</span>';
 
            $config['cur_tag_open'] = '<span class="curlink">';
            $config['cur_tag_close'] = '</span>';
 
            $config['num_tag_open'] = '<span class="numlink">';
            $config['num_tag_close'] = '</span>';

            $this->load->library('pagination');
            $this->pagination->initialize($config);

            // build paging links
            $data["links"] = $this->pagination->create_links();

        }

		$data['content_view'] = 'courses/course_outline';
		$this->template->template_ck($data);
	}

	public function course_outline_add()
	{
		$id = $this->input->post('id');
		$data = array('title'=>$this->input->post('list'),
					  'content'=>$this->input->post('sub_list'),
					  'course_id'=>$id,
					  'created'=>date('Y-m-d')
					  );
		if($this->model_course->insert($this->table_course_outline, $data)) 
		{
			$new = 'course_id';
				$total = $this->model_course->retrieve_all_By_Id($this->table_course_outline, $id, $new);
					$data = array('module'=>count($total));
						$this->model_course->update($this->table_course, $data, $id);

							// TO SHOW ADDED ITEM IN LAST PAGE OF PAGINATION
							$getUrl = (int)(count($total)) / 5;
								$url = (is_float($getUrl)) ? (floor($getUrl) + 1) : $getUrl;


			($url > 0) ? redirect('courses/course_outline/'.$id.'/'.$url, 'refresh') : redirect('courses/course_outline/'.$id, 'refresh');
		}
	}

	public function course_outline_edit($id)
	{	
		$m_id = $this->input->post('main_id');
		$p_id = $this->input->post('pagination_id');
		$data = array('title'=>$this->input->post('list'),
					  'content'=>$this->input->post('sub_list'),
					  'updated'=>date('Y-m-d')
					  );

		if($this->model_course->update($this->table_course_outline, $data, $id)) 
		{
			if($p_id != NULL) 
			{
				redirect('courses/course_outline/'.$m_id.'/'.$p_id);
			}
			else
			{
				redirect('courses/course_outline/'.$m_id);
			}
		}
	}

	public function course_outline_delete($id)
	{
		$m_id = $this->input->post('main_id');
		if($this->model_course->remove($this->table_course_outline, $id)) 
		{
			$new = 'course_id';
			$total = $this->model_course->retrieve_all_By_Id($this->table_course_outline, $m_id, $new);
				$data = array('module'=>count($total));
					$this->model_course->update($this->table_course, $data, $m_id);
						redirect('courses/course_outline/'.$m_id);
		}
	}


	public function lists()
	{
		$data['title']   = 'Listing All Vendors';
		$data['content'] = $this->model_course->retrieve_all($this->table_name);
		$data['content_view'] = 'courses/lists';
		$this->template->template($data);
	}

	public function add()
	{
		$data['title'] = 'Add Vendor Technology';
		$data['content_view'] = 'courses/add';
		$this->template->template($data);
	}

	public function vendor_upload()
	{
		if($_FILES['image']['error'] == 0)
		{
			$config['upload_path']   = './assets/cpanel/images/vendor/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_width']     = '250px';
			$config['max_height']    = '100px';

			$this->load->library('upload', $config);

			if (! $this->upload->do_upload('image'))
			{
				$data['error']  = $this->upload->display_errors();
					$_SESSION['error'] = $data['error'];
						redirect('courses/lists/add');
			} 
			else
			{
				$data['uploaded_image'] = $this->upload->data('file_name');
				$image = $data['uploaded_image'];

				$data = array('vendor'   => $this->input->post('vendor'),
							  'short'    => $this->input->post('short'),
							  'image'    => $image
			                 );

				if($this->db->insert($this->table_name, $data))
				{
					// $_SESSION['success'] = 'Vendor Name Added';
						redirect('courses/lists');
				}
			}
		}
		else
		{
			$data = array('vendor'   => $this->input->post('vendor'),
						  'short'    => $this->input->post('short'),
		                 );

			if($this->db->insert($this->table_name, $data))
			{
				// $_SESSION['success'] = 'Vendor Name Added';
					redirect('courses/lists');
			}
		}
		
	}

	public function vendor_edit($id)
	{
		$data['title']   = 'Edit Vendor Technology';
		$data['content'] = $this->model_course->retrieve_row($this->table_name, $id);
		$data['content_view'] = 'courses/vendor_edit';
		$this->template->template($data);
	}

	public function vendor_edited($id)
	{
		if(($_FILES['image']['error']) == 0) 
		{
			$config['upload_path']   = './assets/cpanel/images/vendor/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_width']     = '250px';
			$config['max_height']    = '100px';

			$this->load->library('upload', $config);

			if (! $this->upload->do_upload('image'))
			{
				$data['error']  = $this->upload->display_errors();
					$_SESSION['error'] = $data['error'];
						redirect('courses/vendor_edit/'.$id);
			} 
			else
			{
				$current_image = $this->model_course->retrieve_row($this->table_name, $id);
					unlink('./assets/cpanel/images/vendor/'.$current_image->image);

				$data = array('vendor'   => $this->input->post('vendor'),
							  'short'    => $this->input->post('short'),
							  'image'    => $this->upload->data('file_name')
			                 );

				if($this->model_course->update($this->table_name, $data, $id))
				{
					// $_SESSION['success']
					redirect('courses/lists');
				}
			}
		}
		else
		{
			$data = array('vendor' => $this->input->post('vendor'),
						  'short'  => $this->input->post('short')
		                 );

			if($this->model_course->update($this->table_name, $data, $id))
			{
				// $_SESSION['success']
				redirect('courses/lists');
			}
		}
	}

	public function vendor_remove($id)
	{
		$current_image = $this->model_course->retrieve_row($this->table_name, $id);
			unlink('./assets/cpanel/images/vendor/'.$current_image->image);

				if($this->model_course->remove($this->table_name, $id)) 
				{
					redirect('courses/lists');
				}
	}



	// CATEGORIES LIST
	public function cat_lists()
	{
		$data['title']        = 'Listing All Categories';
		$data['content']      = $this->model_course->retrieve_all($this->table_cat_name);
		$data['content_view'] = 'courses/categories_list';
		$this->template->template($data);
	}

	public function cat_add()
	{
		$data['title'] = 'Add Category';
		$data['content_view'] = 'courses/categories_add';
		$this->template->template($data);
	}

	public function cat_upload()
	{
		$data = array('sector'  => $this->input->post('sector'),
					  'tagline' => $this->input->post('tagline'),
					  'created' => date('Y-m-d')
	                 );

		if($this->db->insert($this->table_cat_name, $data))
		{
			// $_SESSION['success'] = 'Vendor Name Added';
				redirect('courses/cat_lists');
		}
	}

	public function cat_edit($id)
	{
		$data['title']   = 'Edit Category';
		$data['content'] = $this->model_course->retrieve_row($this->table_cat_name, $id);
		$data['content_view'] = 'courses/categories_edit';
		$this->template->template($data);
	}

	public function cat_edited($id)
	{
		$data = array('sector'  => $this->input->post('sector'),
					  'tagline' => $this->input->post('tagline'),
					  'updated' => date('Y-m-d')
	                 );

		if($this->model_course->update($this->table_cat_name, $data, $id)) 
		{
			redirect('courses/cat_lists');
		}
	}

	public function cat_remove($id)
	{
		if($this->model_course->remove($this->table_cat_name, $id)) 
		{
			redirect('courses/cat_lists');
		}
	}

	// CERTIFICATIONS
	public function vendor_cerfication()
	{
		$data['title'] = 'All listing Certifications';
		$data['v_list']       = $this->model_course->retrieve_all($this->table_name);
		$data['ce_list']      = $this->model_course->retrieve_all($this->table_cer);
		$data['content_view'] = 'courses/vendor_certification';
		$this->template->template($data);
	}

	public function vendor_certification_add()
	{
		$data['title'] = 'Add Certification';
		$data['v_select'] = $this->model_course->retrieve_all($this->table_name);                 //Vendor lists
		$data['content_view'] = 'courses/vendor_certification_add';
		$this->template->template($data);
	}

	public function vendor_certification_upload()
	{
		$data = array('title'     => $this->input->post('title'),
					  'short'     => $this->input->post('short'),
					  'content'   => $this->input->post('content'),
					  'vendor_id' => $this->input->post('vendor'),
					  'created'   => date('Y-m-d')
	                 );

		if($this->model_course->insert($this->table_cer, $data)) 
		{
			redirect('courses/vendor_cerfication');
		}
	}

	public function vendor_certification_edit($id)
	{
		$data['title']        = 'Edit Certification';
		$data['v_select']	  = $this->model_course->retrieve_all($this->table_name);                 //Vendor lists
		$data['content']      = $this->model_course->retrieve_row($this->table_cer, $id);              
		$data['content_view'] = 'courses/vendor_certification_edit';
		$this->template->template($data);
	}

	public function vendor_certification_edited($id)
	{
		$data = array('title'     => $this->input->post('title'),
					  'short'     => $this->input->post('short'),
					  'content'   => $this->input->post('content'),
					  'vendor_id' => $this->input->post('vendor'),
					  'updated'   => date('Y-m-d')
	                 );

		if($this->model_course->update($this->table_cer, $data, $id)) 
		{
			redirect('courses/vendor_cerfication');
		}
	}	

	public function vendor_certification_remove($id)
	{
		if($this->model_course->remove($this->table_cer, $id)) 
		{
			redirect('courses/vendor_cerfication');
		} 
	}
}
