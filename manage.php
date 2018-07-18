<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>MANAGE</title>
    <!-- Bootstrap Core CSS -->
<?php include('includes/header.php');?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Manage</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Manage</li>
                        </ol>
                    </div>
                </div>
                <?php
                if (isset($_POST['submit'])){
                    $names = $_POST['names'];
                    $contacts = $_POST['contacts'];
                    /*create new numbers*/
                    $cr = new Create();
                    $add = $cr->fwd_numbers($names,$contacts);
                    if ($add) {
                        ?>
                    <div class="row">
                        <div class="alert success">Successfully created Forward number</div>
                    </div>
                    <?php
                        }
                    }
                ?>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <!-- Column -->
                        <div class="card">
                            <div class="card-block bg-info">
                                <h4 class="text-white card-title">Assigned Numbers</h4>
                                <h6 class="card-subtitle text-white m-b-0 op-5">All contacts</h6>
                            </div>
                            <div class="card-block">
                                <div class="message-box contact-box">
                                    <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
                                    <div class="message-widget contact-widget">
                                        <!-- Message -->
                                        <?php
                                            $fetch = new Fetch();
                                            $details = $fetch->get_numbers();

                                            foreach ($details as $ke) {
                                            ?>
                                            <a href="#">
                                            <div class="user-img"> <img src="assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                            <h5><?php echo $ke['names'];?></h5> <span class="mail-desc"><?php echo $ke['nums'];?></span></div>
                                            </a>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Add Number</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="settings" role="tabpanel">
                                    <div class="card-block">
                                        <form action='' method="POST" class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Full Name" class="form-control form-control-line" name='names'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Number</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Phone number" class="form-control form-control-line" name='contacts' id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type='submit' name='submit' class="btn btn-success">Add Number</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include('includes/footer.php');?>