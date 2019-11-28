<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_home extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("videos_model","obj_videos");
        $this->load->model("category_model","obj_category");
        
        
        
    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        //GET CUSTOMER_ID
        $customer_id = $_SESSION['customer']['customer_id'];
        
        //GET DATA FOREX VIDEOS
        $params = array(
                        "select" =>"author,
                                    name,
                                    summary,
                                    video,
                                    date",
                "where" => "category_id = 1 and active = 1",
                "order" => "video_id DESC",
                "limit" => "6");
        //GET DATA FROM CUSTOMER
        $obj_videos_fx= $this->obj_videos->search($params);
        
        //GET DATA MARKETING VIDEOS
        $params = array(
                        "select" =>"author,
                                    name,
                                    summary,
                                    video,
                                    date",
                "where" => "category_id = 2 and active = 1",
                "order" => "video_id DESC",
                "limit" => "6");
        //GET DATA FROM CUSTOMER
        $obj_videos_mkt= $this->obj_videos->search($params);
        
        $this->tmp_course->set("obj_videos_fx",$obj_videos_fx);
        $this->tmp_course->set("obj_videos_mkt",$obj_videos_mkt);
        $this->tmp_course->render("course/c_home");
    }
    
    public function get_session(){          
        if (isset($_SESSION['customer'])){
            if($_SESSION['customer']['logged_customer']=="TRUE" && $_SESSION['customer']['status']=='1'){               
                return true;
            }else{
                redirect(site_url().'home');
            }
        }else{
            redirect(site_url().'home');
        }
    }
}