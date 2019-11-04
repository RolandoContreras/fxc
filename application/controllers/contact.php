<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    public function __construct() {
        parent::__construct();     
        $this->load->model('comments_model','obj_comments');
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
		$this->load->view('contact');
	}
        public function send_messages(){
         //GET DATA BY POST
         if($this->input->is_ajax_request()){   
                $name = $this->input->post("name");
                $email = $this->input->post("email");
                $message = $this->input->post("message");

                //SAVE MESSAGES BD
                //status_value 0 means (not read)
                        $data = array(
                            'name' => $name,
                            'email' => $email,
                            'comment' => $message,
                            'date_comment' => date("Y-m-d H:i:s"),
                            'active' => 1,
                            'status_value' => 1,
                        );
                        $this->obj_comments->insert($data);

                //SEND MESSAGES
                $mensaje = wordwrap("<html><body>"
                        . "<h1>Hay una pregunta por responder</h1><br/>"
                        . "<h3>Datos del Solicitante</h3><br/>"
                        . "Nombre: <em>$name</em><br/>"
                        . "Telefono: <em>$phone</em><br/>"
                        . "Email: <em>$email</em><br/>"
                        . "<p>$comments<p></body></html>", 70, "\n", true);
                $titulo = $subject;
                $headers = "MIME-Version: 1.0\r\n"; 
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                $headers .= "From: Red NFN: Red de Consumo Inteligente < noreplay@newfuturenetwork.com >\r\n";
                $bool = mail("contacto@newfuturenetwork.com",$titulo,$mensaje,$headers); 
                $data = true;
                echo json_encode($data);            
                exit();
            }
    } 
}
