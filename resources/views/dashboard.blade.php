@include('sidebar')

<h1 class="text-white">Dashboard</h1>
<br>

        <br>
        <div class="pcoded-inner-content">

            <div class="main-body">
                <div class="page-wraper">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="small-box bg-warning text-white">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="m-b-5">User</p>
                                            <h4 class="m-b-0">{{$count}}</h4>
                                        </div>
                                        <a href="http://127.0.0.1:8000/admin" class="small-box-footer"><br>More info <i class="fas fa-arrow-circle-right"></i></a>
                                        <div class="col col-auto text-right">
                                            <i class="feather icon-user f-50 text-c-yellow"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class=" small-box bg-success text-white">
                                <div class="card-block">
                                    <div class="row align-item-center">
                                        <div class="col">
                                            <p class="m-b-5">Atheletes</p>
                                            <h4 class="m-b-0">{{$athelet}}</h4>
                                        </div>
                                        <a href="http://127.0.0.1:8000/athletes" class="small-box-footer"><br>More info <i class="fas fa-arrow-circle-right"></i></a>
                                        <div class="col col-auto text-right">
                                            <i class="feather icon-credit-card f-50 text-c-green"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class=" small-box bg-info text-white">
                                <div class="card-block">
                                    <div class="row align-item-center">
                                        <div class="col">
                                            <p class="m-b-5">Games</p>
                                            <h4 class="m-b-0">{{$games}}</h4>
                                        </div>
                                        <a href="http://127.0.0.1:8000/games" class="small-box-footer"><br>More info <i class="fas fa-arrow-circle-right"></i></a>
                                        <div class="col col-auto text-right">
                                            <i class="feather icon-user f-50 text-c-yellow"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class=" small-box bg-danger text-white">
                                <div class="card-block">
                                    <div class="row align-item-center">
                                        <div class="col">
                                            <p class="m-b-5">Sports</p>
                                            <h4 class="m-b-0">{{$sport}}</h4>
                                        </div>
                                        <a href="http://127.0.0.1:8000/sports" class="small-box-footer"><br>More info <i class="fas fa-arrow-circle-right"></i></a>
                                        <div class="col col-auto text-right">
                                            <i class="feather icon-user f-50 text-c-yellow"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <br>
                            <br>
                            <br>

                            <script type="text/javascript">
                                window.onload = function() {

                                    var chart = new CanvasJS.Chart("chartContainer", {
                                        theme: "light1", // "light2", "dark1", "dark2"
                                        animationEnabled: false, // change to true
                                        title: {
                                            text: " Column Chart"
                                        },
                                        data: [{
                                            // Change type to "bar", "area", "spline", "pie",etc.
                                            type: "column",
                                            dataPoints: [

                                                {
                                                    label: "{{$count}}-User",
                                                    y: 11
                                                },
                                                {
                                                    label: "{{$games}}-Games",
                                                    y: 8
                                                },
                                                {
                                                    label: "{{$athelet}}-Athelets",
                                                    y: 40
                                                },
                                                {
                                                    label: "{{$sport}}-Sports",
                                                    y: 30
                                                },
                                                {
                                                    label: "{{$team}}-Teams",
                                                    y: 36
                                                }
                                            ]
                                        }]
                                    });
                                    chart.render();

                                }
                            </script>
                            </head>

                            <body>
                                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>

                                <!-- End chart -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    





    

