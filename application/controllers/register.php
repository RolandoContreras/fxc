<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    function __construct() { 
        parent::__construct();
        $this->load->model("customer_model", "obj_customer");
        $this->load->model("paises_model", "obj_paises");
        $this->load->model("unilevel_model", "obj_unilevel");
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            //SELECT URL IF ISSET USERNAME
            $url = explode("/", uri_string());
            if (isset($url[1])) {
                $username = $url[1];
                //Select params
                $params = array(
                    "select" => "customer_id,first_name,last_name, username",
                    "where" => "username = '$username'");
                $obj_paises['obj_customer'] = $this->obj_customer->get_search_row($params);
            }
            //Select params
            $params = array(
                "select" => "id, nombre",
                "where" => "id_idioma = 7");
            $obj_paises['obj_paises'] = $this->obj_paises->search($params);
            /// VIEW
            $this->load->view("register", $obj_paises);
		
	}
        
        public function validate_username() {
            if ($this->input->is_ajax_request()) {
                //SELECT ID FROM CUSTOMER
            $username = str_to_minuscula(trim($this->input->post('username')));
            $param_customer = array(
                "select" => "customer_id",
                "where" => "username = '$username'");
            $customer = count($this->obj_customer->get_search_row($param_customer));
            if ($customer > 0) {
                $data['message'] = "true";
                $data['print'] = "No esta disponible! <i class='fa fa-times-circle-o' aria-hidden='true'></i>";
            } else {
                $data['message'] = "false";
                $data['print'] = "Usuario Disponible! <i class='fa fa-check-square-o' aria-hidden='true'></i>";
            }
            echo json_encode($data);
            }
        }
        
        public function validate_username_register($username) {
                //SELECT ID FROM CUSTOMER
            $param_customer = array(
                "select" => "customer_id",
                "where" => "username = '$username'");
            $customer = count($this->obj_customer->get_search_row($param_customer));
            if ($customer > 0) {
                return 1;
            } else {
                return 0;
            }
        }
        
        public function validate()
	{
            if ($this->input->is_ajax_request()) {
            //SET TIMEZONE AMERICA
            date_default_timezone_set('America/Lima');
            //get data
            $username = $this->input->post("username");
            //VALIDATE USERNAME
            $result = $this->validate_username_register($username);
            
            if($result == 1){
                $data['status'] = "username";
            }else{
                $parent_id = $this->input->post("parent_id");
                $name = $this->input->post("name");
                $last_name = $this->input->post("last_name");
                $email = $this->input->post("email");
                $dni = $this->input->post("dni");
                $phone = $this->input->post("phone");
                $pass = $this->input->post("pass");
                $address = $this->input->post("address");
                $country = $this->input->post("country");
            
                //INSERT TABLE CUSTOMER
                $data = array(
                        'first_name' => $name,
                        'last_name' => $last_name,
                        'username' => $username,
                        'email' => $email,
                        'password' => $pass,
                        'address' => $address,
                        'phone' => $phone,
                        'dni' => $dni,
                        'country' => $country,
                        'date_start' => date("Y-m-d H:i:s"),
                        'active' => 0,
                        'status_value' => 1,
                        'created_at' => date("Y-m-d H:i:s"),
                    );
                    $customer_id = $this->obj_customer->insert($data);
                    
                    
                //CREATE UNILEVEL
                $data_invoice = array(
                        'customer_id' => $customer_id,
                        'parend_id' => $parent_id,
                        'status_value' => 1,
                        'created_at' => date("Y-m-d H:i:s"),
                    );
                    $this->obj_unilevel->insert($data_invoice);
                    $data['status'] = "true";
            }
            //CREAR NUEVA SECION 
            $data_customer_session['customer_id'] = $customer_id;
            $data_customer_session['name'] = $name.' '.$last_name;
            $data_customer_session['username'] = $username;
            $data_customer_session['email'] = $email;
            $data_customer_session['active'] = 0;
            $data_customer_session['logged_customer'] = "TRUE";
            $data_customer_session['status'] = 1;
            $_SESSION['customer'] = $data_customer_session; 
            $data['status'] = "success";
            echo json_encode($data);
            }
	}
        
        public function crear_registro() {
            
                //SET TIMEZONE AMERICA
                date_default_timezone_set('America/Lima');
                //GET DATA STRING
                $data = $_POST['dataString']; 
                //EXPLODE BY DEMILITER
                $string =  explode('&', $data);
                
                //SET $VARIBLE
                $username = strtolower($string[0]);
                $customer_id = $string[14];
                $pierna_customer = $string[15];
                $point_left = $string[16];
                $point_rigth = $string[17];
                $identificator_param = $string[18];
                
                //validate username
                $val = $this->validate_username_register($username);
                if($val == 1){
                    echo '<div class="alert alert-danger" style="text-align: center">Usuario no disponible.</div>';
                }else{
                    //SET $VARIBLE
                    $name = $string[1];
                    $password = $string[2];
                    $last_name = $string[3];
                    $address = $string[4];
                    $phone = $string[5];
                    $dni = $string[6];
                    $email = $string[7];
                    $dia = $string[8];
                    $mes = $string[9];
                    $ano = $string[10];
                    $pais = $string[11];
                    $region = $string[12];
                    $city = $string[13];
                    
                    //PUT CUSTOMER_ID LIKE PAREND
                    $parent_id = $customer_id;
                    //SELECT PIERNA
                    if($pierna_customer == 3){
                        switch($point_left){
                            case $point_left < $point_rigth:
                                $last_id = 'z';
                                //GET TO VERIFY UN ATUTHENTICATOR STRING
                                $verify = 'd';
                                $pierna_customer = 1;
                                break;
                            case $point_left > $point_rigth:
                                $last_id = 'd';
                                //GET TO VERIFY UN ATUTHENTICATOR STRING
                                $verify = 'z';
                                $pierna_customer = 2;
                                break;
                            case $point_left == $point_rigth:
                                $last_id = 'z';
                                //GET TO VERIFY UN ATUTHENTICATOR STRING
                                $verify = 'd';
                                $pierna_customer = 1;
                                break;
                        }
                    }elseif ($pierna_customer == 1) {
                            $last_id = 'z';
                            //GET TO VERIFY UN ATUTHENTICATOR STRING
                            $verify = 'd';
                    }elseif ($pierna_customer == 2){
                            $last_id = 'd';
                            //GET TO VERIFY UN ATUTHENTICATOR STRING
                            $verify = 'z';
                    }
                    
                    //SELECT NEW IDENTIFICATOR
                    $identificador_explo = explode(',', $identificator_param);
                    $last_number = intval(preg_replace('/[^0-9]+/', '', $identificador_explo[0]), 10); 
                    $last_number = $last_number + 1;
                    $new_identification = $last_number.$last_id.",".$identificator_param;
                    
                    $params = array("select" => "identificador,customer_id,first_name,created_at",
                        "where" => "identificador like '%$identificator_param' and position = $pierna_customer",
                        "order" => "customer.created_at ASC");
                    $obj_identificator = $this->obj_customer->search($params);
                    
                    foreach ($obj_identificator as $key => $value){
                        
                        if($value->identificador == "$new_identification"){
                            //VERIDY NEW IDENTIFICATOR
                            $new_identification = explode(',', $value->identificador);
                            $last_number = intval(preg_replace('/[^0-9]+/', '', $new_identification[0]), 10); 
                            $last_number = $last_number + 1;
                            $new_identification = $last_number.$last_id.",".$value->identificador;
                            
                        }
                    }
                    
                    //create date to DB
                    $birth_date = "$ano-$mes-$dia";
                    $data = array(
                        'parents_id' => $customer_id,
                        'franchise_id' => 6,
                        'username' => $username,
                        'email' => $email,
                        'password' => $password,
                        'position' => $pierna_customer,
                        'position_temporal' => 1,
                        'first_name' => $name,
                        'last_name' => $last_name,
                        'address' => $address,
                        'phone' => $phone,
                        'identificador' => $new_identification,
                        'city' => $city,
                        'dni' => $dni,
                        'birth_date' => $birth_date,
                        'country' => $pais,
                        'region' => $region,
                        'active' => 0,
                        'status_value' => 1,
                        'created_at' => date("Y-m-d H:i:s"),
                    );
                    $customer_id = $this->obj_customer->insert($data);
                    //INSERT MESSAGE WELCOME
                    $this->messages_welcome($name,$last_name,$customer_id,$username,$password);
                    echo '<div class="alert alert-success" style="text-align: center">Registro creado correctamente.</div>';
                    
                    //SEND MESSAGES
                    $images = site_url()."static/page_front/images/bienvenido2.jpg";
                    $img_path = "<img src='$images' alt='Bienvenido'/>";
                    $mensaje = wordwrap("<html><body><h1>Bienvenido a 3T Club</h1><p>Bienvenido ahora eres parte de la revolución 3T Club estamos muy contentos de que hayas tomado la mejor decisión en este tiempo.</p><p>Estamos para apoyarte en todo lo que necesites. Te dejamos tus datos de ingreso.</p><h4> >>>>>>> USUARIO: $username</h4><h4> >>>>>>> PASSWORD: $password</h4><p>$img_path</p></body></html>", 70, "\n", true);
                    $titulo = "Bienvenido a 3T Club";
                    $headers = "MIME-Version: 1.0\r\n"; 
                    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                    $headers .= "From: 3T Company: Travel - Training - Trade < noreplay@my3t.club >\r\n";
                    $bool = mail("$email",$titulo,$mensaje,$headers);
        }
      }
        
}
