<?php

namespace application\models;

use application\core\Model;

class Catalog extends Model
{

    public function getAllProducts()
    {
        $result = $this->db->getAll("SELECT * FROM products");
        return $result;
    }

    public function getProduct($name=null,$limit=null)
    {
        $result = $this->db->getAll("SELECT product_id as product_id,products.name as product_name,description,price,img,categories.category_id as category_id,categories.name as category_name,parent_id 
        FROM categories INNER JOIN products on categories.category_id = products.category_id");
        return $result;
    }

    public function join()
    {
        $result = $this->db->getAll("SELECT * FROM products INNER JOIN categories on products.category_id = categories.category_id");
        return $result;
    }

}