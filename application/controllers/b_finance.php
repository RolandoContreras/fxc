<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_finance extends CI_Controller {
     function __construct() {
        parent::__construct();
          $this->load->model("customer_model","obj_customer");
          $this->load->model("commissions_model","obj_commissions");

    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        /// VISTA
        $customer_id = $_SESSION['customer']['customer_id'];
        
        
        //GET PLAN INFORMATION
        $params = array("select" =>"sum(amount) as total_maching,
                                    (SELECT sum(amount) FROM commissions WHERE customer_id = $customer_id and bonus_id = 1 and status_value = 1) as total_direct,
                                    (SELECT sum(amount) FROM commissions WHERE customer_id = $customer_id and bonus_id = 2 and status_value = 1) as total_unilevel,
                                    (SELECT sum(amount) FROM commissions WHERE customer_id = $customer_id and status_value = 1) as total",
                        "where" => "customer_id = $customer_id and bonus_id = 3 and status_value = 1",
                                    );
        $obj_total = $this->obj_commissions->get_search_row($params);
        
        //GET DATA COMISION
                $params = array(
                        "select" =>"commissions.commissions_id,
                                    commissions.amount,
                                    commissions.date,
                                    customer.username,
                                    commissions.status_value,
                                    bonus.name as bonus",
                "join" => array( 'bonus, commissions.bonus_id = bonus.bonus_id',
                                 'sell, commissions.sell_id = sell.sell_id',
                                 'invoices, sell.invoice_id = invoices.invoice_id',
                                 'customer, invoices.customer_id = customer.customer_id'),
                "where" => "commissions.customer_id = $customer_id and commissions.status_value = 1",
                "order" => "commissions.commissions_id DESC",
                "limit" => "100");
           //GET DATA FROM CUSTOMER
        $obj_commissions = $this->obj_commissions->search($params);

        //GET PRICE CURRENCY
        $this->tmp_backoffice->set("obj_commissions",$obj_commissions);
        $this->tmp_backoffice->set("obj_total",$obj_total);
        $this->tmp_backoffice->render("backoffice/b_history");
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


    
