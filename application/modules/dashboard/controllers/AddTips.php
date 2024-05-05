<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @System  : Role controller
 * @author  : BDTASK <bdtask@gmail.com>
 * @link    : http://www.bdtask.com
 */
class AddTips extends MX_Controller {
 	
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model(array('module_permission_model','role_model','PositiveAspect_model', 'positiveAspect_model','negativeAspect_model','WebsiteReview_model'));
		if (! $this->session->userdata('isAdmin'))
			redirect('login');
 	}


	public function create_list()
	{
		$data['modules'] = $this->db->select('*')->from('sec_menu_item')->group_by('module')->get()->result();
		
		$data['title']      = display('add_role');
		$data['module'] 	= "dashboard"; 
		$data['page']   	= "tips/create_list";  
		echo Modules::run('template/layout', $data); 
	}


	public function store_list()
	{
		error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Debugging statements
    var_dump($_POST); // Check POST data
    var_dump($_FILES); // Check uploaded files
	
		$this->load->library('upload');

		// print_r($this->input->post());
		// die();
		$this->form_validation->set_rules('website_name', 'Website Name', 'required|max_length[255]');
        $this->form_validation->set_rules('bonus_code', 'Bonus Code', 'max_length[255]');
        $this->form_validation->set_rules('percentage_payout', 'Percentage Payout', 'required|numeric');
        $this->form_validation->set_rules('payout_speed', 'Payout Speed', 'required|max_length[50]');
        $this->form_validation->set_rules('number_of_games', 'Number of Games', 'required|integer');
        $this->form_validation->set_rules('max_jackpot', 'Max Jackpot', 'numeric');
        $this->form_validation->set_rules('compatible_with', 'Compatible With', 'max_length[255]');
        $this->form_validation->set_rules('language', 'Language', 'required');
        $this->form_validation->set_rules('available_banking_options', 'Available Banking Options', 'max_length[255]');
        $this->form_validation->set_rules('reviewer_name', 'Reviewer Name', 'required|max_length[255]');
        $this->form_validation->set_rules('about', 'About', 'required');
        $this->form_validation->set_rules('positive_aspects[]', 'Positive Aspects', 'required');
        $this->form_validation->set_rules('negative_aspects[]', 'Negative Aspects', 'required');
        $this->form_validation->set_rules('software_games_collection', 'Software Games Collection', 'required');
        $this->form_validation->set_rules('banking_options_details', 'Banking Options Details', 'required');
        $this->form_validation->set_rules('security_fairness_details', 'Security and Fairness Details', 'required');
        $this->form_validation->set_rules('mobile_casino_details', 'Mobile Casino Details', 'required');
        $this->form_validation->set_rules('bonus_promotions_details', 'Bonus and Promotions Details', 'required');
        $this->form_validation->set_rules('welcome_bonus', 'Welcome Bonus', 'max_length[255]');
        $this->form_validation->set_rules('win_rate', 'Win Rate', 'max_length[255]');
        $this->form_validation->set_rules('payout', 'Payout', 'max_length[255]');
        $this->form_validation->set_rules('rating', 'Rating', 'required|integer');
        $this->form_validation->set_rules('website_url', 'Website URL', 'required|max_length[255]');
        $this->form_validation->set_rules('color', 'Color', 'required|max_length[255]');
		$this->form_validation->set_message('file_required', 'The %s field is required.');
       

        // Validate form data
        if ($this->form_validation->run() === FALSE) {

            // Form validation failed, load the form view again with validation errors
            $data['modules'] = $this->db->select('*')->from('sec_menu_item')->group_by('module')->get()->result();
            $data['title']      = display('add_role');
            $data['module']     = "dashboard"; 
            $data['page']       = "tips/create_list";  
            echo Modules::run('template/layout', $data);
        } else {

			  // Configure upload settings
			  $config['upload_path'] = './uploads/';
			  $config['allowed_types'] = 'gif|jpg|jpeg|png';
			  $config['max_size'] = 2048; // 2MB max size (adjust as needed)
	  
			  // Initialize upload library with config
			  $this->upload->initialize($config);
	  
			  // Upload 'image_upload' file
			  if (!empty($_FILES['image_upload']['name'])) {
				  if ($this->upload->do_upload('image_upload')) {
					  $upload_data = $this->upload->data();
					  $image_name = $upload_data['file_name'];
				  } else {
					  // File upload failed, display error message
					  $error = $this->upload->display_errors();
					  $this->session->set_flashdata('exception', $error);
					  redirect('dashboard/addtips/create_list'); // Redirect to form view
					  return; // Stop further processing
				  }
			  }

            // Upload image for 'mobile_app_screens_upload' field
            if (!empty($_FILES['mobile_app_screens_upload']['name'])) {
                if ($this->upload->do_upload('mobile_app_screens_upload')) {
                    $upload_data = $this->upload->data();
                    $mobile_image_name = $upload_data['file_name'];

                  
                   
                } else {
                    // Upload failed, display error
                    $error = $this->upload->display_errors();
					$this->session->set_flashdata('exception', $error);
					$data['modules'] = $this->db->select('*')->from('sec_menu_item')->group_by('module')->get()->result();
					$data['title']      = display('add_role');
					$data['module']     = "dashboard";
					$data['page']       = "tips/create_list";
					echo Modules::run('template/layout', $data);
                    
                }
            }
            // Form validation passed, proceed to save data
            $data = array(
                'website_name' => $this->input->post('website_name'),
                'bonus_code' => $this->input->post('bonus_code'),
                'percentage_payout' => $this->input->post('percentage_payout'),
                'payout_speed' => $this->input->post('payout_speed'),
                'number_of_games' => $this->input->post('number_of_games'),
                'max_jackpot' => $this->input->post('max_jackpot'),
                'compatible_with' => $this->input->post('compatible_with'),
                'language' => $this->input->post('language'),
				'available_games' => $this->input->post('available_games'),
                'available_banking_options' => $this->input->post('available_banking_options'),
                'reviewer_name' => $this->input->post('reviewer_name'),
                'date' => date('Y-m-d'), // Current date
                'about' => $this->input->post('about'),
				'software_rating' => $this->input->post('software_rating'),
                'software_games_collection' => $this->input->post('software_games_collection'),
				'banking_options_rating' => $this->input->post('banking_options_rating'),
                'banking_options_details' => $this->input->post('banking_options_details'),
				'security_fairness_rating' => $this->input->post('security_fairness_rating'),
                'security_fairness_details' => $this->input->post('security_fairness_details'),
				'mobile_casino_rating' => $this->input->post('mobile_casino_rating'),
                'mobile_casino_details' => $this->input->post('mobile_casino_details'),
				'bonus_promotions_rating' => $this->input->post('bonus_promotions_rating'),
                'bonus_promotions_details' => $this->input->post('bonus_promotions_details'),
				'mobile_app_url' => $this->input->post('mobile_app_url'),
                'mobile_app_screens_upload' => $mobile_image_name,
                'image_upload' => $image_name,
                'welcome_bonus' => $this->input->post('welcome_bonus'),
                'win_rate' => $this->input->post('win_rate'),
                'payout' => $this->input->post('payout'),
                'rating' => $this->input->post('rating'),
                'website_url' => $this->input->post('website_url'),
                'color' => $this->input->post('color'),
                
            );

            // Call the model function to save the data
            $insert_id = $this->WebsiteReview_model->add_review($data);

            if ($insert_id) {
                //Add Positive Aspects
				$positive_aspects = $this->input->post('positive_aspects');
                if (!empty($positive_aspects)) {
                    foreach ($positive_aspects as $key => $value) {
                        $data = array(
                            'listing_id' => $insert_id,
                            'description' => $value
                        );
                        $this->positiveAspect_model->insert_positive_aspect($data);
                    }
                }


				$negative_aspects = $this->input->post('positive_aspects');
                if (!empty($positive_aspects)) {
                    foreach ($negative_aspects as $key => $value) {
                        $data = array(
                            'listing_id' => $insert_id,
                            'description' => $value
                        );
                        $this->negativeAspect_model->insert_positive_aspect($data);
                    }
                }
				$this->session->set_flashdata('exception', 'Succesfully Added');
                redirect('dashboard/addtips/create_list');
            } else {
                
				echo "Failed to insert data";
            }
        }
	}


	public function file_required($str)
{
    if (empty($_FILES[$str]['name']))
    {
        $this->form_validation->set_message('file_required', 'The %s field is required.');
        return false;
    }
    return true;
}



	public function create_system_role()
	{
		$data['modules'] = $this->db->select('*')->from('sec_menu_item')->group_by('module')->get()->result();

		$data['title']      = display('add_role');
		$data['module'] 	= "dashboard"; 
		$data['page']   	= "role/_create_system_role";   
		echo Modules::run('template/layout', $data); 
	
	}

	public function save_create(){

			/*-----------------------------------*/ 
			$this->form_validation->set_rules('role_name', display('role_name'),'required|max_length[100]|is_unique[sec_role_tbl.role_name]');
			$this->form_validation->set_rules('role_description', display('role_description'),'required|max_length[200]');


			if ($this->form_validation->run()==TRUE) {

				$rolData = array(
					'role_name' 		=> $this->input->post('role_name',TRUE),
					'role_description' 	=> $this->input->post('role_description',TRUE),
					'create_by' 		=> $this->session->userdata('id'),
					'date_time' 		=> date('Y-m-d h:i:s')
				);


				$this->db->insert('sec_role_tbl', $rolData);
				$role_id = $this->db->insert_id();

				/*-----------------------------------*/ 
				$module  	   = $this->input->post('module',TRUE); 
				$menu_id  	   = $this->input->post('menu_id',TRUE); 
				$create  	   = $this->input->post('create',TRUE);
				$read  		   = $this->input->post('read',TRUE);
				$update  	   = $this->input->post('edit',TRUE);
				$delete  	   = $this->input->post('delete',TRUE);
		 
		 		$new_array = array();
		 		for($m=0; $m < sizeof($module); $m++) {

					for($i=0; $i < sizeof($menu_id[$m]); $i++) {

						for($j=0; $j < sizeof($menu_id[$m][$i]); $j++ ) { 
							
							$dataStore = array(
								'role_id'   	=> $role_id,
								'menu_id'   	=> $menu_id[$m][$i][$j], 
								'can_create'   	=> (!empty($create[$m][$i][$j])?$create[$m][$i][$j]:0), 
								'can_edit'     	=> (!empty($update[$m][$i][$j])?$update[$m][$i][$j]:0), 
								'can_access'  	=> (!empty($read[$m][$i][$j])?$read[$m][$i][$j]:0), 
								'can_delete'   	=> (!empty($delete[$m][$i][$j])?$delete[$m][$i][$j]:0),
								'createby'		=> $this->session->userdata('id'),
								'createdate'	=> date('Y-m-d h:i:s'),
							); 

							array_push($new_array, $dataStore);
						}
					}
				}


				if ($this->role_model->create($new_array)) {
					$this->session->set_flashdata('message', display('module_permission_added_successfully'));
				} else {
					$this->session->set_flashdata('exception', display('please_try_again'));
				}
				redirect("dashboard/role/create_system_role");

			} else {

				$data['modules'] = $this->db->select('*')->from('sec_menu_item')->group_by('module')->get()->result();

				$data['title']      = display('add_role');
				$data['module'] 	= "dashboard";  
				$data['page']   	= "role/_create_system_role";   
				echo Modules::run('template/layout', $data);

			}

	}



	public function role_list(){

		$data['role_list'] = $this->db->select('*')->from('sec_role_tbl')->get()->result();
		$data['title']      = display('add_role');
		$data['module'] 	= "dashboard";  
		$data['page']   	= "role/_role_list";   
		echo Modules::run('template/layout', $data); 	
	
	}


	public function edit_role($id=null){



			$data['modules'] = $this->db->select('*')->from('sec_menu_item')->group_by('module')->get()->result();

			$data['roleData'] = $this->db->select('*')
			->from('sec_role_tbl')
			->where('role_id',$id)
			->get()->row();

			$data['roleAcc'] = $this->db->select('sec_role_permission.*,sec_menu_item.menu_title')
			->from('sec_role_permission')
			->join('sec_menu_item','sec_menu_item.menu_id=sec_role_permission.menu_id')
			->where('role_id',$id)
			->get()->result();

			$data['title']      = display('edit_role');
			$data['module'] 	= "dashboard";  
			$data['page']   	= "role/edit_role";   
			echo Modules::run('template/layout', $data); 

	}


	public function save_update()
	{
		/*-----------------------------------*/ 
		$this->form_validation->set_rules('role_name', display('role_name'),'required|max_length[100]');
		$this->form_validation->set_rules('role_description', display('role_description'),'required|max_length[200]');
		$role_id = $this->input->post('role_id');

		if ($this->form_validation->run()==TRUE) {

			$rolData = array(
				'role_name' 		=> $this->input->post('role_name',TRUE),
				'role_description' 	=> $this->input->post('role_description',TRUE)
			);
			$this->db->where('role_id',$role_id)->update('sec_role_tbl',$rolData);


			/*-----------------------------------*/ 
			$module  	   = $this->input->post('module',TRUE); 
			$menu_id  	   = $this->input->post('menu_id',TRUE); 
			$create  	   = $this->input->post('create',TRUE);
			$read  		   = $this->input->post('read',TRUE);
			$update  	   = $this->input->post('edit',TRUE);
			$delete  	   = $this->input->post('delete',TRUE);
	 
	 		$new_array = array();
	 		for($m=0; $m < sizeof($module); $m++) {

				for($i=0; $i < sizeof($menu_id[$m]); $i++) {

					for($j=0; $j < sizeof($menu_id[$m][$i]); $j++ ) { 
						$dataStore = array(
							'role_id'   => $role_id,
							'menu_id'   => $menu_id[$m][$i][$j], 
							'can_create'   => (!empty($create[$m][$i][$j])?$create[$m][$i][$j]:0), 
							'can_edit'     => (!empty($update[$m][$i][$j])?$update[$m][$i][$j]:0), 
							'can_access'   => (!empty($read[$m][$i][$j])?$read[$m][$i][$j]:0), 
							'can_delete'   => (!empty($delete[$m][$i][$j])?$delete[$m][$i][$j]:0),
							'createby'		=> $this->session->userdata('id'),
							'createdate'	=> date('Y-m-d h:i:s'),
						); 

						array_push($new_array, $dataStore);

					}
				}
			}


			if ($this->role_model->create($new_array)) {
				$this->session->set_flashdata('message', display('module_permission_added_successfully'));
			} else {
				$this->session->set_flashdata('exception', display('please_try_again'));
			}

			redirect("dashboard/role/role_list");

		} else{

			$data['modules'] = $this->db->select('*')->from('sec_menu_item')->group_by('module')->get()->result();

			$data['roleData'] = $this->db->select('*')
			->from('sec_role_tbl')
			->where('role_id',$id)
			->get()->row();

			$data['roleAcc'] = $this->db->select('sec_role_permission.*,sec_menu_item.menu_title')
			->from('sec_role_permission')
			->join('sec_menu_item','sec_menu_item.menu_id=sec_role_permission.menu_id')
			->where('role_id',$id)
			->get()->result();

			$data['title']      = display('edit_role');
			$data['module'] 	= "dashboard";  
			$data['page']   	= "role/edit_role";   
			echo Modules::run('template/layout', $data); 

		}

	}


  	public function delete_role($id=null)
	{
		
		$delete = $this->db->where('role_id',$id)->delete('sec_role_tbl');
		$delete = $this->db->where('role_id',$id)->delete('sec_role_permission');
		if ($delete) {
			$this->session->set_flashdata('message', display('delete_successfully'));
		} else {
			$this->session->set_flashdata('exception', display('please_try_again'));
		}
		redirect("dashboard/role/role_list");

	}


	public function user_access_role(){

		$this->db->select('sec_user_access_tbl.*,sec_role_tbl.*,user_info.name');
		$this->db->from('sec_user_access_tbl');
		$this->db->join('user_info','user_info.id=sec_user_access_tbl.fk_user_id');
		$this->db->join('sec_role_tbl','sec_role_tbl.role_id=sec_user_access_tbl.fk_role_id');
        $data['acc'] = $this->db->get()->result();


		$data['title']      	= display('user_access_role');
		$data['module']     	= "dashboard";  
		$data['page']       	= "role/user_access_role";
		echo Modules::run('template/layout', $data);
	}



	public function assign_role_to_user(){


		$data['role'] 			= $this->db->select('role_name,role_id')->from('sec_role_tbl')->get()->result();

		$data['user'] 			= $this->db->select('id,name')
								->from('user_info')
								->where('user_type!=',3)
								->where('user_type!=',5)
								->get()
								->result();

		$data['title']      = " Assing Role To User";
		$data['module'] 	= "dashboard";  
		$data['page']   	= "role/_assign_role_to_user";   
		echo Modules::run('template/layout', $data); 
	}



	public function save_role_access()
	{
		$new_array = array();
		$role_id = $this->input->post('role',TRUE);
		$user_id = $this->input->post('user_id',TRUE);

		for($j=0; $j < sizeof($role_id); $j++ ) { 
			$rolData = array(
				'fk_role_id' 	=> $role_id[$j],
				'fk_user_id' 	=> $user_id
			);
			array_push($new_array, $rolData);
		}
		$this->db->where('fk_user_id', $new_array[0]['fk_user_id'])->delete('sec_user_access_tbl');
		$this->db->insert_batch('sec_user_access_tbl', $new_array);
		$this->session->set_flashdata('message', display('save_successfully'));
		redirect("dashboard/role/assign_role_to_user");
		
	}
	

  	public function edit_access_role($id=null)
	{

		$data['role'] 			= $this->db->select('role_name,role_id')->from('sec_role_tbl')->get()->result();
		$data['user'] 			= $this->db->select('id,name')
								->from('user_info')
								->where('user_type!=',3)
								->get()
								->result();
		$data['info'] = $this->db->select('*')->from('sec_user_access_tbl')->where('role_acc_id',$id)->get()->row();


		$data['title']      = display('add_role');
		$data['module'] 	= "dashboard"; 
		$data['page']   	= "role/edit_role_access";   
		echo Modules::run('template/layout', $data); 


	}


	public function update_access_role()
	{

		$new_array = array();
		$role_id = $this->input->post('role',TRUE);
		$user_id = $this->input->post('user_id',TRUE);

		for($j=0; $j < sizeof($role_id); $j++ ) { 
			$rolData = array(
				'fk_role_id' 	=> $role_id[$j],
				'fk_user_id' 	=> $user_id
			);
			array_push($new_array, $rolData);
		}
		$this->db->where('fk_user_id', $new_array[0]['fk_user_id'])->delete('sec_user_access_tbl');
		$this->db->insert_batch('sec_user_access_tbl', $new_array);

		$this->session->set_flashdata('message', display('update_message'));
		redirect("dashboard/role/user_access_role");

	}


	public function delete_access_role($id)
	{

		$this->db->where('role_acc_id',$id)->delete('sec_user_access_tbl');
		$this->session->set_flashdata('message', display('delete_message'));
		redirect("dashboard/role/user_access_role");


	}


}
