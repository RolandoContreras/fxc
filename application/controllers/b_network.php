<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_network extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("unilevel_model","obj_unilevel");
        $this->load->model("customer_model","obj_customer");
    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        //GET CUSTOMER ACTUALLY
        $customer_id = $_SESSION['customer']['customer_id'];
        //GET REFERIDOS INFORMATION
        $params = array(
                        "select" =>"customer.customer_id,
                                    customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.email,
                                    customer.kit_id,
                                    customer.phone,
                                    customer.created_at,
                                    customer.date_start,
                                    customer.active",
                        "where" => "unilevel.parend_id = $customer_id and unilevel.status_value = 1",
                        "join" => array('customer, customer.customer_id = unilevel.customer_id'),
                        "order" => "unilevel.unilevel_id DESC",
                        );
        $obj_referidos = $this->obj_unilevel->search($params);
        
        
        //GET PLAN INFORMATION
        $params = array("select" =>"count(*) as total_membership,
                                    (SELECT count(*) FROM unilevel JOIN customer ON customer.customer_id = unilevel.customer_id WHERE unilevel.parend_id = $customer_id and customer.kit_id = 2 and customer.status_value = 1) as total_inicio,
                                    (SELECT count(*) FROM unilevel JOIN customer ON customer.customer_id = unilevel.customer_id WHERE unilevel.parend_id = $customer_id and customer.kit_id = 3 and customer.status_value = 1) as total_apertura,
                                    (SELECT count(*) FROM unilevel JOIN customer ON customer.customer_id = unilevel.customer_id WHERE unilevel.parend_id = $customer_id and customer.kit_id = 4 and customer.status_value = 1) as total_elite,
                                    (SELECT count(*) FROM unilevel JOIN customer ON customer.customer_id = unilevel.customer_id WHERE unilevel.parend_id = $customer_id and customer.kit_id = 5 and customer.status_value = 1) as total_premium",
                        "where" => "unilevel.parend_id = $customer_id and customer.kit_id = 1 and customer.status_value = 1",
                                    "join" => array('customer, customer.customer_id = unilevel.customer_id')
                        );
        $obj_total = $this->obj_unilevel->get_search_row($params);
        //GET PRICE CURRENCY
        $this->tmp_backoffice->set("obj_referidos",$obj_referidos);
        $this->tmp_backoffice->set("obj_total",$obj_total);
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


    
