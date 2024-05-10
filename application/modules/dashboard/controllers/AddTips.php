<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @System  : Role controller
 * @author  : BDTASK <bdtask@gmail.com>
 * @link    : http://www.bdtask.com
 */
class AddTips extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('module_permission_model', 'role_model', 'PositiveAspect_model', 'positiveAspect_model', 'negativeAspect_model', 'WebsiteReview_model'));
		if (!$this->session->userdata('isAdmin'))
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
		// 	error_reporting(E_ALL);
		// ini_set('display_errors', 1);

		// // Debugging statements
		// var_dump($_POST); // Check POST data
		// var_dump($_FILES); // Check uploaded files

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
		$this->form_validation->set_rules('payout', 'Payout', 'required');
		$this->form_validation->set_rules('rating', 'Rating', 'required');
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
				'owner'=>$this->input->post('owner'),
				'founding_date'=>$this->input->post('founding_date'),
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
				redirect('dashboard/addtips/list');
			} else {

				echo "Failed to insert data";
			}
		}
	}



	public function list()
	{


		$data['modules'] = $this->db->select('*')->from('sec_menu_item')->group_by('module')->get()->result();
		$data['module'] 	= "dashboard";
		$data['page']   	= "tips/list";
		$this->load->database();

		// Fetch reviews data directly in the controller
		$query = $this->db->get('websitereview'); // Assuming 'website_reviews' is your database table

		// Check if there are rows returned
		if ($query->num_rows() > 0) {
			$data['newslists'] = $query->result_array(); // Get results as an array of rows
		} else {
			$data['newslists'] = array(); // Initialize empty array if no rows found
		}




		echo Modules::run('template/layout', $data);
	}


	public function edit_list($review_id = null)
	{
		$data['modules'] = $this->db->select('*')->from('sec_menu_item')->group_by('module')->get()->result();
		$data['module']     = "dashboard";
		$data['page']       = "tips/edit_list";

		$this->load->database();

		// Fetch a single review by ID
		$query = $this->db->get_where('websitereview', array('id' => $review_id));

		// Check if a row was found
		if ($query->num_rows() > 0) {
			$data['review'] = $query->row_array(); // Get the single row as an array
		} else {
			// Handle case where review was not found
			show_error('Review not found', 404); // Display a 404 error
			return;
		}

		// Fetch positive aspects for a given listing_id
		$this->db->where('listing_id', $review_id);
		$query_positive = $this->db->get('positive_aspects');

		// Fetch negative aspects for a given listing_id.
		$this->db->where('listing_id', $review_id);
		$query_negative = $this->db->get('negative_aspects');

		// Check if positive aspects were found
		if ($query_positive->num_rows() > 0) {
			$data['positive_aspects'] = $query_positive->result_array(); // Get all positive aspects as an array of arrays
		} else {
			$data['positive_aspects'] = array(); // No positive aspects found
		}

		// Check if negative aspects were found
		if ($query_negative->num_rows() > 0) {
			$data['negative_aspects'] = $query_negative->result_array(); // Get all negative aspects as an array of arrays
		} else {
			$data['negative_aspects'] = array(); // No negative aspects found
		}



		// var_dump($data['review']);
		// die();
		echo Modules::run('template/layout', $data);
	}



	public function update_list($id)
	{
		// 	error_reporting(E_ALL);
		// ini_set('display_errors', 1);

		// // Debugging statements
		// var_dump($_POST); // Check POST data
		// var_dump($_FILES); // Check uploaded files

		// echo $this->input->post('mobile_app_url');
		// die();
         
		$existing_data = $this->db->get_where('websitereview', ['id' => $id])->row();

		$this->load->library('upload');

		// Set form validation rules for updating
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
		$this->form_validation->set_rules('software_games_collection', 'Software Games Collection', 'required');
		$this->form_validation->set_rules('banking_options_details', 'Banking Options Details', 'required');
		$this->form_validation->set_rules('security_fairness_details', 'Security and Fairness Details', 'required');
		$this->form_validation->set_rules('mobile_casino_details', 'Mobile Casino Details', 'required');
		$this->form_validation->set_rules('bonus_promotions_details', 'Bonus and Promotions Details', 'required');
		$this->form_validation->set_rules('welcome_bonus', 'Welcome Bonus', 'max_length[255]');
		$this->form_validation->set_rules('win_rate', 'Win Rate', 'max_length[255]');
		$this->form_validation->set_rules('payout', 'Payout', 'required');
		$this->form_validation->set_rules('rating', 'Rating', 'required');
		$this->form_validation->set_rules('website_url', 'Website URL', 'required|max_length[255]');
		$this->form_validation->set_rules('mobile_app_url', 'Mobile App Url', 'required|max_length[255]');
		$this->form_validation->set_rules('color', 'Color', 'required|max_length[255]');
		$this->form_validation->set_message('file_required', 'The %s field is required.');
		// Add other validation rules as needed for updating...

		// Validate form data
		if ($this->form_validation->run() === FALSE) {
			// Form validation failed, load the form view again with validation errors
			$data['modules'] = $this->db->select('*')->from('sec_menu_item')->group_by('module')->get()->result();
		$data['module']     = "dashboard";
		$data['page']       = "tips/edit_list";

		$this->load->database();

		// Fetch a single review by ID
		$query = $this->db->get_where('websitereview', array('id' => $id));

		// Check if a row was found
		if ($query->num_rows() > 0) {
			$data['review'] = $query->row_array(); // Get the single row as an array
		} else {
			// Handle case where review was not found
			show_error('Review not found', 404); // Display a 404 error
			return;
		}

		// Fetch positive aspects for a given listing_id
		$this->db->where('listing_id', $id);
		$query_positive = $this->db->get('positive_aspects');

		// Fetch negative aspects for a given listing_id.
		$this->db->where('listing_id', $id);
		$query_negative = $this->db->get('negative_aspects');

		// Check if positive aspects were found
		if ($query_positive->num_rows() > 0) {
			$data['positive_aspects'] = $query_positive->result_array(); // Get all positive aspects as an array of arrays
		} else {
			$data['positive_aspects'] = array(); // No positive aspects found
		}

		// Check if negative aspects were found
		if ($query_negative->num_rows() > 0) {
			$data['negative_aspects'] = $query_negative->result_array(); // Get all negative aspects as an array of arrays
		} else {
			$data['negative_aspects'] = array(); // No negative aspects found
		}



		// var_dump($data['review']);
		// die();
		echo Modules::run('template/layout', $data);
		} else {
			// Form validation passed, proceed to update data

			// Configure upload settings
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = 2048; // 2MB max size (adjust as needed)

			// Initialize upload library with config
			$this->upload->initialize($config);

			// Check if a new 'image_upload' file is provided
			$image_name= $existing_data->image_upload;
			if (!empty($_FILES['image_upload']['name'])) {
				// Load existing record to get the current image filename
				
				$current_image = $existing_data->image_upload;

				// Upload new image
				if ($this->upload->do_upload('image_upload')) {
					// Delete the current image file if it exists
					if (!empty($current_image) && file_exists('./uploads/' . $current_image)) {
						unlink('./uploads/' . $current_image); // Remove the existing image file
					}

					$upload_data = $this->upload->data();
					$image_name= $upload_data['file_name'];
				} else {
					// File upload failed, display error message
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('exception', $error);
					redirect("dashboard/addtips/edit_list/{$id}"); // Redirect to update form view
					return; // Stop further processing
				}
			}


			//Mobile Screen app image upload
			$mobile_image_name=$existing_data->mobile_app_screens_upload;
			if (!empty($_FILES['mobile_app_screens_upload']['name'])) {
				// Load existing record to get the current image filename
				
				$current_image = $existing_data->mobile_app_screens_upload;

				// Upload new image
				if ($this->upload->do_upload('mobile_app_screens_upload')) {
					// Delete the current image file if it exists
					if (!empty($current_image) && file_exists('./uploads/' . $current_image)) {
						unlink('./uploads/' . $current_image); // Remove the existing image file
					}

					$upload_data = $this->upload->data();
					$mobile_image_name = $upload_data['file_name'];
				} else {
					// File upload failed, display error message
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('exception', $error);
					redirect("dashboard/addtips/edit_list/{$id}"); // Redirect to update form view
					return; // Stop further processing
				}
			}

			// Prepare data for update
			$data = array(
				'website_name' => $this->input->post('website_name'),
				'bonus_code' => $this->input->post('bonus_code'),
				'owner'=>$this->input->post('owner'),
				'founding_date'=>$this->input->post('founding_date'),
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
				'mobile_app_screens_upload' => $mobile_image_name==null?$existing_data->mobile_app_screens_upload:$mobile_image_name,
				'image_upload' => $image_name==null?$existing_data->image_upload:$image_name,
				'welcome_bonus' => $this->input->post('welcome_bonus'),
				'win_rate' => $this->input->post('win_rate'),
				'payout' => $this->input->post('payout'),
				'rating' => $this->input->post('rating'),
				'website_url' => $this->input->post('website_url'),
				'color' => $this->input->post('color'),

			);


			// Call the model function to update the data
			$result = $this->WebsiteReview_model->update_review($id, $data);

			if ($result) {
				$this->session->set_flashdata('exception', 'Successfully Updated');
				redirect('dashboard/addtips/list');
			} else {
				$this->session->set_flashdata('exception', 'Update Failed!');
				redirect('dashboard/addtips/list');
			}
		}
	}


	public function file_required($str)
	{
		if (empty($_FILES[$str]['name'])) {
			$this->form_validation->set_message('file_required', 'The %s field is required.');
			return false;
		}
		return true;
	}


	public function delete_list($id) {
        // Check if ID is provided and is numeric
        if (!is_numeric($id)) {
            show_error('Invalid review ID'); // Show error if ID is invalid
        }

        // Call the model method to delete the review
        $deleted = $this->WebsiteReview_model->delete_review($id);

        if ($deleted) {
            // Set flash message for success
            $this->session->set_flashdata('success', 'Review deleted successfully');
        } else {
            // Set flash message for failure
            $this->session->set_flashdata('error', 'Failed to delete review');
        }

        // Redirect back to a list page or any other page after deletion
        redirect('dashboard/addtips/list');
    }
}
