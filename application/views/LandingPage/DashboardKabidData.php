<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>USER KABID DATA</title>
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
                                        <th>Warga RT</th>
                                        <th>Tanggal Bergabung</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">US_01</th>
                                        <td>Agus</td>
                                        <td>RT 01</td>
                                        <td>19/03/2018</td>
                                        <td><a href="">edit </a> | <a href=""> delete </a></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">US_02</th>
                                        <td>Budi</td>
                                        <td>RT 02</td>
                                        <td>20/03/2018</td>
                                        <td><a href="">edit </a> | <a href=""> delete </a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">US_03</th>
                                        <td>Carli</td>
                                        <td>RT 03</td>
                                        <td>21/03/2018</td>
                                        <td><a href="">edit </a> | <a href=""> delete </a></td>
                                    </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
            <div align="right">
                <h1><b><a href="">+ User Baru</a></b> </h1>
            </div>
        </div>
    </section>


</body>

</html>