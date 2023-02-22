<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Dashboards extends CI_Controller 
    {
        public function orders($page=1)
        {
            $user_data['user_id'] = $this->session->userdata('user_id');
            if(empty($user_data['user_id']))
            {
                redirect("../users/login");
            }
            var_dump($user_data['user_id']);
            $view_data = array( 'page_title' => 'Orders');
            $this->load->view('partials/header_admin', $view_data);
            $this->load->view('dashboards/orders');
            $this->load->view('partials/footer');
        }
    }
?>