<?php require_once('header.php'); ?>

<?php

if(isset($_POST['form1'])) 
{
		
    // updating into the database
	foreach($_POST['lang_value'] as $key=>$val)
     {
		$arr[$key] = $val;
	 }

	for($i=1;$i<=count($arr);$i++) 
    {
		$statement = $pdo->prepare("UPDATE tbl_language SET lang_value=? WHERE lang_id=?");
		$statement->execute(array($arr[$i],$i));
	}
	
    $success_message = 'Language Settings is updated successfully.';

}

$i = 0;
$statement = $pdo->prepare("SELECT * FROM tbl_language");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) 
{
	$i++;
	$lang_ids[$i] = $row['lang_value'];
}

?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Setup Input Details</h1>
	</div>
</section>


<?php
$statement = $pdo->prepare("SELECT * FROM tbl_language");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {

}
?>

<section class="content">

  <div class="row">
    <div class="col-md-12">

		<?php if($error_message): ?>
		<div class="callout callout-danger">	
    		<p>
    		  <?php echo $error_message; ?>
    		</p>
		</div>
		<?php endif; ?>

		<?php if($success_message): ?>
		<div class="callout callout-success">
		    <p><?php echo $success_message; ?></p>
		</div>
		<?php endif; ?>

        <form class="form-horizontal" action="" method="post">
        
        <h3 style="font-size:20px;font-weight:500;">Basic</h3>
		<div class="box box-info">
            <div class="box-body">
            	
                <!--<div class="form-group">
                    <label for="" class="col-sm-4 control-label">Currency <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[1]" value="<?php echo $lang_ids[1]; ?>">
                    </div>
                </div> -->

                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Search Posts <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[1]" value="<?php echo $lang_ids[1]; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Search <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[2]" value="<?php echo $lang_ids[2]; ?>">
                    </div>
                </div>
				<div class="form-group">
                    <label for="" class="col-sm-4 control-label">Submit <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[3]" value="<?php echo $lang_ids[3]; ?>">
                    </div>
                </div>
				<div class="form-group">
                    <label for="" class="col-sm-4 control-label">Update <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[4]" value="<?php echo $lang_ids[4]; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Read More <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[5]" value="<?php echo $lang_ids[5]; ?>">
                    </div>
                </div>
            </div>
        </div>

		
		<h3 style="font-size:20px;font-weight:500;">Subscribe</h3>
        <div class="box box-info">
            <div class="box-body">
				<div class="form-group">
                    <label for="" class="col-sm-4 control-label">Subscribe <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[6]" value="<?php echo $lang_ids[6]; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Subscribe To Our Newsletter <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[7]" value="<?php echo $lang_ids[7]; ?>">
                    </div>
                </div>
            </div>
        </div>
		
		
		<h3 style="font-size:20px;font-weight:500;">Other Information</h3>
        <div class="box box-info">
            <div class="box-body">
				<div class="form-group">
                    <label for="" class="col-sm-4 control-label">About Us <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[8]" value="<?php echo $lang_ids[8]; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Featured Posts <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[9]" value="<?php echo $lang_ids[9]; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Popular Posts <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[10]" value="<?php echo $lang_ids[10]; ?>">
                    </div>
                </div>
				<div class="form-group">
                    <label for="" class="col-sm-4 control-label">Recent Posts <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[11]" value="<?php echo $lang_ids[11]; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Contact Information <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[12]" value="<?php echo $lang_ids[12]; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Contact Form <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[13]" value="<?php echo $lang_ids[13]; ?>">
                    </div>
                </div>
				<div class="form-group">
                    <label for="" class="col-sm-4 control-label">Our Office <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[14]" value="<?php echo $lang_ids[14]; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Update Profile <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[15]" value="<?php echo $lang_ids[15]; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Send Message <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[16]" value="<?php echo $lang_ids[16]; ?>">
                    </div>
                </div>
				<div class="form-group">
                    <label for="" class="col-sm-4 control-label">Message <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[17]" value="<?php echo $lang_ids[17]; ?>">
                    </div>
                </div>
				<div class="form-group">
                    <label for="" class="col-sm-4 control-label">Find Us On Map <span>*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lang_value[18]" value="<?php echo $lang_ids[18]; ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="box box-info">
            <div class="box-body">
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label"></label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
                    </div>
                </div>
            </div>
        </div>

        </form>



    </div>
  </div>

</section>

<?php require_once('footer.php'); ?>