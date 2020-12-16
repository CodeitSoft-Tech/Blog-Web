<?php require_once('header.php'); ?>
</div>

<div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-9">
                <div class="blog">
                     <h3>Latest Post</h3>
                     <hr>
                    <div class="row">
                        <div class="col-md-12">

                            <?php include("includes/pagination.php"); ?>

                            <?php
                            
                            foreach ($result as $row) {
                                ?>
                              
                              <?php include("includes/blog_display.php"); ?>

                                
                            <?php
                              
                              }
                            
                             ?>

                            <div class="pagination">
                            <?php 
                                echo $pagination; 
                            ?>
                            </div>

                        </div>
                    </div>
                </div>                
            </div>
            <div class="col-md-3">
                
                <?php require_once('sidebar.php'); ?>
                
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>