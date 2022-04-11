<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
</head>
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
    <div class="container">
        {{-- <a class="navbar-brand mr-auto" href="#">PositronX</a> --}}
        <img src="{{asset('assets/img/logo.jpeg')}}" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav-wrapper" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cms') }}">CMS Alexa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('events') }}">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('performance') }}">Performance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Warta Ekonomi</h5>
                    <div class="card-body">
                      <h5 class="card-title">{{$topRanks->we}}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">HerStory</h5>
                    <div class="card-body">
                      <h5 class="card-title">{{$topRanks->hs}}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Populis</h5>
                    <div class="card-body">
                    <p class="card-title">{{$topRanks->populis}}</p>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row" style="padding-top: 40px;">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="panel panel-default">
                                <h5 class="card-header">Warta Ekonomi</h5>
                                <div class="panel-body">
                                    <canvas id="we" height="280" width="600"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="panel panel-default">
                                <h5 class="card-header">Herstory</h5>
                                <div class="panel-body">
                                    <canvas id="hs" height="280" width="600"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="row" style="padding-top: 40px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="panel panel-default">
                        <h5 class="card-header">Populis</h5>
                        <div class="panel-body">
                            <canvas id="pop" height="150" width="600"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
    var tanggalWe = <?php echo $tanggalWe; ?>;
    var rankWe = <?php echo $rankWe; ?>;

    var tanggalHs = <?php echo $tanggalHs; ?>;
    var rankHs = <?php echo $rankHs; ?>;

    var tanggalPop = <?php echo $tanggalPop; ?>;
    var rankPop = <?php echo $rankPop; ?>;

    var WeData = {
        labels: tanggalWe,
        datasets: [{
            label: 'Grafik rank',
            backgroundColor: "#FF6B6B",
            data: rankWe
        }]
    };

    var HsData = {
        labels: tanggalHs,
        datasets: [{
            label: 'Grafik rank',
            backgroundColor: "#6BCB77",
            data: rankHs
        }]
    };

    var PopData = {
        labels: tanggalPop,
        datasets: [{
            label: 'Grafik rank',
            backgroundColor: "#062C30",
            data: rankPop
        }]
    };

    window.onload = function() 
    {
        var ctx = document.getElementById("we").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'line',
            data: WeData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#c1c1c1',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Per tanggal'
                }
            }
        });

        var cty = document.getElementById("hs").getContext("2d");
        window.myBar = new Chart(cty, {
            type: 'bar',
            data: HsData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#6BCB77',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Per tanggal'
                }
            }
        });

        var cty = document.getElementById("pop").getContext("2d");
        window.myBar = new Chart(cty, {
            type: 'bar',
            data: PopData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#062C30',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Per tanggal'
                }
            }
        });
    };
</script>