<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_profile extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        /// VISTA
        $customer_id = $_SESSION['customer']['customer_id'];
        //GET DATA PRICE CRIPTOCURRENCY
        $params = array(
                        "select" =>"username,
                                    email,
                                    first_name,
                                    last_name,
                                    dni,
                                    active",
                        "where" => "customer_id = $customer_id and status_value = 1",
                        );

        $obj_customer = $this->obj_customer->get_search_row($params);
        //GET PRICE CURRENCY
        $this->tmp_backoffice->set("obj_customer",$obj_customer);
        $this->tmp_backoffice->render("backoffice/b_profile");
    }
    
    public function get_messages_informative(){
            $params = array(
                            "select" =>"",
                             "where" => "active = 1 and status_value = 1 and support = 0",
                            "order" => "position ASC");
                
           $messages_informative = $this->obj_messages->search($params); 
            return $messages_informative;
    }
    
    public function update_password(){
             if($this->input->is_ajax_request()){   
                //SELECT ID FROM CUSTOMER
               $pass = trim($this->input->post('pass'));
               $new_pass = $this->input->post('new_pass');
               $customer_id = $_SESSION['customer']['customer_id'];
               
               $param_customer = array(
                                "select" => "password",
                                "where" => "customer_id = '$customer_id' and password = '$pass'");
                $customer = count($this->obj_customer->get_search_row($param_customer));
                if($customer > 0){
                    //UPDATE DATA EN CUSTOMER TABLE
                    $data = array(
                        'password' => $new_pass,
                        'updated_by' => $customer_id,
                        'updated_at' => date("Y-m-d H:i:s")
                    ); 
                    $this->obj_customer->update($customer_id,$data);
                    $data['status'] = "true";
                }else{
                    $data['status'] = "false";
                }
               echo json_encode($data); 
            }
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


    
