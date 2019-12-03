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
            $username = str_to_minuscula($this->input->post("username"));
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
                        'kit_id' => 0,
                        'range_id' => 0,
                        'username' => $username,
                        'email' => $email,
                        'password' => $pass,
                        'address' => $address,
                        'phone' => $phone,
                        'dni' => $dni,
                        'country' => $country,
                        'active' => 0,
                        'status_value' => 1,
                        'created_at' => date("Y-m-d H:i:s"),
                    );
                    $customer_id = $this->obj_customer->insert($data);
                    
                //GET IDENT    
                $param_customer = array(
                            "select" => "ident",
                            "where" => "customer_id = $parent_id");
               $customer = $this->obj_unilevel->get_search_row($param_customer);    
               $ident =  $customer->ident;
               //CRETE NEW IDENT 
               $new_ident = $ident.",$parent_id";
               
                //CREATE UNILEVEL
                $data_invoice = array(
                        'customer_id' => $customer_id,
                        'parend_id' => $parent_id,
                        'ident' => $new_ident,
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
//            $this->message($username, $pass, $name);
            echo json_encode($data);
            }
	}
        
        public function message($username,$pass, $name){    
                 $img = site_url().'static/page_front/';           
                $mensaje = wordwrap("<html>
                    
                            <div bgcolor='#E9E9E9' style='background:#fff;margin:0;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>
  <table style='background-color:#fff;border-collapse:collapse;margin:0;padding:0' width='100%' height='100%' cellspacing='0' cellpadding='0' border='0'
    align='center'>
    <tbody>
      <tr>
        <td valign='top' align='center'>
          <table style='border-collapse:collapse;margin:0;padding:0;max-width:600px' width='100%' height='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
            <tbody>
              <tr>
                <td style='padding:39px 30px 31px;display:block;background:#fafafa'> <img src='https://ci6.googleusercontent.com/proxy/H9Pvr9hFRVPkeAyKBTaCMoMo9kKEggjDuyZDyAU6Labjd1iCY1bUx6RkVI-cOYjeetKKGx8uHI6JxiZdl-VpDPuO9LytkZuvJm_D3jWkW3DoLLsuFgcd4-PtbYNFzSW34iPOdzqslE8=s0-d-e1-ft#https://s3.amazonaws.com/cpanel-resources/assets/hostinger_cobranded_email_header.png'
                    alt='partner-logo' style='display:inline-block;padding-right:12px' class='CToWUd' height='35'> </td>
              </tr>
              <tr>
                <td style='padding:0 30px;display:block;background:#fafafa'>
                  <p style='padding:32px 32px 0;color:#333333;background:#fff;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;line-height:14px;margin:0;font-size:14px;border-radius:5px 5px 0 0'
                    align='left'>Hi principal,</p>
                </td>
              </tr>
              <tr>
                <td style='padding:0 30px;display:block;background:#fafafa'>
                  <table style='width:100%;border-collapse:collapse;padding:0' width='100%' height='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
                    <tbody>
                      <tr>
                        <td style='padding:0;background-color:#fff;border-radius:0 0 5px 5px;padding:32px'>
                          <p style='margin:0;padding-bottom:20px;color:#333333;line-height:22px;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>
                          Your professional email address for <a href='http://mibcacapital.com' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://mibcacapital.com&amp;source=gmail&amp;ust=1575431368630000&amp;usg=AFQjCNE2bxZM6aRU9Ckhj6hvz9ZXHzwzyA'>mibcacapital.com</a>                            is successfully set up. Please find below the login credentials for your email. </p>
                          <p style='margin:0 0 24px;padding:16px;border-radius:5px;padding-bottom:20px;background:#f7f7f7;color:#333333;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>
                          <span style='display:block;padding-bottom:8px'><span style='width:101px;display:inline-block'>Email address: </span><strong><a href='mailto:principal@mibcacapital.com' target='_blank'>principal@mibcacapital.com</a></strong></span>
                            <span style='display:block'><span style='width:101px;display:inline-block'>Password: </span><strong>@principal</strong></span>
                          </p> <a href='https://flockmail.hostinger.com?email_account=principal@mibcacapital.com&amp;imap_host=imap-internal.flockmail.com&amp;return_url=&amp;clearSession=true'
                            style='background:#2d6ced;color:#ffffff;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px;display:inline-block;padding:12px 17px;text-decoration:none;border-radius:5px'
                            target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://flockmail.hostinger.com?email_account%3Dprincipal@mibcacapital.com%26imap_host%3Dimap-internal.flockmail.com%26return_url%3D%26clearSession%3Dtrue&amp;source=gmail&amp;ust=1575431368631000&amp;usg=AFQjCNG7LT-8yshRv-lcF7E67rA5yDb28g'>Login to webmail</a>                          </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td style='padding:30px 30px 0;display:block;background:#fafafa'>
                  <table style='width:100%;border-collapse:collapse;padding:0' width='100%' height='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
                    <tbody>
                      <tr>
                        <td>
                          <table style='display:inline-block;min-width:48%;max-width:100%;width:calc((400px - 100%)*400);border-collapse:collapse;padding:0'
                            cellspacing='0' cellpadding='0' border='0'>
                            <tbody>
                              <tr>
                                <td style='padding:0 0px 30px 30px'>
                                  <p style='padding-bottom:16px;margin:0;line-height:20px;color:#333333;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>Instantly access email on<br>your desktop app</p> <a href='https://s3.amazonaws.com/cpanel-resources/static/download-page/index.html?launch_desktop=true&amp;via_email=true'
                                    style='display:inline-block;border:1px solid #2d6ced;color:#2d6ced;padding:8px 10px;border-radius:5px;text-decoration:none;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'
                                    target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://s3.amazonaws.com/cpanel-resources/static/download-page/index.html?launch_desktop%3Dtrue%26via_email%3Dtrue&amp;source=gmail&amp;ust=1575431368631000&amp;usg=AFQjCNGqFXZoRfPhDoMxlnMGqfZ7EWetbQ'><strong>Download now</strong></a>                                  </td>
                              </tr>
                            </tbody>
                          </table>
                          <table style='display:inline-block;min-width:48%;max-width:100%;width:calc((400px - 100%)*400);border-collapse:collapse;padding:0'
                            cellspacing='0' cellpadding='0' border='0'>
                            <tbody>
                              <tr>
                                <td> <img src='https://ci6.googleusercontent.com/proxy/lsrsUjsYgI7VsDBdAyErZhGyhjtjTayVZUeDb18EtHk6JBzO75RAU-FttBnhdoniBPWcgJsxH47oRaMAioX9-dJeZA=s0-d-e1-ft#https://static.flock.co/flockmail/desktop@2x.png'
                                    alt='desktop' style='width:100%' class='CToWUd a6T' tabindex='0'>
                                  <div class='a6S' dir='ltr' style='opacity: 0.01; left: 1283.17px; top: 813px;'>
                                    <div id=':z3' class='T-I J-J5-Ji aQv T-I-ax7 L3 a5q' title='Descargar' role='button' tabindex='0' aria-label='Descargar el archivo adjunto'
                                      data-tooltip-class='a1V'>
                                      <div class='aSK J-J5-Ji aYr'></div>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td style='display:block;text-align:center;padding:30px 30px 0'>
                          <hr style='margin:0;border:0;height:1px;background-color:#dedede'> </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
                <td style='padding:45px 30px 0;display:block;background:#fafafa'>
                  <table style='width:100%;border-collapse:collapse;padding:0;text-align:center' width='100%' height='100%' cellspacing='0' cellpadding='0'
                    border='0' align='center'>
                    <tbody>
                      <tr>
                        <td>
                          <table style='display:inline-block;min-width:48%;max-width:100%;width:calc((400px - 100%)*400);border-collapse:collapse;padding:0'
                            cellspacing='0' cellpadding='0' border='0'>
                            <tbody>
                              <tr>
                                <td style='padding:0 0 30px 19px;box-sizing:border-box;text-align:left'>
                                  <p style='padding-bottom:16px;margin:0;line-height:20px;color:#333333;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>Access email on the go with<br>our iOS and Android Apps</p>
                                  <a href='https://itunes.apple.com/in/app/flock-mail/id1435996267?mt=8'
                                    style='display:inline-block;width:108px;padding:0 8px 10px 0' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://itunes.apple.com/in/app/flock-mail/id1435996267?mt%3D8&amp;source=gmail&amp;ust=1575431368631000&amp;usg=AFQjCNHkpRcFsVRAV-MsZqej9zfLB56H_w'><img src='https://ci4.googleusercontent.com/proxy/873y_S020yjr_If8Y32-vllzmtAlxcAqBkykxnNJhweBD0Sy9KDUiK_Ch9qhRCUiOnfby7VqCsXmudlmbPiGlcMmjWUj=s0-d-e1-ft#https://static.flock.co/flockmail/app-store@2x.png'
                                      alt='app-store' class='CToWUd' width='100%'></a>
                                  <a href='https://play.google.com/store/apps/details?id=com.flockmail'
                                    style='display:inline-block;width:108px;padding:0px' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://play.google.com/store/apps/details?id%3Dcom.flockmail&amp;source=gmail&amp;ust=1575431368631000&amp;usg=AFQjCNF_QFSPl0XkeTefIwOA6-6G8cxIqg'><img src='https://ci4.googleusercontent.com/proxy/bNVfjDzSF4iQZyW6hPlQudCOpNJjjxfZX64xLNhXJJkGpED5tgDU3UzdIOmUblGgHi1-dwndooMHRdN6je9Zr3GJb_yICJI=s0-d-e1-ft#https://static.flock.co/flockmail/google-play@2x.png'
                                      alt='google-play' class='CToWUd' width='100%'></a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        
                </td>
              </tr>
              <tr>
                <td style='padding:30px 30px 0;display:block;background:#fafafa'>
                  <table style='width:100%;border-collapse:collapse;padding:0;text-align:center' width='100%' height='100%' cellspacing='0' cellpadding='0'
                    border='0' align='center'>
                    <tbody>
                      <tr>
                        <td style='max-width:290px;display:inline-block;padding:0 19px 30px;box-sizing:border-box;text-align:left'>
                          <p style='margin:0;text-align:center;line-height:20px;color:#888888;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:12px'>
                          visit us at <a href='https://www.flockmail.com/mail' style='color:#2d6ced;text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://www.flockmail.com/mail&amp;source=gmail&amp;ust=1575431368631000&amp;usg=AFQjCNFn66V--kkAWV7Wp45KkTGVpHUh3g'>www.flockmail.com/mail</a>                            </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table><img src='https://ci6.googleusercontent.com/proxy/osUVNtIhJR1xPfbB8pzIPxcQHRd4CwTRfmMaO9kSTjyvjTyTvcCPOgL-j246mIg_kR-9vnBV-TO8hvCjWinRlSC2PrYa8eA-Ajy7CY5ol2Uas-BvzDHf15pmzJdvJLmxSYfMyMfLiycEcUwLvU3ESjPH_pWX6DK0KkA-vzQ0VNAZ_RSR12Yd2spQIh_IxtpUKx3Dj575Kqj5JiViZn08MFnpM1R66sF_daadI8_ewWiTLCRYXQtZNDy2pur7_YVmjcjRg5Hcj8uNFabCGS3fwDgmr47MR8kR7IPf0o_i4Rc995KXIqsqo3Hkl8_41mByK1gllJ6v3CUmGYXb2boRpfxKU7r5d8Z6I57vfbl43PbiMpG5rYArgVEsuTIRYsSJdjpIjcBUr7MUcjTeTkv6wA=s0-d-e1-ft#http://sg-links.flock.com/wf/open?upn=vYOFcFcRTc0-2FH00KMdzDBdvchXJqbAPxV0O0fJ8UGk6birMlCgjlCuDcjwQbQ9XQekPpVqVI3x1u6N-2F-2FkJqwgpj3UuQiqhPZ1hbtJmqT1d17KCPVz41J2yto3aTUCZLnCqeT3yggRGi3bqfKOOXJIOJijvdRHEfxjwIfO3TZ5teMn0YL5yCM2Sr0GhAMJPz-2FN4EmcybHUKPhKTRNJg51Ec7p7A9hEDt49tvabdboUb8-3D'
    alt='' style='height:1px!important;width:1px!important;border-width:0!important;margin-top:0!important;margin-bottom:0!important;margin-right:0!important;margin-left:0!important;padding-top:0!important;padding-bottom:0!important;padding-right:0!important;padding-left:0!important'
    class='CToWUd' width='1' height='1' border='0'></div>
                            .</html>", 70, "\n", true);
                    $titulo = "Bienvenido - [BCA CAPITAL]";
                    $headers = "MIME-Version: 1.0\r\n"; 
                    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                    $headers .= "From: BCA CAPITAL <contacto@mibcacapital.com>\r\n";
                    $bool = mail("$obj_email",$titulo,$mensaje,$headers);
                    
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
