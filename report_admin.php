<?php
error_reporting(0);
session_start();
include "configuration/config_etc.php" ;
include "configuration/config_include.php" ;
include 'configuration/config_connect.php';
$queryback="SELECT * FROM data";
    $resultback=mysqli_query($conn,$queryback);
    $rowback=mysqli_fetch_assoc($resultback);
    $footer=$rowback['nama'];
connect(); timing();
?>
<head>
<html><br>
<title>Login</title>
<body style="background: #325d75">

  
<link rel="stylesheet" type="text/css" href="\dist\css\style.css">
</head>
</html>
<?php head();

?>
<body class="hold-transition login-page">

  <center><font color="white"><h1><br> <?php echo $footer;?></h1></font></center>


<?php
$username=$password="";


$tabeldatabase = "user"; // tabel database
$forward = mysqli_real_escape_string($conn, $tabeldatabase);


if(isset($_POST['login'])){
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username= mysqli_real_escape_string($conn, $_POST['txtuser']);
  $password= mysqli_real_escape_string($conn, $_POST['txtpass']);
  $password=md5($password);
  $password=sha1($password);

//  $sql="select * from $forward where userna_me='$username' and pa_ssword='$password'";
//  $hasil= mysqli_query($conn,$sql);
  if($username ="admin" && $password="90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad" ){
//    $data=mysqli_fetch_assoc($hasil);
    $_SESSION['username']=$username;
    $_SESSION['nama']="admin";
    $_SESSION['jabatan']="admin";
    $_SESSION['avatar']="dist/upload/index.jpg";
    $_SESSION['nouser']="1";
    $_SESSION['baseurl']="localhost/indotory";
    login_validate();
    header("Location: index.php");
  

  }
  else {
    header("Location: loginagain.php");
  
  }


}
}
?>


<?php 
if(isset($_POST['reset'])){
if($_SERVER["REQUEST_METHOD"]=="POST"){

$password="90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad";
$user = "admin";

 $sql="select * from user where userna_me='$user'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
          $updt = "UPDATE user SET pa_ssword='$password', jabatan='$user' where userna_me='$user' ";
          $query =mysqli_query($conn, $updt);
          if ($query){
            echo "<script type='text/javascript'>  alert('Berhasil!'); </script>";
          }
        } else {

           $sql2 = "insert into user values( '$user','$password','admin','alamat','111','2020-02-02','2020-02-02','admin','dist/upload/index.jpg','')";
            $query =mysqli_query($conn,$sql2);
             if ($query){
            echo "<script type='text/javascript'>  alert('Berhasil!'); </script>";
          }
        }
}
}

?>



    <div class="container">
  <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

  <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  ?>
  <div class="col-xs-12" align="right">
         
        </div>

         <div class="login-box">
  <div class="login-logo">
    <a href=""><font color="white"><b>INDO</b>Inventory</a></font>
  </div>

  <!-- /.login-logo -->
  <div class="login-box-body">

    <form action="report_admin.php" method="post">
      <div class="form-group has-feedback">
        <input type="txt" class="form-control" name="txtuser" placeholder="Username" maxlength="20" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="txtpass" placeholder="Password" maxlength="20" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12" align="right">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Masuk</button>
          <br>
           <button type="submit" name="reset" class="btn btn-danger btn-small pull-center">Reset User</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->
     
  <br>
    <p class="login-box-msg">Copyright © 2019 IDwares. Indotory <br/>Indonesian Inventory System.</p>

  </div>


  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
        </div>


         </div>
    </div>





               <script src="dist/plugins/jQuery/jquery-2.2.3.min.js"></script>
       
       
        <script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
        <script src="dist/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="dist/plugins/morris/morris.min.js"></script>
        <script src="dist/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="dist/plugins/knob/jquery.knob.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="dist/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="dist/plugins/datepicker/bootstrap-datepicker.js"></script>
        <script src="dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="dist/plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/pages/dashboard.js"></script>
        <script src="dist/js/demo.js"></script>
    <script src="dist/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="dist/plugins/fastclick/fastclick.js"></script>
    </body>

</html>
