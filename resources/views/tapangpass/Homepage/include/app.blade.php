@yield('HS-Script')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TapangPass Cafe - @yield('title')</title>
    <link nonce="4LLScR1pT1H4V3" rel="stylesheet" href="{{asset('assets/tapangpass/bootstrap.min.css')}}">
    <link nonce="4LLScR1pT1H4V3" href="{{ asset('assets/tapangpass/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link nonce="4LLScR1pT1H4V3" href="{{ asset('assets/tapangpass/owl.theme.default.min.css') }}" rel="stylesheet"/>
    <link nonce="4LLScR1pT1H4V3" href="{{ asset('assets/tapangpass/style.css') }}" rel="stylesheet">
    <link nonce="4LLScR1pT1H4V3" href="{{asset('assets/tapangpass/toastr.min.css')}}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/tapangpass/img/tapangpass.jpeg') }}" sizes="16x16">
    <style nonce="4LLScR1pT1H4V3">
        .owl-prev {
            left: -30px;
        }
        .owl-next {
            right: -30px;
        }
        .owl-prev, .owl-next {
            position: absolute;
            top: 30%;
        }
        .owl-prev span, .owl-next span {
            font-size: 60px;
            color: #787878;
        }
        .owl-theme .owl-nav [class*="owl-"]:hover {
            background-color: transparent;
        }
    </style>
</head>
<body>

    @include('tapangpass.Homepage.include.navbar')

    @yield('body')
    
    @include('tapangpass.Homepage.include.footer')
    
    <script nonce="4LLScR1pT1H4V3" src="{{ asset('assets/tapangpass/all.js')}}"></script>
    <script nonce="4LLScR1pT1H4V3" src="{{ asset('assets/tapangpass/jquery.min.js') }}"></script>
    <script nonce="4LLScR1pT1H4V3" src="{{ asset('assets/tapangpass/popper.min.js') }}"></script>
    <script nonce="4LLScR1pT1H4V3" src="{{ asset('assets/tapangpass/bootstrap.min.js') }}"></script>
    <script nonce="4LLScR1pT1H4V3" src="{{ asset('assets/tapangpass/toastr.min.js') }}"></script>
    <script nonce="4LLScR1pT1H4V3" src="{{ asset('assets/tapangpass/owl.carousel.min.js') }}"></script>
    <script nonce="4LLScR1pT1H4V3" src="{{ asset('assets/tapangpass/jquery.mousewheel.min.js') }}"></script>


    {{-- @include('template.message') --}}

    @yield('script')

</body>
</html>
