@extends('Admin.include.generate-app')
<!--- Salin kode di bawah ini ke kode HTML ROW -->
@section('body')
@foreach ($data as $dt)
<div class="canvas">
    <div class="row">
        <div class="tittle">
        </div>
        <div class="konten">
            <p>Total Quota <span class="a">: 2 Gigabyte</span></p>
            <p>Limit <span class="b">: 1 Perangkat</span></p>
            <div class="footer">
                <h4>Kuronekosan</h4>
                <h4>0822 6087 9023</h4>
            </div>
        </div>
        <div class="user">
            <div class="abs">
                <p>USER</p>
                <p>PASS</p>
            </div>
            <div class="abr">
                <p>{{$dt['username']}}</p>
                <p>{{$dt['password']}}</p>
            </div>
            <div class="qrcode" id="ujank{{$loop->iteration}}">
            </div>
        </div>
    </div>
    <div class="side">
        <p>Rp.4000</p>
    </div>
</div>
<script>
    jQuery(function () {
        jQuery('#ujank{{$loop->iteration}}').qrcode({
            "render": 'canvas',
            "size": 62,
            "minVersion": 5,
            "maxVersion": 5,
            "ecLevel": 'L',
            "mode": 0,
            "text": "http://icancell.hotspot.net/login?username={{$dt['username']}}&password={{$dt['password']}}",
            "quiet": 0,
        });
    })

</script>
@endforeach

@endsection
