<?php 

require_once('contact_script.php');
require_once('header.php'); 

?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    //$contact_title = $row['contact_title'];
    //$contact_banner = $row['contact_banner'];
}
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    //$contact_map_iframe = $row['contact_map_iframe'];
    $contact_email = $row['contact_email'];
    $contact_phone = $row['contact_phone'];
    $contact_address = $row['contact_address'];
}
?>

<!--
<div class="page-banner" style="background-image: url(assets/uploads/<?php echo $contact_banner; ?>);">
    <div class="inner">
        <h1><?php echo $contact_title; ?></h1>
    </div>
</div> -->

<div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-12">
                <h3 style="margin-bottom: 50px;">Contact Us</h3>
                <div class="row cform">
                    <div class="col-md-8">
                        <div class="well well-sm">
                        
                        <form action="contact_script.php" method="post">
                            <div class="row">
                                
                                <div class="col-md-6">
                                    
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" class="form-control" placeholder="Enter name" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter email address" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="email">Subject</label>
                                        <input type="text" class="form-control" name="subject" placeholder="Enter subject" required>
                                    </div>
                                
                                  </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="name">Message</label>
                                    <textarea name="message" class="form-control" rows="9" cols="25" placeholder="Enter message" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input type="submit" value="Send Message" class="btn btn-primary pull-right" name="form_contact">
                                </div>
                                
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                        <address>
                            <?php echo nl2br($contact_address); ?>
                        </address>
                        <address>
                            <strong>Phone:</strong><br>
                            <span><?php echo $contact_phone; ?></span>
                        </address>
                        <address>
                            <strong>Email:</strong><br>
                            <a href="mailto:<?php echo $contact_email; ?>">
                            <span><?php echo $contact_email; ?></span></a>
                        </address>
                    </div>
                </div>

                <!--
                <h3>Find Us On Map</h3>
                <?php echo $contact_map_iframe; ?> -->
                
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>