<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @System  : Category Controller
 * @author  : BDTASK <bdtask@gmail.com>
 * @link    : http://www.bdtask.com
 */
class Category extends MX_Controller {

	 #----------------------------------
    public function __construct() {

        parent::__construct();
        if (! $this->session->userdata('isLogIn'))
            redirect('login');


        $this->load->model("category_model");

    }


    public function save_category_img_status($category_id=NULL) {

        $data = $this->db->select('img_status')->from('categories')->where('category_id',$category_id)->get()->row();
        $status = ($data->img_status==1?'0':'1');

        $this->db->set('img_status', $status);
        $this->db->where('category_id', $category_id);
        $this->db->update('categories');        
    }

    #----------------------------------
    # Add new category
    # @param none
    # desc - To adding new category
    #-----------------------------------
    public function add_category() {
        $this->permission->check_label('add_category')->create()->redirect(); 
        $data['title'] = display('app_category');
        $data['module'] = "categories"; 
        $data['page']   = "category/_add_category"; 
        echo Modules::run('template/layout', $data); 


    }

    #------------------------------------
    #   To view list of categories
    #------------------------------------
    public function list_of_categories() {

        $this->permission->check_label('category_list')->read()->redirect(); 

        $data['all_categories'] = $this->category_model->all_categories();

        $data['title'] = display('category_list');
        $data['module'] = "categories"; 
        $data['page']   = "category/_all_categories"; 
        echo Modules::run('template/layout', $data); 

    }


    #------------------------------------
    #   save_category
    #------------------------------------
    public function save_category() {

        $this->permission->check_label('add_category')->create()->redirect(); 

        if($_FILES['cate_pic']['name']){

            $config=array();
            $config['upload_path'] ='uploads/category_img/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['overwrite']     = false;
            $config['max_size']      = 1024;
            $config['remove_spaces'] = true;
            $config['max_filename']   = 10;
            $config['file_ext_tolower'] = true;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('cate_pic')) {
                $error =  $this->upload->display_errors();
                $this->session->set_flashdata('execption',$error);
                redirect('categories/category/add_category');
            }
            else
            {
             $data1 = $this->upload->data();
             $data['category_imgae'] = $config['upload_path'].$data1['file_name'];
                #------------resize image------------#
              $this->load->library('image_lib');
              $config['image_library'] = 'gd2';
              $config['source_image'] = $config['upload_path'].$data1['file_name'];
              $config['create_thumb'] = FALSE;
              $config['maintain_ratio'] = FALSE;
              $config['width']     = 1350;
              $config['height']   = 350;

              $this->image_lib->clear();
              $this->image_lib->initialize($config);
              $this->image_lib->resize();
              #-------------resize image----------#
            }

        }else{
            $data['category_imgae'] = '';
        }
        
        $data['category_name'] = trim($this->input->post('cat_name',TRUE));
        $data['slug'] = trim($this->input->post('slug',TRUE));
        // check that category is  empty or not
        if ($data['slug'] == '' or empty($data['slug'])) {
            $space_exist = preg_match('/\s/', $data['category_name']);
            if ($space_exist > 0) {
                $data['slug'] = str_replace(' ', '-', $data['category_name']);
            }
        } else {
            // Checking that slug is formatted or not
            $space_exist = preg_match('/\s/', $data['slug']);
            if ($space_exist > 0) {
                $data['slug'] = str_replace(' ', '-', $data['slug']);
            }
        }
        if ($this->input->post('menu')) {
            $data['menu'] = 1;
        } else {
            $data['menu'] = 0;
        }

        // making query to check category is exist or not
        $check_cata_exist = $this->category_model->check_category_existance($data);
        // if it is exist already
        if ($check_cata_exist == true) {
            $this->session->set_flashdata('error','Category already exist.');

        }
        elseif ($data['category_name'] == '') {
            $this->session->set_flashdata('error','Please enter Category Name.');

        } else {
           
            $this->category_model->save_category_name($data);
           
            $this->session->set_flashdata('message','Category Saved Successfully.');  
        }
        
        redirect('categories/category/add_category');
    }



    #------------------------------------
    #   update view
    #------------------------------------
    public function update_view($category_id) {
        $this->permission->check_label('category_list')->update()->redirect(); 

        $data['all_categories'] = $this->category_model->all_categories();
        $data['cate_info'] = $this->category_model->get_category_Info($category_id);

        $data['title'] = display('edit_category');
        $data['module'] = "categories"; 
        $data['page']   = "category/_edit_category"; 
        echo Modules::run('template/layout', $data); 


    }
    #-----------------------------------------------
    #   update category
    #-----------------------------------------------    
    public function update_category($category_id) {

        
    $this->permission->check_label('category_list')->update()->redirect();

    if ($_FILES['cate_pic']['name']) {

        $config=array();
        $config['upload_path'] ='uploads/category_img/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['overwrite']     = false;
        $config['max_size']      = 1024;
        $config['remove_spaces'] = true;
        $config['max_filename']   = 10;
        $config['file_ext_tolower'] = true;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('cate_pic')) {
            $error =  $this->upload->display_errors();
            $this->session->set_flashdata('exception',$error);
            redirect('categories/category/update_view/' . $category_id);
        }
        else
        {
         $data1 = $this->upload->data();
         $data['category_imgae'] = $config['upload_path'].$data1['file_name'];
        #------------resize image------------#
          $this->load->library('image_lib');
          $config['image_library'] = 'gd2';
          $config['source_image'] = $config['upload_path'].$data1['file_name'];
          $config['create_thumb'] = FALSE;
          $config['maintain_ratio'] = FALSE;
          $config['width']     = 1350;
          $config['height']   = 350;

          $this->image_lib->clear();
          $this->image_lib->initialize($config);
          $this->image_lib->resize();
          #-------------resize image----------#
        }
    } else{
       $data['category_imgae'] = $this->input->post('pic',TRUE); 
    }

        $data['category_name'] = $this->input->post('category_name',TRUE);
        $data['slug'] = $this->input->post('slug',TRUE);
        $data['parents_id'] = $this->input->post('m_menu',TRUE);

        if ($data['slug'] == '' or empty($data['slug'])) {
            $space_exist = preg_match('/\s/', $data['category_name']);
            if ($space_exist > 0) {
                $data['slug'] = str_replace(' ', '-', $data['category_name']);
            }
        } else {
            $space_exist = preg_match('/\s/', $data['slug']);
            if ($space_exist > 0) {
                $data['slug'] = str_replace(' ', '-', $data['slug']);
            }
        }
        if ($this->input->post('menu')) {
            $data['menu'] = 1;
        } else {
            $data['menu'] = 0;
        }
        if ($data['category_name'] == '') {
            $sdata['exception'] = "Please enter Category Name.";
            $this->session->set_userdata($sdata);
            redirect('categories/category/update_view/' . $category_id);
        } else {

            $cat_info = $this->category_model->get_category_Info($category_id);
            $old_file_name = "data/" . $cat_info->slug . '.xml';
            $new_file_name = "data/" . $data['slug'] . '.xml';
            if (file_exists($old_file_name)) {
                rename($old_file_name, $new_file_name);
            }
            $this->category_model->update_category($category_id, $data);
        }

        $this->session->set_flashdata('message', display('update_message'));
        redirect('categories/category/list_of_categories');
    }



    #--------------------------------
    #   delete category
    #--------------------------------    
    public function delete($category_id) {
        $this->permission->check_label('category_list')->update()->redirect(); 
        $this->category_model->delete_category($category_id);
        $this->session->set_flashdata('message', display('delete_message'));
        redirect('categories/category/list_of_categories');
    }

    #---------------------------------
    #       save category by position
    #---------------------------------    
    public function save_category_positions() {
        $this->permission->check_label('category_list')->update()->redirect();
        
        $this->category_model->update_category_positions();
        $this->session->set_flashdata('message', display('update_message'));  
        redirect("categories/category/list_of_categories");
    }




}