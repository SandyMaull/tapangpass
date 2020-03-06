<!-- Navigation -->
<nav class="navbar navbar-expand-md sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('assets/tapangpass/img/tapangpass.jpeg') }}" width="50px"
                height="50px">
        </a>
            {{-- <img src="{{ asset('assets/img/ft.png') }}" width="50px" height="50px">
            <img src="{{ asset('assets/img/bem.png') }}" width="50px" height="50px"></a> --}}
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/about')}}">About</a>
                </li>
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
