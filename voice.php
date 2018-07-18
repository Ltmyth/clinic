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
    <title>VOICE</title>
    <!-- Bootstrap Core CSS -->
<?php include('includes/header.php');?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Voice</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Voice</li>
                        </ol>
                    </div>
                </div>

                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Receive Audios</h4>
                                <h6 class="card-subtitle">Listen to sent in Audios</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>From</th>
                                                <th>Received</th>
                                                <th>Time</th>
                                                <th class='pull-right'>Listen</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php
                                        $f = new Fetch();
                                        $n = $f->get_voice();
                                    ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include('includes/footer.php');?>