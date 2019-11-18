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
    <title>Results</title>
    <!-- Bootstrap Core CSS -->
    <?php include('includes/header.php');?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3>Evaluation Results</h3>
                    </div>
                </div>

                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Service</th>
                                                <th>Average Score /10</th>
                                                <th>Best Score</th>
                                                <th>Worst Score</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <strong><b>RECEPTION</b></strong>
                                                </td>
                                                <td>
                                                    <?php
                                                        require_once('configs/db.php');
                                                        $query = "SELECT ROUND(AVG(score),0) as Average FROM services WHERE service ='RECEPTION'";

                                                        $res = $connect->query($query);
                                                       
                                                        //Query db
                                                        if ($res == TRUE) {
                                                            while($row = $res->fetch_array()){
                                                                echo "$row[0]";
                                                            }
                                                        }
                                                        else {
                                                            echo "Error: " . $res . "<br>" . $connect->error;
                                                        }  
                                                    ?>
                                                </td>

                                                <td>
                                                    <?php
                                                        $query2 = "SELECT MIN(score) as Worst_score FROM services WHERE service ='RECEPTION'";

                                                        $res = $connect->query($query);
                                                       
                                                        //Query db
                                                        if ($res == TRUE) {
                                                            while($row = $res->fetch_array()){
                                                                echo "$row[0]";
                                                            }
                                                        }
                                                        else {
                                                            echo "Error: " . $res . "<br>" . $connect->error;
                                                        }  
                                                    ?>
                                                </td>

                                                <td>
                                                    <?php
                                                        $query2 = "SELECT MAX(score) as Best_score FROM services WHERE service ='RECEPTION'";

                                                        $res = $connect->query($query);
                                                       
                                                        //Query db
                                                        if ($res == TRUE) {
                                                            while($row = $res->fetch_array()){
                                                                echo "$row[0]";
                                                            }
                                                        }
                                                        else {
                                                            echo "Error: " . $res . "<br>" . $connect->error;
                                                        }  
                                                    ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <strong><b>DIAGNOSIS / CONSULTATION</b></strong>
                                                </td>
                                                <td>
                                                    <?php
                                                        require_once('configs/db.php');
                                                        $query = "SELECT ROUND(AVG(score),0) as Average FROM services WHERE service ='DIAGNOSIS'";

                                                        $res = $connect->query($query);
                                                       
                                                        //Query db
                                                        if ($res == TRUE) {
                                                            while($row = $res->fetch_array()){
                                                                echo "$row[0]";
                                                            }
                                                        }
                                                        else {
                                                            echo "Error: " . $res . "<br>" . $connect->error;
                                                        }  
                                                    ?>
                                                </td>

                                                <td>
                                                    <?php
                                                        $query2 = "SELECT MIN(score) as Worst_score FROM services WHERE service ='DIAGNOSIS'";

                                                        $res = $connect->query($query);
                                                       
                                                        //Query db
                                                        if ($res == TRUE) {
                                                            while($row = $res->fetch_array()){
                                                                echo "$row[0]";
                                                            }
                                                        }
                                                        else {
                                                            echo "Error: " . $res . "<br>" . $connect->error;
                                                        }  
                                                    ?>
                                                </td>

                                                <td>
                                                    <?php
                                                        $query2 = "SELECT MAX(score) as Best_score FROM services WHERE service ='DIAGNOSIS'";

                                                        $res = $connect->query($query);
                                                       
                                                        //Query db
                                                        if ($res == TRUE) {
                                                            while($row = $res->fetch_array()){
                                                                echo "$row[0]";
                                                            }
                                                        }
                                                        else {
                                                            echo "Error: " . $res . "<br>" . $connect->error;
                                                        }  
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong><b>TREATMENT</b></strong>
                                                </td>
                                                <td>
                                                    <?php
                                                        require_once('configs/db.php');
                                                        $query = "SELECT ROUND(AVG(score),0) as Average FROM services WHERE service ='TREATMENT'";

                                                        $res = $connect->query($query);
                                                       
                                                        //Query db
                                                        if ($res == TRUE) {
                                                            while($row = $res->fetch_array()){
                                                                echo "$row[0]";
                                                            }
                                                        }
                                                        else {
                                                            echo "Error: " . $res . "<br>" . $connect->error;
                                                        }  
                                                    ?>
                                                </td>

                                                <td>
                                                    <?php
                                                        $query2 = "SELECT MIN(score) as Worst_score FROM services WHERE service ='TREATMENT'";

                                                        $res = $connect->query($query);
                                                       
                                                        //Query db
                                                        if ($res == TRUE) {
                                                            while($row = $res->fetch_array()){
                                                                echo "$row[0]";
                                                            }
                                                        }
                                                        else {
                                                            echo "Error: " . $res . "<br>" . $connect->error;
                                                        }  
                                                    ?>
                                                </td>

                                                <td>
                                                    <?php
                                                        $query2 = "SELECT MAX(score) as Best_score FROM services WHERE service ='TREATMENT'";

                                                        $res = $connect->query($query);
                                                       
                                                        //Query db
                                                        if ($res == TRUE) {
                                                            while($row = $res->fetch_array()){
                                                                echo "$row[0]";
                                                            }
                                                        }
                                                        else {
                                                            echo "Error: " . $res . "<br>" . $connect->error;
                                                        }  
                                                    ?>
                                                </td>
                                            </tr>

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