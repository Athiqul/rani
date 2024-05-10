<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Football extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load any models or helpers needed for this controller
        $this->load->model('ads');
        $this->load->model("settings");
        $this->load->model('home_model', 'hm');
        $this->load->model('Pb_function', 'pb');
        $this->load->model('All_cata', 'cata');
        $this->load->model('common_model');
        $this->load->model('Write_setting_model', 'wsm');
        $this->load->model('auth_model');
    }

    public function index() {
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
 
         $data['latest_news']=$this->db->where('page','football-betting-sites')->get('news_mst')->result();
         $this->load->view('themes/' . 'Osru-Theme' . '/header', $data);
 
         $this->load->view('themes/' . 'Osru-Theme' . '/menu');
         $this->load->view('themes/' . 'Osru-Theme' . '/football_page');
         $this->load->view('themes/' . 'Osru-Theme' . '/footer');
    }

    public function scores() {
        // Method to display the football scores
        echo "This is the football scores page.";
    }

    public function schedule() {
        // Method to display the football schedule
        echo "This is the football schedule page.";
    }

    // Add more methods as needed

}
