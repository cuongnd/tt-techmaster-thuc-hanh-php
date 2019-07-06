<?php
require '../../quanlysanpham/config.php';
require '../model/category_db.php';
require '../model/product_db.php';
if (isset($_POST['action'])){
    $action=$_POST['action'];
}else if (isset($_GET['action'])){
    $action=$_GET['action'];
}else{
    $action='list_products';
}
if ($action=='list_products'){
    $category_id=1;
    if (isset($_GET['category_id'])){
    $category_id=$_GET['category_id'];
    }
    $category_name = get_categry_name($category_id);
    $categories = get_categories();
    $products = get_products_by_category($category_id);
    include 'product_list.php';
}else if ($action == 'delete_product'){
//    $category_id=$_GET['category_id'];
    //$product_id = $_GET['id'];
    delete_product($_GET['id']);
    //header("Location:.?action=list_products");
    header("Location:?index.php");
}else if($action=='show_add_form'){
    $categories = get_categories();
    include 'product_add.php';
}else if($action=='add_product'){
    $category_id = $_POST['category_id'];
    $productName = $_POST['producteName'];
    $price = $_POST['price'];
    $description = $_POST['Description'];
    if (empty($category_id) || empty($productName) || empty($price) || empty($description)) {
        echo "cần nhập đầy đủ thông tin";
    } else {
        add_product($category_id,$productName,$price,$description);
        echo "thêm thành công";
        header("Location: .?category_id=$category_id");
    }
}

?>