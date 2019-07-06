<?php
    include 'config.php';
    $query="select * from category ORDER BY category_id";
    $categories=$db->query($query);
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet" type="text/css" href="../css.css">
    </head>
    <body>
    <div class="content">
        <form id="form" action="addproduct.php" method="post">
            <div>
                <label>Loại điện thoại</label>
                <select name="category_id">
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo $category['category_id'] ?>">
                            <?php echo $category['categoryName'] ?>
                        </option>
                    <?php endforeach;?>
                </select>
            </div>
            <div>
                <label>Tên sản phẩm</label>
                <input type="text" name="producteName">
            </div>
            <div>
                <label>Giá sản phẩm</label>
                <input type="text" name="price">
            </div>
            <div>
                <label>Mô tả </label>
                <input type="text" name="Description">
            </div>
            <div id="button">
                <input type="submit" name="them" value="Thêm">
            </div>
        </form>
    </div>

    </body>
    </html>
<?php
        if($_SERVER['REQUEST_METHOD']=='post') {
            $category_id = $_POST['category_id'];
            $productName = $_POST['producteName'];
            $price = $_POST['price'];
            $description = $_POST['Description'];
        }

    if (isset($_POST['them'])) {
        include 'config.php';
        if (empty($category_id) || empty($productName) || empty($price) || empty($description)) {
            echo "cần nhập đầy đủ thông tin";
        } else {
            $addproduct = "INSERT INTO product(category_id,productName,price,description) VALUES ('$category_id','$productName','$price','$description')";
            $db->exec($addproduct);
            echo "thêm thành công";
        }
    }

?>
