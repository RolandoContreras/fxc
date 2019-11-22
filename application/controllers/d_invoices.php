<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_invoices extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("invoices_model","obj_invoices");
    }   
                
    public function index(){  
            //GER SESSION   
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
            $modulos ='facturas'; 
            $seccion = 'Lista';
            $link_modulo =  site_url().'dashboard/'.$modulos; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_invoices",$obj_invoices);
            $this->tmp_mastercms->render("dashboard/invoices/invoices_list");
    }
    
    public function load($invoice_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        
        if ($bonus_id != ""){
            /// PARAM FOR SELECT 
            $params = array(
                        "select" =>"*",
                         "where" => "invoice_id = $invoice_id",
            ); 
            $obj_invoices  = $this->obj_invoices->get_search_row($params); 
            //RENDER
            $this->tmp_mastercms->set("obj_invoices",$obj_invoices);
          }
      
            $modulos ='bonos'; 
            $seccion = 'Formulario';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 

            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->render("dashboard/invoices/invoices_form");    
    }
    
    public function validate(){
        
        //GET CUSTOMER_ID
        $bonus_id = $this->input->post("bonus_id");
        $name =  $this->input->post('name');
        $percent =  $this->input->post('percent');
        $status_value =  $this->input->post('status_value');
        
        //UPDATE DATA
        $data = array(
                'bonus_id' => $bonus_id,
                'name' => $name,
                'percent' => $percent,
                'status_value' => $status_value,  
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );          
            //SAVE DATA IN TABLE    
            $this->obj_bonus->update($bonus_id, $data);
        redirect(site_url()."dashboard/bonos");
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