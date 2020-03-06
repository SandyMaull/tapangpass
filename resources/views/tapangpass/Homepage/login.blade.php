@extends('tapangpass.Homepage.include.app')

@section('HS-Script')
<?php
    $mac=$_GET['mac'];
    $ip=$_GET['ip'];
    $username=$_GET['username'];
    $linklogin=$_GET['link-login'];
    $linkorig=$_GET['link-orig'];
    $error=$_GET['error'];
    $trial=$_GET['trial'];
    // $loginby=$_GET['login-by'];
    $chapid=$_GET['chap-id'];
    $chapchallenge=$_GET['chap-challenge'];
    $linkloginonly=$_GET['link-login-only'];
    $linkorigesc=$_GET['link-orig-esc'];
    $macesc=$_GET['mac-esc'];
    $identity=$_GET['identity'];
    $bytesinnice=$_GET['bytes-in-nice'];
    $bytesoutnice=$_GET['bytes-out-nice'];
    $sessiontimeleft=$_GET['session-time-left'];
    $uptime=$_GET['uptime'];
    $refreshtimeout=$_GET['refresh-timeout'];   
    $linkstatus=$_GET['link-status'];  
    ?>
@endsection



@section('title')
Login Hotspot
@endsection


@section('body')

    
  <div class="container" style="height:100%;width:100%;">
    <div class="card card-login mx-auto mb-5" style="max-width:25rem;margin-top:15%;">
      <div class="card-header">
        <p>FREE WIFI TAPANGPASS CAFE</p>
        <p>Silahkan Masuk Untuk Melanjutkan..<p>
      </div>
      <div class="card-body">
          <form action="<?php echo $linkloginonly; ?>" method="POST">
              {{-- @csrf --}}
              <input type="hidden" name="dst" value="<?php echo $linkorig; ?>"/>
              <input type="hidden" name="popup" value="true"/>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputNIM" class="form-control" name="username" placeholder="Login" autofocus required>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
          <br><br>
          @if ($error != null)
            <p>
              <span style="color: #FF8080; font-size: 16px">{{$error}}</span>
            </p>
          @endif
        </form>
      </div>
    </div>
  </div>

@endsection

@section('script')
  <?php if($chapid) : ?> 
  <script type="text/javascript" src="js/md5.js"></script>
  <script type="text/javascript">
  <!--
      function doLogin() {
      <?php if(strlen($chapid) < 1) echo "return true;n"; ?>
      document.sendin.username.value = document.login.username.value;
      document.sendin.password.value = hexMD5('<?php echo $chapid; ?>' + document.login.password.value + '<?php echo $chapchallenge; ?>');
      document.sendin.submit();
      return false;
      }
  //-->
  </script>
  <?php endif; ?>
  
  <script type="text/javascript">
    document.login.username.focus();
  </script>
@endsection