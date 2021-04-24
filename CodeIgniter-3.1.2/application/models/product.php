<?php

class Product extends CI_Model{
    public function get_all_products(){
        return $this->db->query('SELECT * FROM products')->result_array();
    }

    public function add_product($data){
        $this->db->query('INSERT INTO products (name, description, price, created_at, updated_at) VALUES (?,?,?,NOW(),NOW())', array($data['name'], $data['description'], $data['price']));
    }

    public function show_product($product_id){
        return $this->db->query('SELECT * FROM products WHERE id = {$product_id}')->row_array();
    }

    public function update_product($data, $product_id){
        $this->db->query("UPDATE products SET name = '{$data['name']}', description = '{$data['description']}', updated_at = NOW() WHERE id = $product_id");
    }

    public function delete_product($product_id){
        $this->db->query("DELETE FROM products WHERE id = $product_id");
    }
}



?>