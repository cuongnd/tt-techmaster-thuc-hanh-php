<?php

?>
<h1>add product</h1>
<div id="main">
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="add_product"/>
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
    <p><a href="index.php?action=list_product">view product list</a></p>
</div>
<?php include '../view/footer.php';?>
