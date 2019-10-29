<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_finance extends CI_Controller {
     function __construct() {
        parent::__construct();
//        $this->load->model("customer_model","obj_customer");
//        $this->load->model("currency_model","obj_currency");
//        $this->load->model("messages_model","obj_messages");
//        $this->load->model("sell_model","obj_sell");
//        $this->load->model("news_model","obj_news");
    }

    public function index()
    {
        //GET SESION ACTUALY
//        $this->get_session();
        /// VISTA
//        $customer_id = $_SESSION['customer']['customer_id'];
        //GET DATE
        //GET MESSAGE INFORMATIVE
//        $messages_informative = $this->get_messages_informative();
        //GET NEWS
//        $obj_news = $this->get_news();
        
        //GET DATA PRICE CRIPTOCURRENCY
//        $params = array(
//                        "select" =>"currency_id,
//                                    name,
//                                    img,
//                                    active",
//                        "where" => "status_value = 1",
//                        );
//
//        $obj_currency = $this->obj_currency->search($params);

        //GET PRICE CURRENCY
        
        
            $this->tmp_backoffice->render("backoffice/b_finance");
    }
    
    public function get_messages_informative(){
            $params = array(
                            "select" =>"",
                             "where" => "active = 1 and status_value = 1 and support = 0",
                            "order" => "position ASC");
                
           $messages_informative = $this->obj_messages->search($params); 
            return $messages_informative;
    }
    
    public function get_news(){
            $params = array(
                            "select" =>"news_id,
                                        img",
                             "where" => "active = 1 and status_value = 1");
                
           $news = $this->obj_news->search($params); 
           return $news;
    }
    
    public function btc_price(){
             $url =  "https://api.coinmarketcap.com/v1/ticker/bitcoin";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }
    
    public function eth_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/ethereum";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }
    
    public function bch_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/bitcoin-cash";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }     
    
    public function dash_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/dash/";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }
    
    public function ripple_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/ripple";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }
    
    public function litecoin_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/litecoin";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }
    
    public function cardano_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/cardano";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }
    
    public function tron_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/tron";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }
    
    public function monero_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/monero";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }
    
    public function omisego_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/omisego";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }
    
    public function zcash_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/zcash";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }
    
    public function siacoin_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/siacoin";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }
    
    public function verge_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/verge";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }
    
    public function nxt_price(){
             $url = "https://api.coinmarketcap.com/v1/ticker/nxt";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json[0]['price_usd'];
             return $price;
    }
    
    public function validate_usd() {
            if ($this->input->is_ajax_request()) {
                //SELECT ID FROM CUSTOMER
            $value = trim($this->input->post('value'));
            $price = trim($this->input->post('price'));
            
            //MULTIPLE BY THE VALUE
            $new_data =  $value / $price;
            echo $new_data;
            }
    }
        
    public function validate_btc() {
            if ($this->input->is_ajax_request()) {
                //SELECT ID FROM CUSTOMER
            $value = trim($this->input->post('value'));
            $price = trim($this->input->post('price'));
            //MULTIPLE BY THE VALUE
            $new_data =  $value * $price;
            echo json_encode($new_data);
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


    
