<?php

Class MY_Controller extends CI_Controller
{
    public $data = array();

    function __construct()
    {
        parent::__construct();
        $new_url = $this->uri->segment(1);
//        var_dump($new_url);
        switch ($new_url) {
            case 'admin' : {
//                pre('abc');
                $this->_check_login();
                $this->data['admin'] = $this->session->userdata('admin');
                break;
            }

            default: {
                $this->load->model('contact_model');
                $this->load->model('product_model');
                $this->load->model('agency_model');
                $this->load->model('content_model');
                $contact = $this->contact_model->get_info(1);
                $this->data['contact'] = $contact;
                $products = $this->product_model->get_list(array('order' => array('id', 'asc')));
                $this->data['products'] = $products;
                $this->data['content'] = $this->content_model->get_info(1);
                $this->data['agencies'] = $this->agency_model->get_list(array('order' => array('id', 'asc')));
//                pre($this->data['content']);
            }
        }
    }

    private function _check_login()
    {
        $controller = $this->uri->rsegment('1');
        $controller = strtolower($controller);

        $login = $this->session->userdata('login');
        //neu ma chua dang nhap,ma truy cap 1 controller khac login
        if (!$login && $controller != 'login') {
            redirect(base_url('admin/login'));
        }
        //neu ma admin da dang nhap thi khong cho phep vao trang login nua.
        if ($login && $controller == 'login') {
            redirect(base_url('admin/product'));
        }
    }
}