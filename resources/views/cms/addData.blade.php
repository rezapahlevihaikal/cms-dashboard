<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
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
            <span class="navbar-toggler-icon">
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
            </span>
            
        </button>
        
    </div>
</nav>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Tambah Data</div>
                    <div class="card-body">
                        <form action="{{route('cms.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <p>Tanggal</p>
                                    <input id="startDate" class="form-control" type="date" name="tanggal"/>
                                    <span id="dateSelected"></span>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 10px">
                                <div class="col">
                                    <p>Warta Ekonomi</p>
                                    <input type="text" class="form-control" aria-label="" name="we">
                                  </div>    
                                <div class="col">
                                    <p>HerStory</p>
                                    <input type="text" class="form-control" aria-label="" name="hs">
                                </div>
                                <div class="col">
                                  <p>Populis</p>
                                  <input type="text" class="form-control" aria-label="" name="populis">
                                </div>
                                <div class="col">
                                    <p>Topcore</p>
                                    <input type="text" class="form-control" aria-label="" name="topcore">
                                </div>
                                <div class="col">
                                    <p>Warta Ekonomi TV</p>
                                    <input type="text" class="form-control" aria-label="" name="we_tv">
                                </div>
                            </div>
                            <div class="row" style="padding-top: 10px">
                                <div class="col">
                                  <p>WE Nilai</p>
                                  <input type="text" class="form-control" aria-label="" name="we_nilai">
                                </div>
                                <div class="col">
                                    <p>HS Nilai</p>
                                    <input type="text" class="form-control" aria-label="" name="hs_nilai">
                                </div>
                                <div class="col">
                                    <p>Populis Nilai</p>
                                    <input type="text" class="form-control" aria-label="" name="populis_nilai">
                                </div>
                                <div class="col">
                                    <p>Topcore Nilai</p>
                                    <input type="text" class="form-control" aria-label="" name="tc_nilai">
                                </div>
                                <div class="col">
                                    <p>WE TV Nilai</p>
                                    <input type="text" class="form-control" aria-label="" name="tv_nilai">
                                </div>
                            </div>
                            <div class="form-group">
                                <br>
                                <button onclick="window.location='{{url('/cms')}}'" class="btn btn-outline-success" type="button" >Back</button>
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 