<?php
$page_name = "Testimonials";
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
                    <div class="span3 offset1">
                        <h3><a href="testimonial.php?t=arlyn_gayon">Ms. Arlyn Gayon</a></h3>
                        <p>
                            <strong>35 years old</strong>.
                            <br />Brgy. Cupang, Antipolo City.
                        </p>
                    </div>
                    <div class="span3 offset1">
                        <h3><a name="testimonial.php?t=vicky_de_lunas">Ms. Vicky de Lunas</a></h3>
                        <p>
                            <strong>40 years old</strong>.
                            <br />Binangonan, Rizal
                        </p>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
<?php require_once("footer.php");?>