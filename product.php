<?php
$page_name = "Product ";
require_once("utils.php");

$product_code = (isset($_GET['p'])) ? $_GET['p'] : null;
if (is_valid_product($product_code)) {
    $product = get_product($product_code);
    $page_name = $product['name'];
    require_once("header.php");
    $filename = "{$product['file']}.php";
    if (file_exists($filename)) {
        require_once($filename);
    } else {
        load_404();
    }    
    require_once("footer.php");
} else {
    load_404();
}
?>