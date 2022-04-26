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
                        <form action="{{route('events.storeEvents')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <p>Tanggal</p>
                                    <input id="startDate" class="form-control" type="date" name="tanggal" required/>
                                    <span id="dateSelected"></span>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 10px">
                                <div class="col">
                                    <p>Start Time</p>
                                    <input id="startDate" class="form-control" type="time" name="start_time" required/>
                                  </div>    
                                <div class="col">
                                    <p>Finish Time</p>
                                    <input id="startDate" class="form-control" type="time" name="finish_time" required/>
                                </div>
                                <div class="col">
                                    <p>Venue</p>
                                    <input type="text" class="form-control" name="venue" required>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 10px">
                                <div class="col">
                                    <p>Deskripsi</p>
                                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" name="deskripsi" required></textarea>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 10px">
                                <div class="col">
                                    <label for="demo_overview_minimal">Kategori</label>
                                    <select id="demo_overview_minimal" class="form-control" data-role="select-dropdown" data-profile="minimal" name="kategori" required>
                                        <option value="Award">Award</option>
                                        <option value="Seminar">Seminar</option>
                                        <option value="Client Services">Client Service</option>
                                        <option value="Talkshow">Talkshow</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="demo_overview_minimal">PIC</label>
                                    <select id="demo_overview_minimal" class="form-control" data-role="select-dropdown" data-profile="minimal" name="pic" required>
                                        <option value="WE">WE</option>
                                        <option value="HS">HS</option>
                                        <option value="Pop">POP</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="demo_overview_minimal">Status</label>
                                    <select id="demo_overview_minimal" class="form-control" data-role="select-dropdown" data-profile="minimal" name="status">
                                        <option value="Start">Start</option>
                                        <option value="Progress">Progress</option>
                                        <option value="Finish">Finish</option>
                                        <option value="Tentatf">Tentatif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <br>
                                <button onclick="window.location='{{url('/events')}}'" class="btn btn-outline-success" type="button" >Back</button>
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