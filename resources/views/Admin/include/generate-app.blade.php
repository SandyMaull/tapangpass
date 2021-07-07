
<!--- Salin kode di bawah ini ke kode HTML HEADER -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Generate Voucher Hotspot</title>
    <link href="https://fonts.googleapis.com/css?family=Amaranth|Coda|Mitr|Oswald|Righteous|Russo+One|Teko" rel="stylesheet">
    {{-- <script type="text/javascript" src="https://www.netme.id/js/qr/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.netme.id/js/qr/qrcode.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lrsjng.jquery-qrcode/0.14.0/jquery-qrcode.min.js" type="text/javascript"></script>
<style>@media print{.noprint{display:none}.pagebreak{page-break-after:always}}.canvas{background-image:url({{ asset('assets/tapangpass/img/voucher.jpg') }} );background-color:#DFE0E1;background-size:cover;width:227px;height:151px;margin:3px 3px 3px 3px;padding:0;float:left}body{font-family:'Oswald',sans-serif}.row{width:200px;margin:3px 0 3px 3px;height:145px;float:left}.tittle{width:150px;height:35px}.tittle h5{line-height:15px;margin:0;font-size:15px;padding-left:21px;padding-top:5px;font-family:'Righteous',cursive}.tittle h5 span{color:#D9141A}.tittle p{margin:0;font-size:9px;line-height:8px;padding-left:21px}.konten{width:51%;height:75px;margin-top:35px;margin-left:4%;float:left}.konten p{margin:0;font-size:12px;line-height:11px;font-family:'Teko',sans-serif;color:#383635}.konten p .a{margin-left:12px}.konten p .b{margin-left:16px}.konten h5{margin:0;font-size:7px;line-height:8px;color:#D9141A;font-family:'Righteous',cursive;font-weight:400}.konten .footer{margin:22px 0 0 28px}.konten .footer h4{margin:0;font-size:10px;line-height:12px;color:#242323;font-weight:400}.user{width:45%;height:110px;float:left}.user .abs{margin:7px 0 1px 15px;width:22px;float:left}.user .abs p{margin:2px 0 1px 0;font-size:10px}.user .abr{margin:7px 0 1px 1px;width:43px;float:left}.user .abr p{margin:1.3px 0 1px 0;font-size:10px;background-color:rgba(240,133,25,.3);padding:0 0 0 2px;letter-spacing:.4px;border:.5px solid #D9141A;border-radius:4px}.side{width:23px;height:145px;float:left;margin-top:3px}.side p{margin-top:55px;margin-right:1px;color:#fff;font-size:17px;font-weight:700;font-family:'Coda',cursive;-webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);-ms-transform:rotate(90deg);-o-transform:rotate(90deg);transform:rotate(90deg)}.qrcode{width:62px;margin-top:1px;margin-left:15px;padding:2px;background-color:#fff;clear:left}</style>

</head>
<body>

    @yield('body')

</body>
</html>