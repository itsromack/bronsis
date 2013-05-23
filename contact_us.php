<?php
$page_name = "Contact Us";
require_once("header.php");
?>
<div class="content">
    <div class="container">
        <div class="page-header">
          <h1>Contact us</h1>
        </div>
        <div class="row-fluid">
            <!-- Start: CONTACT US FORM -->
            <div class="span4 offset1">
                <div class="page-header">
                    <h2>Quick message</h2>
                </div>
                <form class="form-contact-us">
                    <div class="control-group">
                        <div class="controls">
                            <input type="text" id="inputName" placeholder="Name">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="text" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <textarea id="inputMessage" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="submit" class="btn btn-primary btn-large" value="Send">
                        </div>
                    </div>
                </form>
            </div>
            <!-- End: CONTACT US FORM -->
            <!-- Start: OFFICES -->
            <div class="span5 offset1">
                <div class="page-header">
                <h2>Office</h2>
                </div>
                <h3>Philippines</h3>
                <div>
                    <address class="pull-left">
                        <strong>BROnSIS</strong><br>
                        ADD Convention Center<br>
                        McArthur Higway, Apalit, Pampanga<br>
                        Philippines<br>
                    </address>
                    <div class="pull-right">
                        <div class="bottom-space">
                            <i class="icon-phone icon-large"></i> (123) 123-1234
                        </div>
                        <a href="mailto:info@bronsis.ph" class="contact-mail">
                        <i class="icon-envelope icon-large"></i>
                        </a> info@bronsis.ph
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- End: OFFICES -->
        </div>
    </div>
</div>
    <!-- End: MAIN CONTENT -->
<?php require_once("footer.php");?>