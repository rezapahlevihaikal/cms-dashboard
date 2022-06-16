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
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Ranks</a>
                            <div class="dropdown-menu">
                                <a href="{{ route('cms') }}" class="dropdown-item">Smiliarweb Rank</a>
                                <a href="{{ route('indexRanks') }}" class="dropdown-item">Social Media</a>
                            </div>
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
                    <div class="card-header">Tambah Data Performance</div>
                    <div class="card-body">
                        <form action="{{ route('performance.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row" style="padding-top: 10px">
                                <div class="col">
                                    <p>Divisi</p>
                                    <select id="demo_overview_minimal" class="form-control" data-role="select-dropdown" data-profile="divisi" name="divisi" value="" selected="">
                                        <option value="">Pilih Divisi</option>
                                        <option value="WE">WE</option>
                                        <option value="HS">HS</option>
                                        <option value="POPULIS">POPULIS</option>
                                        <option value="Q1 Ide">Q1</option>
                                        <option value="Q1 Revitalisasi">Q1 Revitalisasi</option>
                                    </select>
                                  </div>    
                                <div class="col">
                                    <p>Core Bisnis</p>
                                    <select id="demo_overview_minimal" class="form-control" data-role="select-dropdown" data-profile="core_bisnis" name="core_bisnis" value="" selected="">
                                        <option value="">Pilih Core Bisnis</option>
                                        <option value="Iklan WE">Iklan WE</option>
                                        <option value="Award WE">Award WE</option>
                                        <option value="Seminar Banking">Seminar Banking</option>
                                        <option value="Programatic WE">Programatic WE</option>
                                        <option value="Youtube WE">Youtube WE</option>
                                        <option value="WEA">WEA</option>
                                        <option value="Iklan HS">Iklan HS</option>
                                        <option value="Award HS">Award HS</option>
                                        <option value="Seminar HS">Seminar HS</option>
                                        <option value="Programatic HS">Programatic HS</option>
                                        <option value="Programatic Populis">Programatic Populis</option>
                                        <option value="Q1 Revitalisasi">Q1 Revitalisasi</option>
                                        <option value="Q1 Ide">Q1 Ide</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <p>Target</p>
                                    <input class="form-control" type="text" name="target" required/>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 10px">
                                <div class="col">
                                    <p>Pencapaian</p>
                                    <input type="text" class="form-control" name="pencapaian" required>
                                </div>
                                <div class="col">
                                    <p>Value</p>
                                    <input type="text" class="form-control" name="value" required>
                                </div>
                                <div class="col">
                                    <p>Tanggal</p>
                                    <input type="text" class="form-control" name="tanggal" required>
                                </div>
                                <div class="col">
                                    <p>Bulan</p>
                                    <input type="text" class="form-control" name="bulan" required>
                                </div>
                                <div class="col">
                                    <p>Tahun</p>
                                    <input type="text" class="form-control" name="tahun" required>
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
