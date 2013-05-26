<?php
$page_name = "Testimonial";
require_once("utils.php");

$testimony_code = (isset($_GET['t'])) ? $_GET['t'] : null;
if ($testimony = get_testimony($testimony_code)) {
    $page_name .= $testimony['name'];
    require_once("header.php");
    require_once("{$testimony['file']}.php");
    require_once("footer.php");
} else {
    load_404();
}
?>