<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php require_once(APPPATH . 'views/include/tab.php'); ?>


    <link href="<?php echo base_url() ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <!----------BOOTSTRAP DATEPICKER----------------------------->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/datepicker/css/datepicker.css">
    <!---------------------------------------------------------->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

</head>
<div style="position:fixed; bottom: 0; right: 0; width: 67%; border: 2px solid #CCC; top:200px; z-index:1001; background-color: #FFF; display:none;" id="ad2">
    <span style="right: 0; position: fixed; cursor: pointer; z-index:1002" onclick="closeAd('ad2')">CLOSE</span>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Payroll Management System -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3182624105910612" data-ad-slot="4635770289" data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>


    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Hospital Management System -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3182624105910612" data-ad-slot="3101991489" data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>


    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Grading System -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3182624105910612" data-ad-slot="6132191885" data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- HMS Website -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3182624105910612" data-ad-slot="1562391480" data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>

<body class="skin-blue">
    <!-- header logo: style can be found in header.less -->
    <?php require_once(APPPATH . 'views/include/header.php'); ?>

    <div class="wrapper row-offcanvas row-offcanvas-left">

        <?php require_once(APPPATH . 'views/include/sidebar.php'); ?>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <?php if ($this->session->userdata('emr_viewing') == "ipd_emr_viewing") { ?>
                    <h1>IPD Patient Information</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url() ?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">EMR sheet</a></li>
                        <li><a href="<?php echo base_url() ?>app/emr/opd">In-Patient</a></li>
                    </ol>
                <?php } else { ?>
                    <h1>IPD Patient Information</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url() ?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Doctor Module</a></li>
                        <li><a href="<?php echo base_url() ?>app/doctor/ipd">In-Patient Master</a></li>
                        <li><a href="#">In-Patient Information</a></li>
                    </ol>
                <?php } ?>

            </section>

            <!-- Main content -->
            <section class="content">




                <form method="post" action="<?php echo base_url(); ?>app/opd/save_opd" onSubmit="return confirm('Are you sure you want to save?');">
                    <input type="hidden" name="patient_no" value="<?php echo $patientInfo->patient_no ?>">
                    <div class="row">

                        <div class="col-md-3">
                            <div class="box">
                                <div class="box-header"></div>
                                <div class="box-body table-responsive no-padding">
                                    <table width="100%" cellpadding="3" cellspacing="3">
                                        <tr>
                                            <td width="15%" valign="top" align="center">
                                                <?php
                                                if (!$patientInfo->picture) {
                                                    $picture = "avatar.png";
                                                } else {
                                                    $picture = $patientInfo->picture;
                                                }
                                                ?>
                                                <img src="<?php echo base_url(); ?>public/patient_picture/<?php echo $picture; ?>" class="img-rounded" width="86" height="81">
                                            </td>
                                            <td>
                                                <table width="100%">
                                                    <tr>
                                                        <td><u>Patient No.</u></td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo $patientInfo->patient_no ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><u>Patient Name</u></td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo $patientInfo->name ?></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="box-footer clearfix">
                                    <div style="margin-top: 15px;">
                                        <ul class="nav nav-pills nav-stacked">
                                            <li class="active"><a href="<?php echo base_url() ?>app/ipd/view/<?php echo $getOPDPatient->IO_ID; ?>/<?php echo $getOPDPatient->patient_no; ?>"> General Information</a></li>
                                            <li><a href="<?php echo base_url() ?>app/ipd/diagnosis/<?php echo $getOPDPatient->IO_ID; ?>/<?php echo $getOPDPatient->patient_no; ?>"> Diagnosis</a></li>
                                            <li><a href="<?php echo base_url() ?>app/ipd/medication/<?php echo $getOPDPatient->IO_ID; ?>/<?php echo $getOPDPatient->patient_no; ?>"> Medication</a></li>
                                            <li><a href="<?php echo base_url() ?>app/ipd/complain/<?php echo $getOPDPatient->IO_ID; ?>/<?php echo $getOPDPatient->patient_no; ?>"> Complain</a></li>
                                            <li><a href="<?php echo base_url() ?>app/ipd/progress_note/<?php echo $getOPDPatient->IO_ID; ?>/<?php echo $getOPDPatient->patient_no; ?>"> Progress Note</a></li>
                                            <li><a href="<?php echo base_url() ?>app/ipd/intake_output/<?php echo $getOPDPatient->IO_ID; ?>/<?php echo $getOPDPatient->patient_no; ?>"> Intake/Output Record</a></li>
                                            <li><a href="<?php echo base_url() ?>app/ipd/nurse_progress_note/<?php echo $getOPDPatient->IO_ID; ?>/<?php echo $getOPDPatient->patient_no; ?>"> Nurse Progress Note</a></li>
                                            <li><a href="<?php echo base_url() ?>app/ipd/vitalSign/<?php echo $getOPDPatient->IO_ID; ?>/<?php echo $getOPDPatient->patient_no; ?>"> Vital Sign</a></li>
                                            <li><a href="<?php echo base_url() ?>app/ipd/room_transfer/<?php echo $getOPDPatient->IO_ID; ?>/<?php echo $getOPDPatient->patient_no; ?>"> IP Room Transfer</a></li>

                                            <li><a href="<?php echo base_url() ?>app/ipd/bed_side_procedure/<?php echo $getOPDPatient->IO_ID; ?>/<?php echo $getOPDPatient->patient_no; ?>"> Bed Side Procedure</a></li>
                                            <li><a href="<?php echo base_url() ?>app/ipd/operation_theater/<?php echo $getOPDPatient->IO_ID; ?>/<?php echo $getOPDPatient->patient_no; ?>"> Operation Theater</a></li>
                                            <li><a href="<?php echo base_url() ?>app/ipd/patientHistory/<?php echo $getOPDPatient->IO_ID; ?>/<?php echo $getOPDPatient->patient_no; ?>"> Patient History</a></li>
                                            <li><a href="<?php echo base_url() ?>app/ipd/laboratory/<?php echo $getOPDPatient->IO_ID; ?>/<?php echo $getOPDPatient->patient_no; ?>"> Laboratory</a></li>
                                            <li><a href="<?php echo base_url() ?>app/ipd/discharge_summary/<?php echo $getOPDPatient->IO_ID; ?>/<?php echo $getOPDPatient->patient_no; ?>"> Discharge Summary</a></li>


                                            <!--<li><a href="<?php echo base_url() ?>app/opd/billing/<?php echo $getOPDPatient->IO_ID; ?>/<?php echo $getOPDPatient->patient_no; ?>"> Admission Billing</a></li>-->

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1" data-toggle="tab">General Information</a></li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>Date Admit</td>
                                                    <td><?php echo date("M d, Y", strtotime($getOPDPatient->date_visit)); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Time Admit</td>
                                                    <td><?php echo date("H:i:s A", strtotime($getOPDPatient->time_visit)); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>In-Charge Doctor</td>
                                                    <td><?php echo $getOPDPatient->con_doctor; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Department</td>
                                                    <td><?php echo $getOPDPatient->dept_name; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Room</td>
                                                    <td><?php echo $getOPDPatient->room_name; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Bed No.</td>
                                                    <td><?php echo $getOPDPatient->bed_name; ?></td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer clearfix">

                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->


    <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>public/js/AdminLTE/app.js" type="text/javascript"></script>

    <!-- BDAY -->
    <script src="<?php echo base_url(); ?>public/datepicker/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url(); ?>public/datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        // When the document is ready
        $(document).ready(function() {

            $('#cFrom').datepicker({
                //format: "dd/mm/yyyy"
                format: "yyyy-mm-dd"
            });

            $('#cTo').datepicker({
                //format: "dd/mm/yyyy"
                format: "yyyy-mm-dd"
            });

        });
    </script>
    <!-- END BDAY -->


</body>

</html>