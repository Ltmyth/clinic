

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
    <title>Evaluation</title>
    <!-- Bootstrap Core CSS -->
    <?php include('includes/user_head.php'); ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <form method="POST" action="store_evaluation.php">
                    <div class="col-md-5 col-8 align-self-center">'
                        <h3 style="color:blue;">CLINIC EVALUATION</h3>
                        <br>
                        <div class="row">
                            <h4>Date:
                             <input type="date" name="date"  class="form-control"  required></h4>
                         </div>
                    </div>
                </div>

                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Provide Feedback on services below offered to you by us;</h4>
                                <div class="table-responsive">
                                    <br>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Service</th>
                                                <th>Provided_by</th>
                                                <th>Score /10</th>
                                                <th class='pull-right'>Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <br>
                                            <tr>
                                                <td>
                                                    <strong><b>RECEPTION</b></strong>
                                                    <input type="hidden" name="reception" value="RECEPTION">
                                                </td>

                                                <td>
                                                    <input type="text" name="reception_provider" class="form-control" required>
                                                </td>

                                                <td>
                                                    <select name="reception_score" class="form-control"  required>
                                                        <option value="0">
                                                            0
                                                        </option>
                                                        <option value="1">
                                                            1
                                                        </option>

                                                        <option value="2">
                                                            2
                                                        </option>

                                                        <option value="3">
                                                            3
                                                        </option>

                                                        <option value="4">
                                                            4
                                                        </option>
                                                        <option value="5">
                                                            5
                                                        </option>
                                                        <option value="6">
                                                            6
                                                        </option>

                                                        <option value="7">
                                                            7
                                                        </option>

                                                        <option value="8">
                                                            8
                                                        </option>

                                                        <option value="9">
                                                            9
                                                        </option>
                                                        <option value="10">
                                                            10
                                                        </option>

                                                    </select>
                                                </td>

                                                <td class='pull-right' >                                        
                                                    <select name="reception_remark" class="form-control" required>
                                                        <option>
                                                            Choose
                                                        </option>
                                                        <option value="Excellent">
                                                            Excellent
                                                        </option>

                                                        <option value="Good">
                                                            Good
                                                        </option>

                                                        <option value="Poor">
                                                            Poor
                                                        </option>

                                                        <option value="Very Bad">
                                                            Very Bad
                                                        </option>
                                                    </select>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong><b>DIAGNOSIS/ CONSULTATION</b></strong>
                                                    <input type="hidden" name="diagnosis" value="DIAGNOSIS">
                                                </td>

                                                <td>
                                                    <input type="text" name="diagnosis_provider" class="form-control" required>
                                                </td>
                                                <td>
                                                    <select name="diagnosis_score" class="form-control" required>
                                                        <option value="0">
                                                            0
                                                        </option>
                                                        <option value="1">
                                                            1
                                                        </option>

                                                        <option value="2">
                                                            2
                                                        </option>

                                                        <option value="3">
                                                            3
                                                        </option>

                                                        <option value="4">
                                                            4
                                                        </option>
                                                        <option value="5">
                                                            5
                                                        </option>
                                                        <option value="6">
                                                            6
                                                        </option>

                                                        <option value="7">
                                                            7
                                                        </option>

                                                        <option value="8">
                                                            8
                                                        </option>

                                                        <option value="9">
                                                            9
                                                        </option>
                                                        <option value="10">
                                                            10
                                                        </option>

                                                    </select>
                                                </td>

                                                <td class='pull-right'>                                        
                                                    <select name="diagnosis_remark" class="form-control" required>
                                                        <option>
                                                            Choose
                                                        </option>
                                                        <option value="Excellent">
                                                            Excellent
                                                        </option>

                                                        <option value="Good">
                                                            Good
                                                        </option>

                                                        <option value="Poor">
                                                            Poor
                                                        </option>

                                                        <option value="Very Bad">
                                                            Very Bad
                                                        </option>
                                                    </select>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong><b>TREATMENT</b></strong>
                                                    <input type="hidden" name="treatment" value="TREATMENT">
                                                </td>

                                                <td>
                                                    <input type="text" name="treatment_provider" class="form-control" required>
                                                </td>
                                                <td>
                                                    <select name="treatment_score" class="form-control" required>
                                                        <option value="0">
                                                            0
                                                        </option>
                                                        <option value="1">
                                                            1
                                                        </option>

                                                        <option value="2">
                                                            2
                                                        </option>

                                                        <option value="3">
                                                            3
                                                        </option>

                                                        <option value="4">
                                                            4
                                                        </option>
                                                        <option value="5">
                                                            5
                                                        </option>
                                                        <option value="6">
                                                            6
                                                        </option>

                                                        <option value="7">
                                                            7
                                                        </option>

                                                        <option value="8">
                                                            8
                                                        </option>

                                                        <option value="9">
                                                            9
                                                        </option>
                                                        <option value="10">
                                                            10
                                                        </option>

                                                    </select>
                                                </td>

                                                <td class='pull-right'>                                        
                                                    <select name="treatment_remark" class="form-control" required>
                                                        <option>
                                                            Choose
                                                        </option>
                                                        <option value="Excellent">
                                                            Excellent
                                                        </option>

                                                        <option value="Good">
                                                            Good
                                                        </option>

                                                        <option value="Poor">
                                                            Poor
                                                        </option>

                                                        <option value="Very Bad">
                                                            Very Bad
                                                        </option>
                                                    </select>

                                                </td>
                                            </tr>                                            

                                        </tbody>
                                    </table>
                                </div>
                                <div class="container">
                                    <button type="submit"  class="btn btn-lg btn-outline-success">
                                        Submit Evaluation
                                    </button>
                                    </form>
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