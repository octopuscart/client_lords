<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('User_model');
        $this->load->library('session');
        $session_user = $this->session->userdata('logged_in');
        if ($session_user) {
            $this->user_id = $session_user['login_id'];
        } else {
            $this->user_id = 0;
        }
        $this->checklogin = $this->session->userdata('logged_in');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        redirect('/');
    }

    public function test() {
        setlocale(LC_MONETARY, "en_US");
        echo money_format("%.2n", $number);
    }

    public function orderConfirmation($order_key) {

        $order_details = $this->Product_model->getOrderDetails($order_key, 'key');

        $status = $order_details['order_status'][0]->status;
        
        if ($status == "Order Confirmed") {
            redirect("Order/orderdetailsguest/$order_key");
        }

        $file_newname = "";
        $this->db->where('active', 'yes');
        $query = $this->db->get('payment_barcode');
        $paymentbarcode = $query->row();
        $order_details['paymentbarcode'] = $paymentbarcode;
        $order_id = $order_details['order_data']->id;
        if ($order_details) {
            if (isset($_POST['confirm'])) {
                $order_status_data = array(
                    'c_date' => date('Y-m-d'),
                    'c_time' => date('H:i:s'),
                    'order_id' => $order_id,
                    'status' => "Order Confirmed",
                    'user_id' => "Guest",
                    'remark' => "Order Confirmed By Customer,  Waiting For Payment",
                );
                $this->db->insert('user_order_status', $order_status_data);
                
                $orderlog = array(
                    'log_type' => "Order Confirmed",
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => "",
                    'order_id' => $order_id,
                    'log_detail' => "Order Confirmed By Customer,  Waiting For Payment",
                );
                $this->db->insert('system_log', $orderlog);
                
                
                redirect("Order/orderdetailsguest/$order_key");
            }
            
            if (isset($_POST['cancel'])) {
                $order_status_data = array(
                    'c_date' => date('Y-m-d'),
                    'c_time' => date('H:i:s'),
                    'order_id' => $order_id,
                    'status' => "Order Cancelled",
                    'user_id' => "Guest",
                    'remark' => $this->input->post('reason'),
                );
                
                
                
                $this->db->insert('user_order_status', $order_status_data);
                
                $orderlog = array(
                    'log_type' => "Order Cancelled",
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => "",
                    'order_id' => $order_id,
                    'log_detail' => $this->input->post('reason'),
                );
                $this->db->insert('system_log', $orderlog);
                
                
                redirect("Order/orderdetailsguest/$order_key");
            }
            
            
            try {
                $order_id = $order_details['order_data']->id;
            } catch (customException $e) {
                
            }
        } else {
            //redirect('/');
        }
        $this->load->view('Order/orderdetails_confirmation', $order_details);
    }

    //orders details
    public function orderdetails($order_key) {

        if ($this->user_id == 0) {
            redirect('/');
        }
        $order_details = $this->Product_model->getOrderDetails($order_key, 'key');
        $this->db->order_by('id', 'desc');
        $this->db->where('order_id', $order_details['order_data']->id);
        $query = $this->db->get('vendor_order');
        $vendor_order = $query->result();


        $file_newname = "";
        $this->db->where('active', 'yes');
        $query = $this->db->get('payment_barcode');
        $paymentbarcode = $query->row();
        $order_details['paymentbarcode'] = $paymentbarcode;



        $order_id = $order_details['order_data']->id;
        if ($order_details) {

            try {
                $order_id = $order_details['order_data']->id;
                // $this->Product_model->order_mail($order_id);
                //redirect("Order/orderdetails/$order_key");
            } catch (customException $e) {
                //display custom message
                // redirect("Order/orderdetails/$order_key");
            }
        } else {
            redirect('/');
        }
        $this->load->view('Order/orderdetails', $order_details);
    }

    public function orderdetailsguest($order_key) {

        $order_details = $this->Product_model->getOrderDetails($order_key, 'key');

        $file_newname = "";
        $this->db->where('active', 'yes');
        $query = $this->db->get('payment_barcode');
        $paymentbarcode = $query->row();
        $order_details['paymentbarcode'] = $paymentbarcode;



        $order_id = $order_details['order_data']->id;


        if ($order_details) {

            try {
                $order_id = $order_details['order_data']->id;
                // $this->Product_model->order_mail($order_id);
                //redirect("Order/orderdetails/$order_key");
            } catch (customException $e) {
                //display custom message
                // redirect("Order/orderdetails/$order_key");
            }
        } else {
            redirect("Order/orderdetailsguest/$order_key");
        }
        $this->load->view('Order/orderdetails', $order_details);
    }

}

?>
