<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Catalogs extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model("Catalog");
        }
        public function index()
        {
            $header_data = array('page_title' => "Home");
            $this->load->view('partials/header', $header_data);
            $products = array('products' => $this->Catalog->fetch_products_home());
            $this->load->view('catalogs/index',$products);
            $this->load->view('partials/footer');
        }
        public function products()
        {
            $header_data = array('page_title' => "Products");
            $this->load->view('partials/header', $header_data);
            //$this->Dashboard->generate_pagination(1);
            $this->load->view('catalogs/catalogs');
            $this->load->view('partials/footer');
        }
    }
?>