<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_activate extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("commissions_model","obj_commissions");
        $this->load->model("invoices_model","obj_invoices");
        $this->load->model("kit_model","obj_kit");
//        $this->load->model("bonus_model","obj_bonus");
    }   
                
    public function index(){  
        
           $this->get_session();
           $params = array(
                        "select" =>"invoices.invoice_id,
                                    invoices.date,
                                    customer.customer_id,
                                    customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    kit.kit_id,
                                    kit.price,
                                    kit.name,
                                    invoices.active",
                "join" => array( 'kit, invoices.kit_id = kit.kit_id',
                                 'customer, invoices.customer_id = customer.customer_id'),
                "where" => "invoices.type = 1 and invoices.status_value = 1",
                "order" => "invoices.invoice_id ASC");
           //GET DATA FROM CUSTOMER
        $obj_invoices = $this->obj_invoices->search($params);
           
           /// PAGINADO
            $modulos ='activaciones'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/activaciones'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_invoices",$obj_invoices);
            $this->tmp_mastercms->render("dashboard/activate/activate_list");
    }
    
    public function active_financy(){
        //ACTIVE CUSTOMER FINANCADO
        if($this->input->is_ajax_request()){ 
                date_default_timezone_set('America/Lima');
                //SELECT CUSTOMER_ID
                $invoice_id = $this->input->post("invoice_id");
                $customer_id = $this->input->post("customer_id");
                $kit_id = $this->input->post("kit_id");
                //GET DATA TODAY
                $today = date('Y-m-j');
                
                if(count($invoice_id) > 0){
                //UPDATE TABLE CUSTOMER ACTIVE = 1    
                    $data = array(
                        'active' => 1,
                        'kit_id' => $kit_id,
                        'date_start' => $today,
                        'financy' => 1,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_customer->update($customer_id,$data);
                    
                 //UPDATE TABLE INVOICE ACTIVE = 2 (PROCESADO)    
                    $data = array(
                        'active' => 2,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_invoices->update($customer_id,$data);   
                }
                echo json_encode($data); 
                exit();
            }
    }
    
    public function active(){
        //ACTIVE CUSTOMER NORMALY
        if($this->input->is_ajax_request()){  
                date_default_timezone_set('America/Lima');
                //SELECT CUSTOMER_ID
                $customer_id = $this->input->post("customer_id");
                $point = $this->input->post("point");
                $parents_id = $this->input->post("parents_id");
                $side = $this->input->post("position");
                $identificador = $this->input->post("identificador");
                //GET SPONSOR ACTIVE
                    $params = array(
                        "select" =>"active,
                                    binaries,
                                    point_calification_left,
                                    point_calification_rigth",
                        "where" => "customer_id = $parents_id and customer.status_value = 1"
                    );
                $obj_customer= $this->obj_customer->get_search_row($params);
                $active = $obj_customer->active;
                $binary = $obj_customer->binaries;
                $point_calification_left = $obj_customer->point_calification_left;
                $point_calification_rigth = $obj_customer->point_calification_rigth;
                
                if($active > 0){
                    //GET BONUS SPONSOR
                    $amount = $this->pay_directo($customer_id,$point,$parents_id);
                    //SEND MESSAGE CONFIRMATION BONUS SPONSOR
                    $this->message_bonus_sponsor($amount,$parents_id,$customer_id);
                    //SET CALIFICATION
                    if($binary != 1){
                        $result = $this->calification($parents_id,$side,$point_calification_left,$point_calification_rigth,$point);
                        //PAY BINARY
                        $this->pay_binario($result,$identificador,$point);
                     }else{
                        //PAY BINARY
                        $result = 0;
                        $this->pay_binario($result,$identificador,$point);
                     }
                }else{
                    //GET AMOUNT BONUS SPONSOR
                    $amount = $this->lost_pay_directo($customer_id,$point,$parents_id);
                    //SEND MESSAGE CONFIRMATION BONUS SPONSOR
                    $this->message_bonus_sponsor_lost($amount,$parents_id,$customer_id);
                    $result = 0;
                    $this->pay_binario($result,$identificador,$point);
                }
                
                //SELECT TODAY
                $today = date('Y-m-j');
                $team_builder = date("Y-m-d", strtotime("+30 days"));
                //UPDATE TABLE CUSTOMER ACTIVE = 1
                    $data = array(
                        'active' => 1,
                        'team_builder_active' => 1,
                        'team_builder' => $team_builder,
                        'date_start' => $today,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_customer->update($customer_id,$data);
                    
                    
                //VERIFY TEAM BUILDER
                $this->get_team_builder($parents_id,$today);  
                //SEND MESSAGE CONFIRMATION ACTIVE
                $this->message_active($customer_id);
                echo json_encode($data); 
                exit();
            }
    }
 
    public function pay_directo($customer_id,$point,$parents_id){
        
                //GET PERCENT FROM BONUS
                $params = array(
                        "select" =>"percent",
                        "where" => "bonus_id = 1 and status_value = 1"
               );
                //GET DATA FROM BONUS
                $obj_bonus= $this->obj_bonus->get_search_row($params);
                $percet = $obj_bonus->percent;
                
                //CALCULE AMOUNT
                $amount = ($point  * $percet) / 100;
                
                //INSERT COMMISSION TABLE
                if(count($customer_id) > 0){
                    $data = array(
                        'customer_id' => $parents_id,
                        'bonus_id' => 1,
                        'name' => "Bono de Patrocinio",
                        'amount' => $amount,
                        'status_value' => 1,
                        'date' => date("Y-m-d H:i:s"),
                        'created_at' => date("Y-m-d H:i:s"),
                        'created_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_commissions->insert($data);
                    
                    //POINT ON POINT TABLE
                    $data = array(
                        'customer_id' => $parents_id,
                        'bonus_id' => 1,
                        'point' => $point,
                        'status_value' => 1,
                        'date' => date("Y-m-d H:i:s"),
                        'created_at' => date("Y-m-d H:i:s"),
                        'created_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_points->insert($data);
                    return $amount;
                }
        }
        
    public function get_session(){          
        if (isset($_SESSION['usercms'])){
            if($_SESSION['usercms']['logged_usercms']=="TRUE" && $_SESSION['usercms']['status']==1){               
                return true;
            }else{
                redirect(site_url().'dashboard');
            }
        }else{
            redirect(site_url().'dashboard');
        }
    }
}
?>