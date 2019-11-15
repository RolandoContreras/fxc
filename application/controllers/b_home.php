<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_home extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("unilevel_model","obj_unilevel");
        $this->load->model("ranges_model","obj_ranges");
    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        //GET CUSTOMER_ID
        $customer_id = $_SESSION['customer']['customer_id'];
        //GET DATA CUSTOMER
        $params = array(
                        "select" =>"customer.username,
                                    customer.active,
                                    kit.name as kit,
                                    kit.kit_id,
                                    kit.img as kit_img,
                                    ranges.range_id,
                                    ranges.img,
                                    ranges.name",
                        "where" => "customer.customer_id = $customer_id and customer.status_value = 1",
                        "join" => array('kit, customer.kit_id = kit.kit_id',
                                        'ranges, customer.range_id = ranges.range_id'),
                        );
        $obj_customer = $this->obj_customer->get_search_row($params);
        
        //GET NEXT RANGE
        $range_actually =  $obj_customer->range_id;
        if($range_actually != ""){
            //GET NEXT RANGE
            $params = array(
                        "select" =>"ranges.range_id,
                                    ranges.name,
                                    ranges.point_grupal,
                                    ranges.img",
                        "where" => "range_id > $range_actually",
                        "order" => "range_id ASC",
                        );
            $obj_next_range = $this->obj_ranges->get_search_row($params);
        }else{
            $obj_next_range =  (object) array("img"=>"1star.png",
                                    "range_id"=>"1",
                                    "point_grupal"=>"3000",
                                    "name"=>"STAR1",);
        }
        
        //GET TOTAL REFERRED
        $params = array(
                        "select" =>"count(*) as total_referred",
                        "where" => "unilevel.parend_id = $customer_id and unilevel.status_value = 1"
                        );
        $obj_total_referidos = $this->obj_unilevel->get_search_row($params);
        
        $this->tmp_backoffice->set("obj_next_range",$obj_next_range);
        $this->tmp_backoffice->set("obj_total_referidos",$obj_total_referidos);
        $this->tmp_backoffice->set("obj_customer",$obj_customer);
        $this->tmp_backoffice->render("backoffice/b_home");
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