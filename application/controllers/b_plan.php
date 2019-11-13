<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_plan extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("kit_model","obj_kit");
    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        //GET PLAN INFORMATION
        $params = array(
                        "select" =>"kit_id,
                                    name,
                                    price,
                                    point,
                                    description,
                                    img,
                                    active",
                        "where" => "status_value = 1",
                        "order" => "kit_id ASC",
                        );
        $obj_kit = $this->obj_kit->search($params);
        
        //GET PRICE CURRENCY
        $this->tmp_backoffice->set("obj_kit",$obj_kit);
        $this->tmp_backoffice->render("backoffice/b_plan");
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


    
