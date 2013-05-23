<?php
require_once("utils.php");

$product_code = (isset($_GET['p'])) ? $_GET['p'] : null;
if (is_valid_product($product_code)) {
  $product = get_product($product_code);
  $page_name = $product['name'];
} else {
  $page_name = null;
}

require_once("header.php");
?>
<div class="content">
    <div class="container">
        <article class="article">
            <div class="row bottom-space">
                <div class="span12">
                    <div class="page-header">
                        <h1><?php echo $page_name?> <small><?php echo $page_name?></small></h1>
                    </div>
                    <div class="span12 center-align">
                        <img src="http://placehold.it/800x300" class="thumbnail product-snap">            
                    </div>
                </div>
                <div class="row">
                    <div class="span10 offset1">
                        <?php echo $product['desc']; ?>
                        <div class="span8 offset1">
                            <h3>Fetures of <?php echo $product['name']?></h3>
                            <ul class="features">
                            <li><i class="icon-ok "></i>Health Benefit</li>
                            <li><i class="icon-ok "></i>Health Benefit</li>
                            <li><i class="icon-ok "></i>Health Benefit</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span10 offset1">
                        <hr>
                        <div class="span3">
                        <p>
                        Ready to start the innovation?
                        </p>
                        <a class="btn btn-large btn-block" href="#">Buy now</a>
                        </div>
                        <div class="span3">
                        <p>
                        Got confused?
                        </p>
                        <a class="btn btn-large btn-block" href="contact_us.html">Contact us</a>
                        </div>
                        <div class="span3">
                        <p>
                        Check frequently asked question
                        </p>
                        <a class="btn btn-large btn-block" href="faq.html">FAQ</a>
                        </div>              
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
<?php require_once("footer.php"); ?>