<html>
    <head>
        <title>Dashboard Humas</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
        <!--script src="Chart.bundle.js"></script-->
        <style type="text/css">
            .container {
                width: 40%;
                margin: 100px auto;
            }
        </style>
        <style type="text/css">
            .dashboardtitle {
                
                margin: 5px 5px 50px 5px;
            }
        </style>

        Dashboard Humas
    </head>
    <body>
        

            
        
        <div class="container">
            <div class="dashboardtitle"> 
                <h1>Daftar Informasi Penting</h1>
                        <a type="button" class="btn btn-success m-t-15 waves-effect" href="<?php echo site_url("DashboardHumasInsertPost");?>">Tambah Informasi Penting</a>
                        <!-- <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control date" placeholder="Username">
                            </div>
                        </div> -->
                    
                
            </div>
            <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Judul Informasi</th>
                                            <th>Tanggal</th>
                                            <th>Kustomisasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Cara Mendaftarkan Kartu Keluarga</td>
                                            <td>20 Mar 2018</td>
                                            <td>
                                                <a href="../../pages/tugasakpsi/UpdateDelegasiTicketIncident.html" > <i class="material-icons">mode_edit</i> </a>
                                                <a href="../../pages/tugasakpsi/UpdateDelegasiTicketIncident.html" > <i class="material-icons">delete</i> </a>
                                        </tr>
                                        <tr>
                                            <td>Cara Mengikuti PILKADA</td>
                                            <td>21 Mar 2018</td>
                                            <td>
                                                <a href="../../pages/tugasakpsi/UpdateDelegasiTicketIncident.html" > <i class="material-icons">mode_edit</i> </a>
                                                <a href="../../pages/tugasakpsi/UpdateDelegasiTicketIncident.html" > <i class="material-icons">delete</i> </a>
                                        </tr>
                                        <tr>
                                            <td>Iuran Kebersihan untuk RT</td>
                                            <td>22 Mar 2018</td>
                                            <td>
                                                <a href="../../pages/tugasakpsi/UpdateDelegasiTicketIncident.html" > <i class="material-icons">mode_edit</i> </a>
                                                <a href="../../pages/tugasakpsi/UpdateDelegasiTicketIncident.html" > <i class="material-icons">delete</i> </a>
                                        </tr>
                                    </tbody>

                                </table>
        </div>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun"],
                    datasets: [{
                            label: 'jumlah kegiatan warga',
                            data: [10, 5, 4, 5, 9, 8],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 99, 132, 0.2)'
                            ],
                            /*borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],*/
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url("assets/");?>plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url("assets/");?>plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url("assets/");?>plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url("assets/");?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url("assets/");?>plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url("assets/");?>plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url("assets/");?>plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url("assets/");?>plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url("assets/");?>plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url("assets/");?>plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url("assets/");?>plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url("assets/");?>plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url("assets/");?>plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url("assets/");?>plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>


    <!-- Custom Js -->
    <script src="<?php echo base_url("assets/");?>js/admin.js"></script>
    <script src="<?php echo base_url("assets/");?>js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url("assets/");?>js/demo.js"></script>
    </body>
</html>
