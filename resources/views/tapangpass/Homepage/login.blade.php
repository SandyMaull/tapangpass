@extends('tapangpass.Homepage.include.app')

@section('HS-Script')
<?php
    $mac=$_POST['mac'];
    $ip=$_POST['ip'];
    $username=$_POST['username'];
    $linklogin=$_POST['link-login'];
    $linkorig=$_POST['link-orig'];
    $error=$_POST['error'];
    $trial=$_POST['trial'];
    $chapid=$_POST['chap-id'];
    $chapchallenge=$_POST['chap-challenge'];
    $linkloginonly=$_POST['link-login-only'];
    $linkorigesc=$_POST['link-orig-esc'];
    $macesc=$_POST['mac-esc'];
    $identity=$_POST['identity'];
    $bytesinnice=$_POST['bytes-in-nice'];
    $bytesoutnice=$_POST['bytes-out-nice'];
    $sessiontimeleft=$_POST['session-time-left'];
    $uptime=$_POST['uptime'];
    $refreshtimeout=$_POST['refresh-timeout'];   
    $linkstatus=$_POST['link-status'];  
    ?>
@endsection



@section('title')
Login Hotspot
@endsection


@section('body')

    
  <div class="container" style="height:100%;width:100%;">
    <div class="card card-login mx-auto mb-5" style="max-width:25rem;margin-top:15%;">
      <div class="card-header">
        FREE WIFI TAPANGPASS CAFE<br>
        Silahkan Masuk Untuk Melanjutkan..
      </div>
      <div class="card-body">
          <form action="<?php echo $linkloginonly; ?>" method="POST">
              {{-- @csrf --}}
              <input type="hidden" name="dst" value="<?php echo $linkorig; ?>"/>
              <input type="hidden" name="popup" value="true"/>
          <div class="form-group">
            <div class="form-label-group">
              <input style="text-transform: lowercase;" type="text" id="inputNIM" class="form-control" name="username" placeholder="Login" pattern="[a-z0-9]+" title="Masukan Format Input yang Benar, menggunakan combinasi huruf kecil dan angka jika ada, contoh: asd45s" required>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" pattern="[0-9]{3}" title="Masukan Format Input yang Benar, menggunakan combinasi angka, contoh: 234" required>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
          <br><br>
          @if ($error != null)
            <p>
              <span style="color: #FF8080; font-size: 16px">
                {{$error}}
              </span>
            </p>
          @endif
        </form>
      </div>
    </div>
  </div>

@endsection