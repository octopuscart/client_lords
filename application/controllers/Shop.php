<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        $product_home_slider_bottom = $this->Product_model->product_home_slider_bottom();
        $categories = $this->Product_model->productListCategories(0);
        $data["categories"] = $categories;
        $data["product_home_slider_bottom"] = $product_home_slider_bottom;
        $customarray = [1, 2];
        $this->db->where_in('id', $customarray);
        $query = $this->db->get('custome_items');
        $customeitem = $query->result();

        $data['shirtcustome'] = $customeitem[0];
        $data['suitcustome'] = $customeitem[1];

        $query = $this->db->get('sliders');
        $data['sliders'] = $query->result();

        $this->load->view('home', $data);
    }

    public function contactus() {
        if (isset($_POST['sendmessage'])) {
            $web_enquiry = array(
                'last_name' => $this->input->post('last_name'),
                'first_name' => $this->input->post('first_name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message'),
                'datetime' => date("Y-m-d H:i:s a"),
            );

            $this->db->insert('web_enquiry', $web_enquiry);

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('last_name') . " " . $this->input->post('first_name');
            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from($this->input->post('email'), $sendername);
                $this->email->to(email_bcc);
//                $this->email->bcc(email_bcc);
                $subjectt = $this->input->post('subject');
                $orderlog = array(
                    'log_type' => 'Enquiry',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'ENQ',
                    'log_detail' => "Enquiry from website - " . $this->input->post('subject')
                );
                $this->db->insert('system_log', $orderlog);

                $subject = "Enquiry from website - " . $this->input->post('subject');
                $this->email->subject($subject);

                $web_enquiry['web_enquiry'] = $web_enquiry;

                $htmlsmessage = $this->load->view('Email/web_enquiry', $web_enquiry, true);
                $this->email->message($htmlsmessage);

                $this->email->print_debugger();
//                $send = $this->email->send();
//                if ($send) {
//                    echo json_encode("send");
//                } else {
//                    $error = $this->email->print_debugger(array('headers'));
//                    echo json_encode($error);
//                }
            }

            redirect('Shop/contactus');
        }
        $this->load->view('pages/contactus');
    }

    public function aboutus() {
        $this->load->view('pages/aboutus');
    }

    public function faq() {
        $this->load->view('pages/faq');
    }

    public function catalogue() {
        $this->load->view('pages/catalogue');
    }

    public function appointment() {
       

        $data['timeslot'] = [];

        $appointmentdetailslocal = [array(
        "type" => "local",
        "id" => "au0_app",
        "country" => "Hong Kong",
        "city_state" => "Kowloon,  T. S. T.",
        "hotel" => "SHOWROOM",
        "address" => "Unit D, 2/F, Far East Mansion,<br/> 5-6 Middle Road, Tsim Sha Tsui, <br/>Kowloon, Hong Kong",
        "days" => "",
        "start_date" => "",
        "end_date" => "",
        "contact_no" => " +(852) 2723 9716",
        "dates" => [
            array("date" => date("Y-m-d"), "timing1" => "09:00 AM", "timing2" => "09:00 PM"),
            array("date" => "Sun", "timing1" => "09:00 AM", "timing2" => "07:00 PM"),
        ]
            ),];

        $data['appointmentdetailslocal'] = $appointmentdetailslocal;




        $usasappointment = $this->Product_model->AppointmentDataByCountry("U.S.A");
    
        $data['appointmentdatausa'] = $usasappointment;
        $data['appointmentdata'] = [];


        if (isset($_POST['submit'])) {
            $appointment = array(
                "country" => $this->input->post('country'),
                "city_state" => $this->input->post('city_state'),
                "hotel" => $this->input->post('hotel'),
                "address" => $this->input->post('address'),
                'last_name' => $this->input->post('last_name'),
                'first_name' => $this->input->post('first_name'),
                'email' => $this->input->post('email'),
                'contact_no' => $this->input->post('contact_no'),
                'select_time' => $this->input->post('select_time'),
                'select_date' => $this->input->post('select_date'),
                'no_of_person' => $this->input->post('no_of_person'),
                'referral' => $this->input->post('referral'),
                'datetime' => date("Y-m-d H:i:s a"),
                'appointment_type' => "Local",
            );

            $this->db->insert('appointment_list', $appointment);
            $appointment['contact_no2'] = $this->input->post('contact_no2');


            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('last_name') . " " . $this->input->post('first_name');
//            if ($this->input->post('email')) {
//                $this->email->set_newline("\r\n");
//                $this->email->from(email_sender, $sendername);
//                $this->email->reply_to(email_bcc, $sendername);
//                $this->email->to($this->input->post('email'));
//                $this->email->bcc(email_bcc);
//                $subjectt = email_sender_name . " Appointment : " . $appointment['select_date'] . " (" . $appointment['select_time'] . ")";
//                $orderlog = array(
//                    'log_type' => 'Appointment',
//                    'log_datetime' => date('Y-m-d H:i:s'),
//                    'user_id' => 'Appointment User',
//                    'log_detail' => $sendernameeq . "  " . $subjectt
//                );
//                $this->db->insert('system_log', $orderlog);
//
//                $subject = $subjectt;
//                $this->email->subject($subject);
//
//                $appointment['appointment'] = $appointment;
//
//
//                $htmlsmessage = $this->load->view('Email/appointment', $appointment, true);
//                if (REPORT_MODE == 1) {
//                    $this->email->message($htmlsmessage);
//                    $this->email->print_debugger();
////                    $send = $this->email->send();
////                    if ($send) {
////                        echo json_encode("send");
////                    } else {
////                        $error = $this->email->print_debugger(array('headers'));
////                        echo json_encode($error);
////                    }
//                } else {
//                    echo $htmlsmessage;
//                }
//            }

            redirect('Shop/appointment');
        }
        $this->load->view('pages/appointment', $data);
    }

    public function lookbook() {
        $suitsimagelist = [31, 32, 33, 34, 35, 36, 37, 38, 39, 40,
            1, 2, 3, 4, 5, 6, 7, 15, 16, 17, 18, 19, 20, 21, 22, 23,
            24, 25, 26, 27, 28, 29
        ];
        $stylearray = array();
        foreach ($suitsimagelist as $key => $value) {
            $temp = array(
                "style_no" => "10$value",
                "title" => "",
                "short_description" => "",
                "image" => "suits/$value.jpg",
            );
            array_push($stylearray, $temp);
        }
        $data['stylearray'] = $stylearray;
        $this->load->view('pages/lookbook', $data);
    }

    public function stylingTips() {
        $query = $this->db->get('style_tips');
        $data['stylebook'] = $query->result_array();
        $this->load->view('pages/stylebook', $data);
    }

    public function stylingTipsTag() {
        $tag = $this->input->get('tag');
        $this->db->where("tag like '%$tag%'");
        $query = $this->db->get('style_tips');

        $tagblock = $query->result_array();

        $data['stylebook'] = $tagblock;

        $this->load->view('pages/stylebook', $data);
    }

    function styleTipsDetails($style_index, $title) {

        if ($this->session_user) {
            $checklogin = true;
        } else {
            $checklogin = false;
        }

        if (isset($_POST['submit'])) {
            $blogdata = array(
                "title" => $this->input->post('title'),
                "description" => $this->input->post('description')
            );
            $this->db->set($blogdata);
            $this->db->where('id', $style_index); //set column_name and value in which row need to update
            $this->db->update('style_tips');
            redirect("styleTips/" . $style_index . "/" . $title);
        }


        $data['checklogin'] = $checklogin;


        $this->db->where('id', $style_index);
        $query = $this->db->get('style_tips');

        $styleobj = $query->row();
        $data['styleobj'] = $styleobj;

        $configuration = $this->config->load('seo_config');

//$seotitle_o = $this->config->item("seo_title");

        $seotitle1 = "Lord's Custom Tailors | " . $styleobj->title;
        $seodescription = $styleobj->description;

        $this->config->set_item('seo_title', $seotitle1);
        $this->config->set_item('seo_desc', $seodescription);


        $this->db->from('style_tips');
        $this->db->order_by("id", "desc");
        $this->db->limit(5);
        $query = $this->db->get();
        $stylebook = $query->result_array();


        $data['stylebook'] = $stylebook;

        $this->db->from('style_tips');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        $stylebook1 = $query->result_array();

        $tagarray1 = array();
        foreach ($stylebook1 as $key => $value) {
            $tags = $value['tag'];
            $tagarray = explode(", ", $tags);
            foreach ($tagarray as $key1 => $value1) {
                $tagarray1[$value1] = [];
            }
        }

        $data['tagsarray'] = $tagarray1;



        $this->load->view('pages/stylebookdeails', $data);
    }

}
