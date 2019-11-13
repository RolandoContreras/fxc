<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_network extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("unilevel_model","obj_unilevel");
    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        //GET CUSTOMER ACTUALLY
        $customer_id = $_SESSION['customer']['customer_id'];
        //GET PLAN INFORMATION
        $params = array(
                        "select" =>"customer_id,
                                    active",
                        "where" => "parend_id = $customer_id and status_value = 1",
                        "order" => "unilevel_id DESC",
                        );
        $obj_referidos = $this->obj_unilevel->search($params);
        
        //GET PRICE CURRENCY
        $this->tmp_backoffice->set("obj_referidos",$obj_referidos);
        $this->tmp_backoffice->render("backoffice/b_referred");
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


    
