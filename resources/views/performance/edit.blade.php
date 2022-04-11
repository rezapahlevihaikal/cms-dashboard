<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
                        <form action="{{ route('performance.update', $dataPerformance->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row" style="padding-top: 10px">
                                <div class="col">
                                    <p>Divisi</p>
                                    <input class="form-control" type="text" name="divisi" value="{{ $dataPerformance->divisi }}"/>
                                  </div>    
                                <div class="col">
                                    <p>Core Bisnis</p>
                                    <input class="form-control" type="text" name="core_bisnis" value="{{ $dataPerformance->core_bisnis }}"/>
                                </div>
                                <div class="col">
                                    <p>Pencapaian</p>
                                    <input type="text" class="form-control" name="pencapaian" value="{{ $dataPerformance->pencapaian }}">
                                </div>
                            </div>
                            <div class="row" style="padding-top: 10px">
                                <div class="col">
                                    <p>Bulan</p>
                                    <select id="demo_overview_minimal" class="form-control" data-role="select-dropdown" data-profile="minimal" name="bulan" value="" selected="">
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="OKtober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <p>Tahun</p>
                                    <select id="demo_overview_minimal" class="form-control" data-role="select-dropdown" data-profile="minimal" name="tahun" value="" selected="">
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <br>
                                <button onclick="window.location='{{url('/performance')}}'" class="btn btn-outline-success" type="button" >Back</button>
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