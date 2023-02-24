<?php
    class Catalog extends CI_Model 
    {
        //get all rows from table
        function fetch_products_home()
        {
            $rows = $this->db->query("SELECT products.id, products.name, products.price, images.url 
                FROM products LEFT JOIN images ON products.id = images.id WHERE images.sequence = 1 
                ORDER BY products.sold DESC LIMIT 8")->result_array();
            return $rows;
        }
        //get rows from table that satisfies the parameters
    }
?>