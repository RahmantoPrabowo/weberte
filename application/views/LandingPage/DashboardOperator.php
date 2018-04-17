<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>USER OPERATOR</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url("assets/");?>/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url("assets/");?>/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url("assets/");?>/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url("assets/");?>/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url("assets/");?>/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url("assets/");?>/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h1><b><center>DAFTAR USER</center></b></h1>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID USER</th>
                                        <th>Nama User</th>
                                        <th>ID Number</th>
                                        <th>email</th>
                                        <th>peran</th>
                                        <th>Approval</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                        $this->db->select('*');
                                        $this->db->from('member_reguler');
                                        $query = $this->db->get();


                                        if($query->num_rows() > 0){
                                              $hasil = $query->result_array();
                                              //print_r($hasil);
                                              //print_r($hasil);
                                              $sess_array = array();
                                                foreach($hasil as $row)
                                                {
                                                    if($row['status']=="1"){
                                                        $status = "Approved";
                                                    }else
                                                    {
                                                        $status = "Not Approved";
                                                    }
                                                    $sess_array = array(
                                                    'id'         => $row['id'],
                                                    'fullname'   => $row['fullname'],
                                                    'id_number'  => $row['id_number'],
                                                    'email'      => $row['email'],
                                                    'peran'      => $row['peran'],
                                                    'status'     => $status

                                                    );

                //echo "<br>".$sess_array['id']." ".$sess_array['fullname']."<br>";
                                                    echo "<tr>";
                                                    echo "<th scope='row'>".$sess_array['id']."</th>";
                                                    echo "<td>".$sess_array['fullname']."</td>";
                                                    echo "<td>".$sess_array['id_number']."</td>";
                                                    echo "<td>".$sess_array['email']."</td>";
                                                    echo "<td>".$sess_array['peran']."</td>";
                                                    echo "<td>".$sess_array['status']."</td>";
                                                    echo "<td><a href=".site_url('DashboardOperator/view/').$sess_array[
                                                    'id'].">view</a> | <a href=''>edit </a> | <a href=''> delete </a></td>";
                                                     }

                                }

                            ?>

                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
            <div align="right">
                <h1><b><a href="<?php echo site_url('LandingPage/sign_up'); ?>">+ User Baru</a></b> </h1>
            </div>
        </div>
    </section>


</body>

</html>