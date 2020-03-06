<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Vouchers</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lrsjng.jquery-qrcode/0.14.0/jquery-qrcode.min.js"
        type="text/javascript"></script>
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
                margin-left: auto;
                margin-right: auto;
            }
        }

        @media screen {

            html,
            body {
                width: 800px;
            }
        }

        body {
            padding: 20px;
            margin: 0;
            margin-left: auto;
            margin-right: auto;
            font-size: 12px;
            font-family: Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
        }

        #main-wrap {
            background-color: #fff;
            height: 180px;
            text-align: left;
            display: inline-block;
        }

        #main-wrap>div {
            height: 180px;
        }

        #main-wrap {
            width: 39%;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #inner {
            background: url("https://3.bp.blogspot.com/-7CzN7S71Bak/W3rrXxt6WpI/AAAAAAAAPB8/ad8I__8yBsMCE7IekJbb6t_-yAUjKcTogCLcBGAs/s1600/q4.png") no-repeat;
            width: 286px;
            height: 174px;
            padding: 0px;
        }

        #hotspot-name {
            padding-left: 15px;
            color: #fff;
            font-size: 11px;
            font-weight: bold;
        }

        #user-pass {
            padding-top: 4px;
            padding-left: 10px;
            font-size: 11px;
            font-weight: bold;
            color: #000;
            margin-top: 5px;
            padding-bottom: 2px;
            font-weight: bold;
        }

        #price {
            width: 286px;
            height: 25px;
            padding: 0px;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            display: inline-block;
        }

        #kanan {
            padding-top: 6px;
            padding-left: 5px;
            text-align: center;
            font-size: 12px;
            font-weight: bold;
            color: #fff;
        }

        #info {
            padding-top: 12px;
            padding-right: 5px;
            text-align: right;
            font-size: 11px;
            font-weight: bold;
            color: #fff;
        }

        #kontak {
            padding-top: 15px;
            padding-right: 5px;
            text-align: right;
            font-size: 11px;
            font-weight: bold;
            color: #fff;
        }

        .qrcode {
            padding-top: 5px;
            padding-left: 10px;
        }

        .left-half {
            color: #000;
            float: left;
            width: 50%;
        }

        .right-half {
            color: #000;
            float: left;
            width: 50%;
        }

    </style>
</head>

<body>

    <div id="main-wrap">
        <div id="inner">
            <div id="price">
                <div style="padding:5px 5px 5px 10px">Free Wifi</div>
            </div>
            <div class="left-half">
                <div id="user-pass">
                    User: Test<br>
                    Pass: Test<br>
                </div>
                <div class="qrcode" id="5g2hOe"></div>
                <script>
                    jQuery(function () {
                        jQuery('#5g2hOe').qrcode({
                            "render": 'canvas',
                            "size": 100,
                            "minVersion": 5,
                            "maxVersion": 5,
                            "ecLevel": 'L',
                            "mode": 0,
                            "text": "http://hotspot.tapangpass-loka.id/login?username=5g2hOe&password=OJWQmE",
                            "quiet": 0,
                        });
                    })

                </script>
            </div>
            <div class="right-half">
                <div id="kanan">
                    <br>
                    Tapangpass HOTSPOT<br>
                </div>
                <div id="info">
                    <u>tapangpass-loka.id</u><br><br>
                    Duration: 1d (1 Hari)<br>
                    Shared: 1 User<br>
                </div>
                <div id="kontak">
                    CP: 082260879023
                </div>
            </div>
        </div>
    </div>
</body>

</html>
