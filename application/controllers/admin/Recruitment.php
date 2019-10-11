<?php
Class Recruitment extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('recruitment_model');
    }

    function index()
    {
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        if($this->input->post('btnUpdateRecruitment')){
            $content = $this->input->post('txtContent');
            $data_submit = array(
                'content' => $content,
            );
            if($this->recruitment_model->update(1, $data_submit)){
                $this->session->set_flashdata('message', 'Chỉnh sửa thành công!');
            }
            else{
                $this->session->set_flashdata('message', 'Có lỗi xảy ra, vui lòng thử lại!');
            }
        }
        $recruitment = $this->recruitment_model->get_info(1);
        $this->data['recruitment'] = $recruitment;
        $this->data['temp'] = 'admin/tuyendung/index';
        $this->load->view('admin/layout', $this->data);
    }
}