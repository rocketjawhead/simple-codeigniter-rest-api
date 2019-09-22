<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Blog extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('M_blog');
    }
    
    //get blog
    function index_get() {
        $blog = $this->M_blog->get_blog();
        $this->response($blog, 200);
    }
    
    
    //add blog
    function addblog_post() 
    {
        
        $title_blog=$this->post('title_blog');
        $desc_blog=$this->post('desc_blog');
        $imageurl=$this->post('imageurl');
        $create_date=date ('Y-m-d h:i:s');
        
        $postdata = $this->M_blog->add_blog($title_blog,$desc_blog,$imageurl,$create_date);
        if($postdata['ResponCode'] == '00')
        {
            $this->response($postdata, 200);
        }else{
            $this->response($postdata);
        }
    }

    //edit blog
    function editblog_post() 
    {
        $id=$this->post('id');
        $title_blog=$this->post('title_blog');
        $desc_blog=$this->post('desc_blog');
        $imageurl=$this->post('imageurl');
        $update_date=date ('Y-m-d h:i:s');
        
        $postdata = $this->M_blog->edit_blog($id,$title_blog,$desc_blog,$imageurl,$update_date);
        if($postdata['ResponCode'] == '00')
        {
            $this->response($postdata, 200);
        }else{
            $this->response($postdata);
        }
    }


    function deleteblog_post() 
    {
        $id=$this->post('id');
        
        $postdata = $this->M_blog->delete_blog($id);
        if($postdata['ResponCode'] == '00')
        {
            $this->response($postdata, 200);
        }else{
            $this->response($postdata);
        }
    }
    
}
?>