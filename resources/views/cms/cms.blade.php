<!DOCTYPE html>
<html>
<head>
    <title>CMS Alexa</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
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
        <div class="bs-example" style="padding: 10px">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button onclick="window.location='{{url('cms/addData')}}'" class="btn btn-primary" type="button">Tambah Data</button>
            </div>
        </div>
        <div class="row">
            <div class="card" style="padding: 10px">
                <table id="example" class="table table-striped nowrap" style="width:100%">
                    <thead>
                        <tr style="text-align: center">
                            <th>Tanggal</th>
                            <th>Warta Ekonomi</th>
                            <th>HerStory</th>
                            <th>Populis</th>
                            <th>Topcore</th>
                            <th>WE Tv</th>
                            <th>Nilai (WE)</th>
                            <th>Nilai (HS)</th>
                            <th>Nilai (Populis)</th>
                            <th>Nilai (Topcore)</th>
                            <th>Nilai (WE TV)</th>
                            <th>Last Update</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataCms as $item)
                            <tr style="text-align: center">
                                <td><a href="{{ route('cms.edit', $item->id) }}">{{$item->tanggal}}</a></td>
                                <td>{{$item->we}}</td>
                                <td>{{$item->hs}}</td>
                                <td>{{$item->populis}}</td>
                                <td>{{$item->topcore}}</td>
                                <td>{{$item->we_tv}}</td>
                                <td>{{$item->we_nilai}}</td>
                                <td>{{$item->hs_nilai}}</td>
                                <td>{{$item->populis_nilai}}</td>
                                <td>{{$item->tc_nilai}}</td>
                                <td>{{$item->tv_nilai}}</td>
                                <td>{{$item->lastupdate}}</td>
                                <td>
                                    <form action="{{route('cms.destroy', $item->id)}}" method="post">
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
                        return 'Details for '+data[0]+' '+data[1];
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
