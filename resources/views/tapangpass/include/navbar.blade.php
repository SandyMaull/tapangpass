<!-- Navigation -->
<nav class="navbar navbar-expand-md sticky-top">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('assets/img/univ.png') }}" width="50px"
                height="50px"> --}}
            {{-- <img src="{{ asset('assets/img/ft.png') }}" width="50px" height="50px">
            <img src="{{ asset('assets/img/bem.png') }}" width="50px" height="50px"></a> --}}
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/bemftuts')}}">About</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Bidang dan Departemen
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{url('/BPH')}}">BPH</a>
                        <a class="dropdown-item" href="{{url('/Internal')}}">Internal</a>
                        <a class="dropdown-item" href="{{url('/Relasi')}}">Relasi</a>
                        <a class="dropdown-item" href="{{url('/Sospol')}}">Sospol</a>
                        <a class="dropdown-item" href="{{url('/Medinfo')}}">Medinfo</a>
                        <a class="dropdown-item" href="{{url('/Ekraf')}}">Ekraf</a>
                    </div>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/Galeri')}}">Photo Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/login')}}">Log in</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
