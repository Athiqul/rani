<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller {

  
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
    }



    public function signIn() {

      
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
       

        $this->load->view('themes/' . 'Osru-Theme' . '/header',$data);
        
        $this->load->view('themes/' . 'Osru-Theme' . '/menu');
        $this->load->view('themes/' . 'Osru-Theme' . '/login');
        $this->load->view('themes/' . 'Osru-Theme' . '/footer');
            
    }



    public function registration(){
                 
        $this->form_validation->set_rules('name', 'Name ', 'required');
        $this->form_validation->set_rules('email', 'Email ', 'trim|required');
        $this->form_validation->set_rules('pass', 'Password ', 'trim|required');

        if ($this->form_validation->run() == FALSE) { 
                echo "1";           
        } else {

        
                $name = $this->input->post('name',TRUE);
                $email = $this->input->post('email',TRUE);
                $password = md5($this->input->post('pass'));

                $check_status = $this->db->select('*')->from('user_info')->where('email',$email)->get()->row();        
                    
                    if ($check_status) {
                        echo "2";
                    } else {

                    $user_data = array(
                        'name'      =>$name,
                        'email'     =>$email,
                        'password'  =>$password,
                        'status'    =>1,
                        'user_type' =>5
                    );
                    $this->db->insert('user_info',$user_data);

                    $ot = json_decode($this->settings->get_previous_settings('settings', 115));

                    if($ot->reg_status=='1'){

                        $em = $this->db->select('*')
                        ->from('email_config')
                        ->where('id',1)
                        ->where('status',1)
                        ->get()
                        ->row();

                        $email          = $this->input->post('email',TRUE);
                        $password       = $this->input->post('pass');
                        $subject        = 'Registration';

                        //Load email library
                        $this->load->library('email');
                        //SMTP & mail configuration
                        $config = array(
                            'protocol'  => $em->smtp_protocol,
                            'smtp_host' => $em->smtp_host,
                            'smtp_port' => $em->smtp_port,
                            'smtp_user' => $em->smtp_username,
                            'smtp_pass' => $em->smtp_password,
                            'mailtype'  => 'html',
                            'charset'   => 'utf-8'
                        );
                        $this->email->initialize($config);
                        $this->email->set_newline("\r\n");
                        //Email content
                        $htmlContent = '<p><strong>Welcome</strong> '.$name.', Your User name: '.$email.' Password : '.$password.'</p>';
                        $this->email->to($email);
                        $this->email->from($em->smtp_username,$subject);
                        $this->email->subject($subject);
                        $this->email->message($htmlContent);
                        $this->email->send();
                    }
                    echo "3";
                }

            }

        }

}

