<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tips extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ads');
        $this->load->model("settings");
        $this->load->model('home_model', 'hm');
        $this->load->model('Pb_function', 'pb');
        $this->load->model('All_cata', 'cata');
        $this->load->model('common_model');
        $this->load->model('Write_setting_model', 'wsm');
        $this->load->model('auth_model');
        
        $this->load->database();
        // Load any models or helpers needed for this controller
    }

    public function prediction() {
        // Default method, you can place your default logic here
         # website setting data     
         $data['setting']                = $this->db->get('app_settings')->row();
         $data['meta']                   = json_decode($this->settings->get_previous_settings('settings', 5));
         $data['social_link']            = json_decode($this->settings->get_previous_settings('settings', 111));
         $data['social_page']            = json_decode($this->settings->get_previous_settings('settings', 6));
 
         $data['default_theme'] = $this->wsm->theme_data();
         $data['lan'] = $this->wsm->lan_data();
         $default_theme = $data['default_theme'];
 
         $data['ln'] = $this->common_model->latest_news();
         $data['bn'] = $this->common_model->breaking_news();
         $data['mr'] = $this->common_model->most_read_dbse();
 
         $data['login_url'] = $this->googleplus->loginURL();
         $data['main_menu'] = $this->settings->main_menu();
         $data['cat_menus'] = $this->settings->footer_menu();
         $data['footer_menu'] = $this->settings->menu_position_3();

         $query = $this->db->get('websitereview'); // Assuming 'website_reviews' is your database table

		// Check if there are rows returned
		if ($query->num_rows() > 0) {
			$data['lists'] = $query->result_array(); // Get results as an array of rows
		} else {
			$data['lists'] = array(); // Initialize empty array if no rows found
		}
 
 
         $this->load->view('themes/' . 'Osru-Theme' . '/header', $data);
 
         $this->load->view('themes/' . 'Osru-Theme' . '/menu');
         $this->load->view('themes/' . 'Osru-Theme' . '/prediction');
         $this->load->view('themes/' . 'Osru-Theme' . '/footer');
    }

    public function betting_overview($review_id) {

        // 	error_reporting(E_ALL);
		// ini_set('display_errors', 1);

        $data['setting']                = $this->db->get('app_settings')->row();
        $data['meta']                   = json_decode($this->settings->get_previous_settings('settings', 5));
        $data['social_link']            = json_decode($this->settings->get_previous_settings('settings', 111));
        $data['social_page']            = json_decode($this->settings->get_previous_settings('settings', 6));

        $data['default_theme'] = $this->wsm->theme_data();
        $data['lan'] = $this->wsm->lan_data();
        $default_theme = $data['default_theme'];

        $data['ln'] = $this->common_model->latest_news();
        $data['bn'] = $this->common_model->breaking_news();
        $data['mr'] = $this->common_model->most_read_dbse();

        $data['login_url'] = $this->googleplus->loginURL();
        $data['main_menu'] = $this->settings->main_menu();
        $data['cat_menus'] = $this->settings->footer_menu();
        $data['footer_menu'] = $this->settings->menu_position_3();
        $query = $this->db->get_where('websitereview', array('id' => $review_id));

		// Check if a row was found
		if ($query->num_rows() > 0) {
			$data['review'] = $query->row_array(); // Get the single row as an array
		} else {
			// Handle case where review was not found
			show_error('Review not found', 404); // Display a 404 error
			return;
		}



      
		$query_positive = $this->db->get_where('positive_aspects', array('listing_id' => $review_id))->result();

		// Fetch negative aspects for a given listing_id.
	
		$query_negative = $this->db->get_where('negative_aspects',array('listing_id' => $review_id))->result();

		// Check if positive aspects were found
		
			$data['positive_aspects'] = $query_positive; // Get all positive aspects as an array of arrays
		
		

		// Check if negative aspects were found
		
			$data['negative_aspects'] = $query_negative; // Get all negative aspects as an array of arrays
	



        $this->load->view('themes/' . 'Osru-Theme' . '/header', $data);
 
        $this->load->view('themes/' . 'Osru-Theme' . '/menu');
        $this->load->view('themes/' . 'Osru-Theme' . '/prediction_details');
        $this->load->view('themes/' . 'Osru-Theme' . '/footer');
    }

    public function add() {
        // Method to add a new tip
        echo "Adding a new tip";
    }

    // Add more methods as needed

}
