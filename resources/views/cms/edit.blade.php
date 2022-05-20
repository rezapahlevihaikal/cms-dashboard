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
                    <div class="card-header">Edit Data</div>
                    <div class="card-body">
                        <form action="{{route('cms.update', $dataCms->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-12">
                                    <p>Tanggal</p>
                                    <input id="startDate" class="form-control" type="date" name="tanggal" value="{{$dataCms->tanggal}}"/>
                                    <span id="dateSelected"></span>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 10px">
                                <div class="col">
                                    <p>Warta Ekonomi</p>
                                    <input type="text" class="form-control" aria-label="" name="we" value="{{$dataCms->we}}">
                                  </div>    
                                <div class="col">
                                    <p>HerStory</p>
                                    <input type="text" class="form-control" aria-label="" name="hs" value="{{$dataCms->hs}}">
                                </div>
                                <div class="col">
                                  <p>Populis</p>
                                  <input type="text" class="form-control" aria-label="" name="populis" value="{{$dataCms->populis}}">
                                </div>
                                <div class="col">
                                    <p>Konten Jatim</p>
                                    <input type="text" class="form-control" aria-label="" name="konten_jatim" value="{{$dataCms->konten_jatim}}">
                                </div>
                                <div class="col">
                                    <p>Warta Ekonomi TV</p>
                                    <input type="text" class="form-control" aria-label="" name="we_tv" value="{{$dataCms->we_tv}}">
                                </div>
                            </div>
                            <div class="row" style="padding-top: 10px">
                                <div class="col">
                                  <p>WE Nilai</p>
                                  <input type="text" class="form-control" aria-label="" name="we_nilai" value="{{$dataCms->we_nilai}}">
                                </div>
                                <div class="col">
                                    <p>HS Nilai</p>
                                    <input type="text" class="form-control" aria-label="" name="hs_nilai" value="{{$dataCms->hs_nilai}}">
                                </div>
                                <div class="col">
                                    <p>Populis Nilai</p>
                                    <input type="text" class="form-control" aria-label="" name="populis_nilai" value="{{$dataCms->populis_nilai}}">
                                </div>
                                <div class="col">
                                    <p>Konten Jatim Nilai</p>
                                    <input type="text" class="form-control" aria-label="" name="konten_jatim_nilai" value="{{$dataCms->konten_jatim_nilai}}">
                                </div>
                                <div class="col">
                                    <p>WE TV Nilai</p>
                                    <input type="text" class="form-control" aria-label="" name="tv_nilai" value="{{$dataCms->tv_nilai}}">
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