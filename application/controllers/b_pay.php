<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_pay extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("commissions_model","obj_commissions");
        $this->load->model("pay_commission_model","obj_pay_commission");
        $this->load->model("pay_model","obj_pay");
        
    }

    public function index()
    {
        //VERIFIRY GET SESSION    
         $this->get_session();
        //GET CUSTOMER_ID $_SESSION   
        $customer_id = $_SESSION['customer']['customer_id'];
        date_default_timezone_set('America/Lima');
        $params = array(
                        "select" =>"pay.date,
                                    pay.amount,
                                    pay.pay_id,
                                    pay.descount,
                                    pay.active,
                                    customer.btc_address",
               "join" => array('customer, pay.customer_id = customer.customer_id'),
                "where" => "pay.customer_id = $customer_id and pay.status_value = 1",
                "order" => "pay.date DESC",
                "limit" => "40");
        //GET DATA FROM CUSTOMER
        $obj_pay= $this->obj_pay->search($params);
        
        //GET BALANCE DISPONIBLE
//        $obj_balance_disponible = $this->balance($customer_id);
        $this->tmp_backoffice->set("obj_pay",$obj_pay);
        $this->tmp_backoffice->render("backoffice/b_pay");
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


    
