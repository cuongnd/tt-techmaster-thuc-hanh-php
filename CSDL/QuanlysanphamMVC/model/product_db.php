<?php

function get_products(){
        global $db;
        $query = 'select * from product order by product_id';
        $products = $db->query($query);
        return $products;
    }
    function get_products_by_category($category_id){
           global $db;
        $query = "select * from product where category_id =$category_id order by product_id";
        $products = $db->query($query);
        return $products;

    }
    function get_product($product_id)
    {
        global $db;
        $query="select * FROM product WHERE product_id = $product_id";
        $product = $db->query($query);
        $product = $product->fetch();
        return $product;
    }
     function delete_product($product_id){
        global $db;
         $query = "delete from product where product_id=$product_id";
         $db->exec($query);

     }
     function add_product($category_id,$productName,$price,$description){
         global $db;
         $addproduct = "INSERT INTO product(category_id,productName,price,description) VALUES ('$category_id','$productName','$price','$description')";
         $db->exec($addproduct);
     }



?>