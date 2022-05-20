<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
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
                    <div class="card-header">Edit Data Rank - Youtube</div>
                    <div class="card-body">
                        <form action="{{route('updateYoutube', $dataYoutube->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <p>Warta Ekonomi</p>
                                    <input id="startDate" class="form-control" type="text" name="yt_we_rank" required value="{{$dataYoutube->yt_we_rank}}"/>
                                </div>
                                <div class="col">
                                    <p>HerStory</p>
                                    <input id="startDate" class="form-control" type="text" name="yt_hs_rank" required value="{{$dataYoutube->yt_hs_rank}}"/>
                                </div>
                                <div class="col">
                                    <p>Populis</p>
                                    <input id="startDate" class="form-control" type="text" name="yt_populis_rank" required value="{{$dataYoutube->yt_populis_rank}}"/>
                                </div>
                                <div class="col">
                                    <p>Konten Jatim</p>
                                    <input id="startDate" class="form-control" type="text" name="yt_konten_jatim_rank" required value="{{$dataYoutube->yt_konten_jatim_rank}}"/>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 10px">
                                <div class="col">
                                    <p>Warta Ekonomi (Nilai)</p>
                                    <input id="startDate" class="form-control" type="text" name="yt_we_nilai" required value="{{$dataYoutube->yt_we_nilai}}"/>
                                </div>
                                <div class="col">
                                    <p>HerStory (Nilai)</p>
                                    <input id="startDate" class="form-control" type="text" name="yt_hs_nilai" required value="{{$dataYoutube->yt_hs_nilai}}"/>
                                </div>
                                <div class="col">
                                    <p>Populis (Nilai)</p>
                                    <input id="startDate" class="form-control" type="text" name="yt_populis_nilai" required value="{{$dataYoutube->yt_populis_nilai}}"/>
                                </div>
                                <div class="col">
                                    <p>Konten Jatim (Nilai)</p>
                                    <input id="startDate" class="form-control" type="text" name="yt_konten_jatim_nilai" required value="{{$dataYoutube->yt_konten_jatim_nilai}}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <br>
                                <button onclick="window.location='{{url('/socialmedia-ranks')}}'" class="btn btn-outline-success" type="button" >Back</button>
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