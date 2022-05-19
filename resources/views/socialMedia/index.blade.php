<!DOCTYPE html>
<html>
<head>
    <title>Social Media Rank</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-light navbar-expand-lg" style="background-color: #e3f2fd;">
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
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">CRM</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('companies') }}" class="dropdown-item">Companies</a>
                        <a href="{{ route('contacts') }}" class="dropdown-item">Contacts</a>
                        <a href="{{ route('deals') }}" class="dropdown-item">Deals</a>
                        <a href="{{ route('dealsAdd') }}" class="dropdown-item">Deals Add</a>
                    </div>
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
        <div class="row" style="padding-top: 40px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="panel panel-default">
                        <h5 class="card-header">Data Youtube Rank</h5>
                        <div class="panel-body">
                            <div class="bs-example" style="padding: 10px">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button onclick="window.location='{{route('addYoutube')}}'" class="btn btn-primary" type="button">Tambah Data</button>
                                </div>
                            </div>
                                <div class="card" style="padding: 10px">
                                    <table id="example" class="table table-striped nowrap" >
                                        <thead>
                                            <tr style="text-align: center">
                                                <th>Warta Ekonomi</th>
                                                <th>HerStory</th>
                                                <th>Populis </th>
                                                <th>Konten Jatim </th>
                                                <th>WE (Nilai)</th>
                                                <th>HS (Nilai)</th>
                                                <th>Populis (Nilai)</th>
                                                <th>Konten Jatim (Nilai)</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dataYoutube as $item)
                                                <tr style="text-align: center">
                                                    {{-- <td><a href="{{ route('performance.edit', $item->id) }}">{{$item->divisi}}</a></td> --}}
                                                    <td>{{$item->yt_we_rank}}</td>
                                                    <td>{{$item->yt_hs_rank}}</td>
                                                    <td>{{$item->yt_populis_rank}}</td>
                                                    <td>{{$item->yt_konten_jatim_rank}}</td>
                                                    <td>{{$item->yt_we_nilai}}</td>
                                                    <td>{{$item->yt_hs_nilai}}</td>
                                                    <td>{{$item->yt_populis_nilai}}</td>
                                                    <td>{{$item->yt_konten_jatim_nilai}}</td>
                                                    <td>
                                                        <form action="{{ route('performance.destroy', $item->id) }}" method="post">
                                                            @csrf
                                                            @method('post')
                                                           <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 40px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="panel panel-default">
                        <h5 class="card-header">Data Tiktok Rank</h5>
                        <div class="panel-body">
                            <div class="bs-example" style="padding: 10px">
                               <!-- Button trigger modal -->
                               <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button onclick="window.location='{{route('addTiktok')}}'" class="btn btn-primary" type="button">Tambah Data</button>
                            </div>             
                            </div>
                                <div class="card" style="padding: 10px">
                                    <table id="example2" class="table table-striped nowrap" >
                                        <thead>
                                            <tr style="text-align: center">
                                                <th>Warta Ekonomi</th>
                                                <th>HerStory</th>
                                                <th>Populis </th>
                                                <th>Konten Jatim </th>
                                                <th>WE (Nilai)</th>
                                                <th>HS (Nilai)</th>
                                                <th>Populis (Nilai)</th>
                                                <th>Konten Jatim (Nilai)</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dataTiktok as $item)
                                                <tr style="text-align: center">
                                                    {{-- <td><a href="{{ route('performance.edit', $item->id) }}">{{$item->divisi}}</a></td> --}}
                                                    <td>{{$item->tiktok_we_rank}}</td>
                                                    <td>{{$item->tiktok_hs_rank}}</td>
                                                    <td>{{$item->tiktok_populis_rank}}</td>
                                                    <td>{{$item->tiktok_konten_jatim_rank}}</td>
                                                    <td>{{$item->tiktok_we_nilai}}</td>
                                                    <td>{{$item->tiktok_hs_nilai}}</td>
                                                    <td>{{$item->tiktok_populis_nilai}}</td>
                                                    <td>{{$item->tiktok_konten_jatim_nilai}}</td>
                                                    <td>
                                                        <form action="{{ route('performance.destroy', $item->id) }}" method="post">
                                                            @csrf
                                                            @method('post')
                                                           <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 40px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="panel panel-default">
                        <h5 class="card-header">Data Instagram Rank</h5>
                        <div class="panel-body">
                            <div class="bs-example" style="padding: 10px">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button onclick="window.location='{{route('addInstagram')}}'" class="btn btn-primary" type="button">Tambah Data</button>
                                </div>
                            </div>
                                <div class="card" style="padding: 10px">
                                    <table id="example3" class="table table-striped nowrap" >
                                        <thead>
                                            <tr style="text-align: center">
                                                <th>Warta Ekonomi</th>
                                                <th>HerStory</th>
                                                <th>Populis </th>
                                                <th>Konten Jatim </th>
                                                <th>WE (Nilai)</th>
                                                <th>HS (Nilai)</th>
                                                <th>Populis (Nilai)</th>
                                                <th>Konten Jatim (Nilai)</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dataInstagram as $item)
                                                <tr style="text-align: center">
                                                    {{-- <td><a href="{{ route('performance.edit', $item->id) }}">{{$item->divisi}}</a></td> --}}
                                                    <td>{{$item->ig_we_rank}}</td>
                                                    <td>{{$item->ig_hs_rank}}</td>
                                                    <td>{{$item->ig_populis_rank}}</td>
                                                    <td>{{$item->ig_konten_jatim_rank}}</td>
                                                    <td>{{$item->ig_we_nilai}}</td>
                                                    <td>{{$item->ig_hs_nilai}}</td>
                                                    <td>{{$item->ig_populis_nilai}}</td>
                                                    <td>{{$item->ig_konten_jatim_nilai}}</td>
                                                    <td>
                                                        <form action="{{ route('performance.destroy', $item->id) }}" method="post">
                                                            @csrf
                                                            @method('post')
                                                           <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Detail Data';
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );
} );
</script>
<script>
    $(document).ready(function() {
    $('#example2').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Detail Data';
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );
} );
</script>
<script>
    $(document).ready(function() {
    $('#example3').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Detail Data';
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );
} );
</script>