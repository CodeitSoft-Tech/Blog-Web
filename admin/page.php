<?php require_once('header.php'); ?>

<?php

// Politics Tab Script
if(isset($_POST['form_politics_page'])) {
    
    $valid = 1;

    if(empty($_POST['politics_page_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }


    $path = $_FILES['politics_page_banner']['name'];
    $path_tmp = $_FILES['politics_page_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' && $ext!='JPG' && $ext!='PNG' && $ext!='JPEG' && $ext!='GIF'  ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $politics_banner = $row['politics_page_banner'];
                unlink('../assets/uploads/'.$politics_banner);
            }

            // updating the data
            $final_name = 'politics-page-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET politics_page_title=?, politics_page_banner=?,politics_page_meta_title=?,politics_page_meta_keyword=?,politics_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['politics_page_title'],$final_name,$_POST['politics_meta_title'],$_POST['politics_page_meta_keyword'],$_POST['politics_page_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET politics_page_title=?,politics_page_meta_title=?,politics_page_meta_keyword=?,politics_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['politics_page_title'],$_POST['politics_page_meta_title'],$_POST['politics_page_meta_keyword'],$_POST['politics_page_meta_description']));
        }

        $success_message = 'Politics Page Information is updated successfully.';
        
    }
    
}

// Business Tab Script
if(isset($_POST['form_business_page'])) {
    
    $valid = 1;

    if(empty($_POST['business_page_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    $path = $_FILES['business_page_banner']['name'];
    $path_tmp = $_FILES['business_page_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='JPG' && $ext!='png' && $ext!='PNG' && $ext!='jpeg' && $ext!='JPEG' && $ext!='gif' && $ext!='GIF' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $business_page_banner = $row['business_page_banner'];
                unlink('../assets/uploads/'.$business_page_banner);
            }

            // updating the data
            $final_name = 'business-page-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET business_page_title=?,business_page_banner=?,business_page_meta_title=?,business_page_meta_keyword=?,business_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['business_page_title'],$final_name,$_POST['business_page_meta_title'],$_POST['business_page_meta_keyword'],$_POST['business_page_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET business_page_title=?,business_page_meta_title=?,business_page_meta_keyword=?,business_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['business_page_title'],$_POST['business_page_meta_title'],$_POST['business_page_meta_keyword'],$_POST['business_page_meta_description']));
        }

        $success_message = 'Business News Page Information is updated successfully.';
        
    }
    
}

// Entertainment Tab Script
if(isset($_POST['form_enter_page'])) {
    
    $valid = 1;

    if(empty($_POST['enter_page_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    $path = $_FILES['enter_page_banner']['name'];
    $path_tmp = $_FILES['enter_page_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' && $ext!='JPG' && $ext!='PNG' && $ext!='JPEG' && $ext!='GIF' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $enter_page_banner = $row['enter_page_banner'];
                unlink('../assets/uploads/'.$enter_page_banner);
            }

            // updating the data
            $final_name = 'enter-page-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET enter_page_title=?,enter_page_banner=?,enter_page_meta_title=?,enter_page_meta_keyword=?,enter_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['enter_page_title'],$final_name,$_POST['enter_page_meta_title'],$_POST['enter_page_meta_keyword'],$_POST['enter_page_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET enter_page_title=?,enter_page_meta_title=?,enter_page_meta_keyword=?,enter_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['enter_page_title'],$_POST['enter_page_meta_title'],$_POST['enter_page_meta_keyword'],$_POST['enter_page_meta_description']));
        }

        $success_message = 'Entertainment News Page Information is updated successfully.';
        
    }
    
}

// Technology Tab Script
if(isset($_POST['form_tech_page'])) {
    
    $valid = 1;

    if(empty($_POST['tech_page_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    $path = $_FILES['tech_page_banner']['name'];
    $path_tmp = $_FILES['tech_page_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='JPG' && $ext!='png' && $ext!='PNG' && $ext!='jpeg' && $ext!='JPEG' && $ext!='gif' && $ext!='GIF' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $tech_page_banner = $row['tech_page_banner'];
                unlink('../assets/uploads/'.$tech_page_banner);
            }

            // updating the data
            $final_name = 'tech-page-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET tech_page_title=?,tech_page_banner=?,tech_page_meta_title=?,tech_page_meta_keyword=?,tech_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['tech_page_title'],$final_name,$_POST['tech_page_meta_title'],$_POST['tech_page_meta_keyword'],$_POST['tech_page_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET tech_page_title=?,tech_page_meta_title=?,tech_page_meta_keyword=?,tech_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['tech_page_title'],$_POST['tech_page_meta_title'],$_POST['tech_page_meta_keyword'],$_POST['tech_page_meta_description']));
        }

        $success_message = 'Technology News Page Information is updated successfully.';
        
    }
    
}

// Health Tab Script
if(isset($_POST['form_health_page'])) {
    
    $valid = 1;

    if(empty($_POST['health_page_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    $path = $_FILES['health_page_banner']['name'];
    $path_tmp = $_FILES['health_page_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='JPG' && $ext!='png' && $ext!='PNG' && $ext!='jpeg' && $ext!='JPEG' && $ext!='gif' && $ext!='GIF' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $health_page_banner = $row['health_page_banner'];
                unlink('../assets/uploads/'.$health_page_banner);
            }

            // updating the data
            $final_name = 'health-page-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET health_page_title=?,health_page_banner=?,health_page_meta_title=?,health_page_meta_keyword=?,health_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['health_page_title'],$final_name,$_POST['health_page_meta_title'],$_POST['health_page_meta_keyword'],$_POST['health_page_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET health_page_title=?,health_page_meta_title=?,health_page_meta_keyword=?,health_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['health_page_title'],$_POST['health_page_meta_title'],$_POST['health_page_meta_keyword'],$_POST['health_page_meta_description']));
        }

        $success_message = 'Health News Page Information is updated successfully.';
        
    }
    
}

// Sports Tab Scripts 

if(isset($_POST['form_sports_page'])) {
    
    $valid = 1;

    if(empty($_POST['sports_page_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    $path = $_FILES['sports_page_banner']['name'];
    $path_tmp = $_FILES['sports_page_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='JPG' && $ext!='png' && $ext!='PNG' && $ext!='jpeg' && $ext!='JPEG' && $ext!='gif' && $ext!='GIF' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $sports_page_banner = $row['sports_page_banner'];
                unlink('../assets/uploads/'.$sports_page_banner);
            }

            // updating the data
            $final_name = 'sports-page-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET sports_page_title=?,sports_page_banner=?,sports_page_meta_title=?,sports_page_meta_keyword=?,sports_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['sports_page_title'],$final_name,$_POST['sports_page_meta_title'],$_POST['sports_page_meta_keyword'],$_POST['sports_page_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET sports_page_title=?,sports_page_meta_title=?,sports_page_meta_keyword=?,sports_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['sports_page_title'],$_POST['sports_page_meta_title'],$_POST['sports_page_meta_keyword'],$_POST['sports_page_meta_description']));
        }

        $success_message = 'Sports News Page Information is updated successfully.';
        
    }
    
}

// Lifestyle Tab script

if(isset($_POST['form_lifestyle_page'])) {
    
    $valid = 1;

    if(empty($_POST['lifestyle_page_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    $path = $_FILES['lifestyle_page_banner']['name'];
    $path_tmp = $_FILES['lifestyle_page_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='JPG' && $ext!='png' && $ext!='PNG' && $ext!='jpeg' && $ext!='JPEG' && $ext!='gif' && $ext!='GIF' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $lifestyle_page_banner = $row['lifestyle_page_banner'];
                unlink('../assets/uploads/'.$lifestyle_page_banner);
            }

            // updating the data
            $final_name = 'lifestyle-page-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET lifestyle_page_title=?,lifestyle_page_banner=?,lifestyle_page_meta_title=?,lifestyle_page_meta_keyword=?,lifestyle_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['lifestyle_page_title'],$final_name,$_POST['lifestyle_page_meta_title'],$_POST['lifestyle_page_meta_keyword'],$_POST['lifestyle_page_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET lifestyle_page_title=?,lifestyle_page_meta_title=?,lifestyle_page_meta_keyword=?,lifestyle_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['lifestyle_page_title'],$_POST['lifestyle_page_meta_title'],$_POST['lifestyle_page_meta_keyword'],$_POST['lifestyle_page_meta_description']));
        }

        $success_message = 'Lifestyle News Page Information is updated successfully.';
        
    }
    
}

// Culture Tab script

if(isset($_POST['form_culture_page'])) {
    
    $valid = 1;

    if(empty($_POST['culture_page_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    $path = $_FILES['culture_page_banner']['name'];
    $path_tmp = $_FILES['culture_page_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='JPG' && $ext!='png' && $ext!='PNG' && $ext!='jpeg' && $ext!='JPEG' && $ext!='gif' && $ext!='GIF' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $culture_page_banner = $row['culture_page_banner'];
                unlink('../assets/uploads/'.$culture_page_banner);
            }

            // updating the data
            $final_name = 'culture-page-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET culture_page_title=?,culture_page_banner=?,culture_page_meta_title=?,culture_page_meta_keyword=?,culture_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['culture_page_title'],$final_name,$_POST['culture_page_meta_title'],$_POST['culture_page_meta_keyword'],$_POST['culture_page_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET culture_page_title=?,culture_page_meta_title=?,culture_page_meta_keyword=?,culture_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['culture_page_title'],$_POST['culture_page_meta_title'],$_POST['culture_page_meta_keyword'],$_POST['culture_page_meta_description']));
        }

        $success_message = 'Culture News Page Information is updated successfully.';
        
    }
    
}

// Facts & Opinions Tab script

if(isset($_POST['form_factop_page'])) {
    
    $valid = 1;

    if(empty($_POST['factop_page_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    $path = $_FILES['factop_page_banner']['name'];
    $path_tmp = $_FILES['factop_page_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='JPG' && $ext!='png' && $ext!='PNG' && $ext!='jpeg' && $ext!='JPEG' && $ext!='gif' && $ext!='GIF' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $factop_page_banner = $row['factop_page_banner'];
                unlink('../assets/uploads/'.$factop_page_banner);
            }

            // updating the data
            $final_name = 'factop-page-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET factop_page_title=?,factop_page_banner=?,factop_page_meta_title=?,factop_page_meta_keyword=?,factop_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['factop_page_title'],$final_name,$_POST['factop_page_meta_title'],$_POST['factop_page_meta_keyword'],$_POST['factop_page_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET factop_page_title=?,factop_page_meta_title=?,factop_page_meta_keyword=?,factop_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['factop_page_title'],$_POST['factop_page_meta_title'],$_POST['factop_page_meta_keyword'],$_POST['factop_page_meta_description']));
        }

        $success_message = 'Facts & Opinions News Page Information is updated successfully.';
        
    }
    
}

// History Tab script

if(isset($_POST['form_history_page'])) {
    
    $valid = 1;

    if(empty($_POST['history_page_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    $path = $_FILES['history_page_banner']['name'];
    $path_tmp = $_FILES['history_page_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='JPG' && $ext!='png' && $ext!='PNG' && $ext!='jpeg' && $ext!='JPEG' && $ext!='gif' && $ext!='GIF' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $history_page_banner = $row['history_page_banner'];
                unlink('../assets/uploads/'.$history_page_banner);
            }

            // updating the data
            $final_name = 'history-page-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET history_page_title=?,history_page_banner=?,history_page_meta_title=?,history_page_meta_keyword=?,history_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['history_page_title'],$final_name,$_POST['history_page_meta_title'],$_POST['history_page_meta_keyword'],$_POST['history_page_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET history_page_title=?,history_page_meta_title=?,history_page_meta_keyword=?,history_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['history_page_title'],$_POST['history_page_meta_title'],$_POST['history_page_meta_keyword'],$_POST['history_page_meta_description']));
        }

        $success_message = 'History News Page Information is updated successfully.';
        
    }
    
}

// Romance & Relationship Tab script

if(isset($_POST['form_romrel_page'])) {
    
    $valid = 1;

    if(empty($_POST['romrel_page_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    $path = $_FILES['romrel_page_banner']['name'];
    $path_tmp = $_FILES['romrel_page_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='JPG' && $ext!='png' && $ext!='PNG' && $ext!='jpeg' && $ext!='JPEG' && $ext!='gif' && $ext!='GIF' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $romrel_page_banner = $row['romrel_page_banner'];
                unlink('../assets/uploads/'.$romrel_page_banner);
            }

            // updating the data
            $final_name = 'romrel-page-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET romrel_page_title=?,romrel_page_banner=?,romrel_page_meta_title=?,romrel_page_meta_keyword=?,romrel_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['romrel_page_title'],$final_name,$_POST['romrel_page_meta_title'],$_POST['romrel_page_meta_keyword'],$_POST['romrel_page_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET romrel_page_title=?,romrel_page_meta_title=?,romrel_page_meta_keyword=?,romrel_page_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['romrel_page_title'],$_POST['romrel_page_meta_title'],$_POST['romrel_page_meta_keyword'],$_POST['romrel_page_meta_description']));
        }

        $success_message = 'Romance & Relationship News Page Information is updated successfully.';
        
    }
    
}

// Contact Page Tab Script
if(isset($_POST['form_contact_page'])) 
{
    
    $valid = 1;

    if(empty($_POST['contact_page_title'])) 
    {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    else
    {
            // updating the database
    
        $statement = $pdo->prepare("UPDATE tbl_page SET contact_page_title=?,contact_page_meta_title=?,contact_page_meta_keyword=?,contact_page_meta_description=? WHERE id=1");

        $statement->execute(array($_POST['contact_page_title'],$_POST['contact_page_meta_title'],$_POST['contact_page_meta_keyword'],$_POST['contact_page_meta_description']));
    } 
    
            $success_message = 'Contact Page Information is updated successfully.';
}
        
    
    


?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Page Settings</h1>
    </div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) 
{
    
    $politics_page_title = $row['politics_page_title'];
    $politics_page_banner = $row['politics_page_banner'];
    $politics_page_meta_title = $row['politics_page_meta_title'];
    $politics_page_meta_keyword = $row['politics_page_meta_keyword'];
    $politics_page_meta_description = $row['politics_page_meta_description'];
    
    $business_page_title = $row['business_page_title'];
    $business_page_banner = $row['business_page_banner'];
    $business_page_meta_title = $row['business_page_meta_title'];
    $business_page_meta_keyword = $row['business_page_meta_keyword'];
    $business_page_meta_description = $row['business_page_meta_description'];
    
    $enter_page_title = $row['enter_page_title'];
    $enter_page_banner = $row['enter_page_banner'];
    $enter_page_meta_title = $row['enter_page_meta_title'];
    $enter_page_meta_keyword = $row['enter_page_meta_keyword'];
    $enter_page_meta_description = $row['enter_page_meta_description'];
    
    $tech_page_title = $row['tech_page_title'];
    $tech_page_banner = $row['tech_page_banner'];
    $tech_page_meta_title = $row['tech_page_meta_title'];
    $tech_page_meta_keyword = $row['tech_page_meta_keyword'];
    $tech_page_meta_description = $row['tech_page_meta_description'];
    
    $health_page_title = $row['health_page_title'];
    $health_page_banner = $row['health_page_banner'];
    $health_page_meta_title = $row['health_page_meta_title'];
    $health_page_meta_keyword = $row['health_page_meta_keyword'];
    $health_page_meta_description = $row['health_page_meta_description'];
    
    $sports_page_title = $row['sports_page_title'];
    $sports_page_banner = $row['sports_page_banner'];
    $sports_page_meta_title = $row['sports_page_meta_title'];
    $sports_page_meta_keyword = $row['sports_page_meta_keyword'];
    $sports_page_meta_description = $row['sports_page_meta_description'];
    
    $lifestyle_page_title = $row['lifestyle_page_title'];
    $lifestyle_page_banner = $row['lifestyle_page_banner'];
    $lifestyle_page_meta_title = $row['lifestyle_page_meta_title'];
    $lifestyle_page_meta_keyword = $row['lifestyle_page_meta_keyword'];
    $lifestyle_page_meta_description = $row['lifestyle_page_meta_description'];
    
    $culture_page_title = $row['culture_page_title'];
    $culture_page_banner = $row['culture_page_banner'];
    $culture_page_meta_title = $row['culture_page_meta_title'];
    $culture_page_meta_keyword = $row['culture_page_meta_keyword'];
    $culture_page_meta_description = $row['culture_page_meta_description'];
    
    $factop_page_title = $row['factop_page_title'];
    $factop_page_banner = $row['factop_page_banner'];
    $factop_page_meta_title = $row['factop_page_meta_title'];
    $factop_page_meta_keyword = $row['factop_page_meta_keyword'];
    $factop_page_meta_description = $row['factop_page_meta_description'];
    
    $history_page_title = $row['history_page_title'];
    $history_page_banner = $row['history_page_banner'];
    $history_page_meta_title = $row['history_page_meta_title'];
    $history_page_meta_keyword = $row['history_page_meta_keyword'];
    $history_page_meta_description = $row['history_page_meta_description'];
    
    $romrel_page_title = $row['romrel_page_title'];
    $romrel_page_banner = $row['romrel_page_banner'];
    $romrel_page_meta_title = $row['romrel_page_meta_title'];
    $romrel_page_meta_keyword = $row['romrel_page_meta_keyword'];
    $romrel_page_meta_description = $row['romrel_page_meta_description'];

    $contact_page_title = $row['contact_page_title'];
    $contact_page_meta_title = $row['contact_page_meta_title'];
    $contact_page_meta_keyword = $row['contact_page_meta_keyword'];
    $contact_page_meta_description = $row['contact_page_meta_description'];

}




?>


<section class="content" style="min-height:auto;margin-bottom: -30px;">
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
        </div>
    </div>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">
                            
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Politics</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Business</a></li> 
                        <li><a href="#tab_3" data-toggle="tab">Entertainment</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Technology</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Health</a></li>
                        <li><a href="#tab_6" data-toggle="tab">Sports</a></li>
                        <li><a href="#tab_7" data-toggle="tab">Lifestyle</a></li>
                        <li><a href="#tab_8" data-toggle="tab">Culture</a></li>
                        <li><a href="#tab_9" data-toggle="tab">Facts & Opinions</a></li>
                        <li><a href="#tab_10" data-toggle="tab">History</a></li>
                        <li><a href="#tab_11" data-toggle="tab">Romance & Relationship</a></li>
                        <li><a href="#tab_12" data-toggle="tab">Contact Us </a></li>
                    </ul>
                    <div class="tab-content">

                        <!-- Politics Tab 1 -->
                        <div class="tab-pane active" id="tab_1">           
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="politics_page_title" value="<?php echo $politics_page_title; ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $politics_page_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="politics_page_banner">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="politics_page_meta_title" value="<?php echo $politics_page_meta_title; ?>">
                                        </div>
                                    </div>             
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="politics_page_meta_keyword" style="height:100px;"><?php echo $politics_page_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="politics_page_meta_description" style="height:100px;"><?php echo $politics_page_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_politics_page">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        <!--Business Tab 2 -->
                        <div class="tab-pane" id="tab_2">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="business_page_title" value="<?php echo $business_page_title; ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $business_page_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="business_page_banner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="business_page_meta_title" value="<?php echo $business_page_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="business_page_meta_keyword" style="height:100px;"><?php echo $business_page_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="business_page_meta_description" style="height:100px;"><?php echo $business_page_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_business_page">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        <!--Entertainment Tab 3 -->
                        <div class="tab-pane" id="tab_3">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="enter_page_title" value="<?php echo $enter_page_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $enter_page_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="enter_page_banner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="enter_page_meta_title" value="<?php echo $enter_page_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="enter_page_meta_keyword" style="height:100px;"><?php echo $enter_page_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="enter_page_meta_description" style="height:100px;"><?php echo $enter_page_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_enter_page">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        <!--Technology Tab 4 -->
                        <div class="tab-pane" id="tab_4">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="tech_page_title" value="<?php echo $tech_page_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $tech_page_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="tech_page_banner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="tech_page_meta_title" value="<?php echo $tech_page_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="tech_page_meta_keyword" style="height:100px;"><?php echo $tech_page_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="tech_page_meta_description" style="height:100px;"><?php echo $tech_page_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_tech_page">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        <!-- Health Tab 5 -->
                        <div class="tab-pane" id="tab_5">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="health_page_title" value="<?php echo $health_page_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $health_page_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="health_page_banner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="health_page_meta_title" value="<?php echo $health_page_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="health_page_meta_keyword" style="height:100px;"><?php echo $health_page_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="health_page_meta_description" style="height:100px;"><?php echo $health_page_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_health_page">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        <!-- Sports Tab 6 -->   

                          <div class="tab-pane" id="tab_6">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="sports_page_title" value="<?php echo $sports_page_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $sports_page_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="sports_page_banner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="sports_page_meta_title" value="<?php echo $sports_page_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="sports_page_meta_keyword" style="height:100px;"><?php echo $sports_page_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="sports_page_meta_description" style="height:100px;"><?php echo $sports_page_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_sports_page">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        <!-- Lifestyle Tab 7 -->
                          <div class="tab-pane" id="tab_7">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="lifestyle_page_title" value="<?php echo $lifestyle_page_title; ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $lifestyle_page_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="lifestyle_page_banner">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="lifestyle_page_meta_title" value="<?php echo $lifestyle_page_meta_title; ?>">
                                        </div>
                                    </div>             
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="lifestyle_page_meta_keyword" style="height:100px;"><?php echo $lifestyle_page_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="lifestyle_page_meta_description" style="height:100px;"><?php echo $lifestyle_page_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_lifestyle_page">Update</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            </form>
                        </div>

                        <!-- Culture Tab 8 -->
                         <div class="tab-pane" id="tab_8">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="culture_page_title" value="<?php echo $culture_page_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $culture_page_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="culture_page_banner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="culture_page_meta_title" value="<?php echo $culture_page_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="culture_page_meta_keyword" style="height:100px;"><?php echo $culture_page_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="culture_page_meta_description" style="height:100px;"><?php echo $culture_page_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_culture_page">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                      

                        <!-- Facts & Opinions Tab 9 -->
                        <div class="tab-pane" id="tab_9">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="factop_page_title" value="<?php echo $factop_page_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $factop_page_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="factop_page_banner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="factop_page_meta_title" value="<?php echo $factop_page_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="factop_page_meta_keyword" style="height:100px;"><?php echo $factop_page_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="factop_page_meta_description" style="height:100px;"><?php echo $factop_page_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_factop_page">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        <!-- History Tab 10 -->
                        <div class="tab-pane" id="tab_10">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="history_page_title" value="<?php echo $history_page_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $history_page_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="history_page_banner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="history_page_meta_title" value="<?php echo $history_page_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="history_page_meta_keyword" style="height:100px;"><?php echo $history_page_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="history_page_meta_description" style="height:100px;"><?php echo $history_page_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_history_page">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        <!-- Romance & Relationship Tab 10 -->
                        <div class="tab-pane" id="tab_11">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="romrel_page_title" value="<?php echo $romrel_page_title; ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $romrel_page_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="romrel_page_banner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="romrel_page_meta_title" value="<?php echo $romrel_page_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="romrel_page_meta_keyword" style="height:100px;"><?php echo $romrel_page_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="romrel_page_meta_description" style="height:100px;"><?php echo $romrel_page_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_romrel_page">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                         <!-- Contact Page Tab 12 -->
                        <div class="tab-pane" id="tab_12">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="contact_page_title" value="<?php echo $contact_page_title; ?>">
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="contact_page_meta_title" value="<?php echo $contact_page_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="contact_page_meta_keyword" style="height:100px;"><?php echo $contact_page_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="contact_page_meta_description" style="height:100px;"><?php echo $contact_page_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_contact_page">Update</button>
                                        </div>
                                      </div>
                                   </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                

            </form>
        </div>
    </div>

</section>

<?php require_once('footer.php'); ?>