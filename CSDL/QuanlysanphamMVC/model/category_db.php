<?php
   function get_categories(){
        global $db;
        $query = 'select * from category order by category_id';
        $result = $db->query($query);
        return $result;
    }
    function get_categry_name($id){
       global $db;
       $query ="select * from category WHERE category_id = $id";
       $category = $db->query($query)->fetch();
       return $category['categoryName'];

    }

?>