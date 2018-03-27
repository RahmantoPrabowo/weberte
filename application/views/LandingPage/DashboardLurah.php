<html>
    <head>
        <title>Dashboard Pak Lurah</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
        <!--script src="Chart.bundle.js"></script-->
        <style type="text/css">
            .container {
                width: 40%;
                margin: 15px auto;
            }
        </style>

        Statistik Kegiatan Warga
    </head>
    <body>
        <div class="container">

            <h1>Statistik Kegiatan Warga</h1>
        </div>
        <div class="container">
            <canvas id="myChart" width="10" height="10"></canvas>
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
    </body>
</html>