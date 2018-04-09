<html>
    <head>
        <title>Dashboard Pak Lurah</title>
        <script src="<?php echo base_url("assets/");?>/plugins/chartjs/Chart.bundle.js"></script>
        <style type="text/css">
            .container {
                width: 40%;
                margin: 15px auto;
            }
        </style>

        Statistik Kegiatan Warga
    </head>
    <body>
        <div>
            <br><br>
        </div>
        <div class="container">

            <h1>Statistik Kegiatan Warga</h1>
        </div>
        <div class="container">
            <canvas id="myChart" width="10" height="10"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, 
            {
                type: 'bar',
                data: {
                       labels: ["January", "February", "March", "April", "May", "June", "July"],
                        datasets: [{
                            label: "Pasar RT",
                            data: [65, 59, 80, 81, 56, 55, 40],
                            backgroundColor: 'rgba(255, 255, 0, 0.5)'
                        }, {
                            label: "Arisan RT",
                            data: [28, 48, 40, 19, 86, 27, 90],
                            backgroundColor: 'rgba(0, 255, 0, 0.5)'
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
    </body>
</html>