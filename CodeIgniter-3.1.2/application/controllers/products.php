<?php

class Products extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Product');
    }

    public function index(){
        $products = $this->Product->get_all_products();
        $this->load->view('products/product_list.php', array('products' => $products));
    }

    public function add(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', '<em>Name</em>', 'required|trim|min_length[2]|max_length[100]');
        $this->form_validation->set_rules('description', '<em>Description</em>', 'required|trim|min_length[10]|max_length[140]');
        $this->form_validation->set_rules('price', '<em>Price</em>', 'required|trim|decimal');


        if($this->form_validation->run() == FALSE){
            $this->load->view('products/add_product');
        }else{
            $this->session->set_userdata('message', '<p>You have successfully entered a new product!</p>');
            $this->Product->add_product($this->input->post());
            redirect(base_url());
        }
    }
    
    public function show ($product_id){
        $single_record = $this->Product->show_product($product_id);
        $this->load->view('products/single_record', array('single_record' => $single_record));
    }

    public function edit($product_id){
        $single_record = $this->Product->show_product($product_id);
        $this->load->view('products/edit_prod', array('single_record' => $single_record));
    }

    public function update($product_id){
        $this->session->set_userdata('update_success', "<p>You have successfully udpated record $product_id !</p>");
        $this->Product->update_product($this->input->post(), $product_id);
        redirect(base_url() . 'products/edit/' . $product_id);
    }

    public function remove($product_id){
        $this->session->set_userdata('delete_success', "<p>You have successfully deleted record $product_id !</p>");
        $this->session->delete_products($product_id);
        redirect(base_url());
    }
}


?>