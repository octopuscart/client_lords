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



        $baselink = 'http://' . $_SERVER['SERVER_NAME'];

        $this->db->select("country, date");
        $this->db->select("country, hotel, address, days");
//        $this->db->where('status', 'active');
        $this->db->group_by("country");
        $this->db->order_by("DATE(date)<DATE(NOW()) asc");
        $this->db->order_by("IF(MONTH(date) < MONTH(NOW()), MONTH(date) + 12, MONTH(date)),
 DAY(date) desc");

        $query = $this->db->get('appointment_entry');
        $appointment_country = $query->result_array();



        $cdate = date("Y-m-d");
//test date
//$cdate = "2019-04-22"; 


        $yourip = json_decode(file_get_contents("https://api.ipify.org?format=json&callback=DisplayIP"));

        $ip = $yourip->ip;

        $locationdata = json_decode(file_get_contents("http://ip-api.com/json/" . $ip));

        $countryc = $locationdata->country;

        $data["country"] = $countryc;

        $this->db->select("country, hotel, address, days, city_state");
        $this->db->where('date=', $cdate);
        $this->db->order_by("date asc");
// $this->db->group_by("country");
        $this->db->limit(2);
        $query = $this->db->get('appointment_entry');

        $appointment_current_country1 = $query->result_array();

        $appointment_current_country = [];
        $appointment_current_country2 = [];

        foreach ($appointment_current_country1 as $key => $value) {
            $countrydb = $value['country'];


            $this->db->select("date");
            $this->db->where('country=', $countrydb);
            $this->db->where('date>=', $cdate);
            $this->db->order_by("date asc");
            $query = $this->db->get('appointment_entry');
            $appointment_country_date = $query->result_array();


            $d_first = reset($appointment_country_date);
            $d_last = end($appointment_country_date);

            $value['first_date'] = $d_first['date'];
            $value['last_date'] = $d_last['date'];

            array_push($appointment_current_country2, $value);

            if ($value['country'] == $countryc) {
                array_push($appointment_current_country, $value);
            } else {
                
            }
        }
        if (count($appointment_current_country)) {
            $appointment_current_country = $appointment_current_country;
        } else {
            $appointment_current_country = $appointment_current_country2;
        }

        $applicable_class = count($appointment_current_country) == 1 ? 'onecountry' : 'twocoutry';
        $data['applicable_class'] = $applicable_class;

//        $appointment_current_country = count($appointment_current_country) > 0 ? $appointment_current_country[0] : false;

        $data['appointment_current_country'] = $appointment_current_country;

        $countrylist = array();

        $countryimage = array(
            "Belgium" => "belgium.jpg",
            "Australia" => "australia.jpg",
            "U.S.A" => "usa.jpg",
            "Canada" => "canada.jpg",
            "Hong Kong" => "canada.jpg",
            "New Zealand" => "newzealand.jpg",
            "Netherlands" => "netherlands.jpg",
            "Germany" => "germany.jpg",
            "Switzerland" => "sweetzerland.jpg",
            "Norway" => "norway.jpg"
        );
        foreach ($appointment_country as $key => $value) {
            $countrylist[$value['country']] = $countryimage[$value['country']];
        }
        unset($countrylist['Hong Kong']);

        $data['countryimages'] = $countryimage;

        $data['countrylist'] = $countrylist;

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
        $checkcode = REPORT_MODE;
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
                $this->email->from(email_bcc, $sendername);
                $this->email->to(email_bcc);
                $this->email->cc("jason@lordscustomtailors.com");
                $this->email->bcc(email_bcc);
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



                if ($checkcode) {
                    $htmlsmessage = $this->load->view('Email/web_enquiry', $web_enquiry, true);
                    $this->email->message($htmlsmessage);
                    $this->email->print_debugger();
                    $send = $this->email->send();
                    if ($send) {
                        redirect('Shop/contactus');
                        echo json_encode("send");
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        echo json_encode($error);
                    }
                } else {
                    echo $this->load->view('Email/web_enquiry', $web_enquiry, true);
                }
            }

            // redirect('Shop/contactus');
        }
        $this->load->view('pages/contactus');
    }

    public function aboutus() {
        $this->load->view('pages/aboutus');
    }

    public function faqs() {
        $this->load->view('pages/faqs');
    }

    public function clients() {
        $this->load->view('pages/clients');
    }

    public function catalogue() {




        $this->load->view('pages/catalogue');
    }

    public function templateAppointment() {
        $usasappointment = $this->Product_model->AppointmentDataAll();
        $data['appointment'] = $usasappointment;
        $this->load->view('template', $data);
    }

    public function appointment() {


        $data['timeslot'] = [];

        $appointmentdetailslocal = [array(
        "type" => "local",
        "id" => "au0_app",
        "country" => "Hong Kong",
        "city_state" => "Kowloon,  T. S. T.",
        "hotel" => "SHOWROOM",
        "address" => "2/F, Unit D, Far East Mansion,<br/>
5-6 Middle Road, Tsim Sha Tsui, <br/>
Kowloon, Hong Kong",
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




        $usasappointment = $this->Product_model->AppointmentDataAll();

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
            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from(email_sender, $sendername);
                $this->email->reply_to(email_bcc, $sendername);
                $this->email->to($this->input->post('email'));
                $this->email->cc("jason@lordscustomtailors.com");
                $this->email->bcc(email_bcc);
                $subjectt = email_sender_name . " Appointment : " . $appointment['select_date'] . " (" . $appointment['select_time'] . ")";
                $orderlog = array(
                    'log_type' => 'Appointment',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'Appointment User',
                    'log_detail' => $sendernameeq . "  " . $subjectt
                );
                $this->db->insert('system_log', $orderlog);

                $subject = $subjectt;
                $this->email->subject($subject);

                $appointment['appointment'] = $appointment;


                $htmlsmessage = $this->load->view('Email/appointment', $appointment, true);
                if (REPORT_MODE == 1) {
                    $this->email->message($htmlsmessage);
                    $this->email->print_debugger();
                    $send = $this->email->send();
                    if ($send) {
                        redirect('Shop/appointment');
                        echo json_encode("send");
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        echo json_encode($error);
                    }
                } else {
                    echo $htmlsmessage;
                }
            }
        }
        $this->load->view('pages/appointment', $data);
    }

    public function lookbook() {

        $this->db->order_by("display_index");
        $query = $this->db->get('lookbook_category');
        $lookbook_category = $query->result_array();
        $data['lookbook_category'] = $lookbook_category;
        $styleArray = array();
        foreach ($lookbook_category as $key => $value) {
            $lookbookid = $value['id'];
            $this->db->where("category_id", $lookbookid);
            $query = $this->db->get('lookbook');
            $styleArray[$value['id']] = array("category" => $value, "data" => $query->result_array());
        }
        $data['stylearray'] = $styleArray;
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

    function accessories($actype) {
        $data = [];
        $accessoriesdata = array(
            "all" => array(),
            "cufflinks" => array(),
            "ties" => array(),
        );
        for ($i = 1; $i <= 4; $i++) {
            $prd = "LCFL$i";
            $img = "c$i.jpg";
            $accessoriesdata['cufflinks'][$prd] = array(
                "title" => $prd,
                "image" => $img,
                "description" => "",
                "price" => 90,
            );
            $accessoriesdata['all'][$prd] = array(
                "title" => $prd,
                "image" => $img,
                "description" => "",
                "price" => 90,
            );

            $prd2 = "LTIE$i";
            $img2 = "t$i.jpg";
            $accessoriesdata['ties'][$prd2] = array(
                "title" => $prd2,
                "image" => $img2,
                "description" => "",
                "price" => 100,
            );
            $accessoriesdata['all'][$prd2] = array(
                "title" => $prd2,
                "image" => $img2,
                "description" => "",
                "price" => 100,
            );
        }
        $hasdata = "1";
        if (isset($accessoriesdata[$actype])) {
            $data['products'] = $accessoriesdata[$actype];
        } else {
            $hasdata = "0";
            $data['products'] = array();
        }


        $this->load->view('Product/productAccessories', $data);
    }

}
