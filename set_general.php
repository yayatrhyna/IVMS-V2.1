<!DOCTYPE html>
<html>
<?php
include "configuration/config_include.php";
etc();encryption();session();connect();head();body();timing();
//alltotal();
//pagination();
?>

<?php
if (!login_check()) {
?>
<meta http-equiv="refresh" content="0; url=logout" />
<?php
exit(0);
}
?>
<div class="wrapper">
<?php
theader();
menu();
?>
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
</section>
                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <!-- ./col -->

<!-- SETTING START-->

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "configuration/config_chmod.php";
$halaman = "index"; // halaman
$dataapa = "Dashboard"; // data
$tabeldatabase = "index"; // tabel database
$chmod = $chmenu10; // Hak akses Menu
$forward = mysqli_real_escape_string($conn, $tabeldatabase); // tabel database
$forwardpage = mysqli_real_escape_string($conn, $halaman); // halaman
$search = $_POST['search'];
?>

<!-- SETTING STOP -->
       <!-- BOX INFORMASI -->
    <?php
if ($chmod>= 2 || $_SESSION['jabatan'] == 'admin') {
  ?>

<!-- BREADCRUMB -->
<div class="col-lg-12">
<ol class="breadcrumb ">
<li><a href="#">Setting</a></li>
</ol>
</div>

<!-- BREADCRUMB -->


                   <?php
 $sql="select * from backset";
                  $hasil2 = mysqli_query($conn,$sql);
                  while ($fill = mysqli_fetch_assoc($hasil2)){

  $url = $fill['url'];
  $session = $fill['sessiontime'];
  $footer = $fill['footer'];
  $checkbox = $fill['responsive'];
    $pre = $fill['prefikbarcode'];

          }

          $sql1="select * from data";
                           $hasil2 = mysqli_query($conn,$sql1);
                           while ($fill = mysqli_fetch_assoc($hasil2)){

          $nama = $fill['nama'];
          $alamat = $fill['alamat'];
          $notelp = $fill['notelp'];
          $tagline = $fill['tagline'];
          $signature = $fill['signature'];
          $avatar = $fill['avatar'];
                  }
?>

                                <!-- /.box-body -->
<?php 

 if(isset($_POST["truncate"])){
       if($_SERVER["REQUEST_METHOD"] == "POST"){

$user = $_SESSION['username'];

$sql = "SELECT userna_me FROM user where userna_me = '$user' ";

$result=mysqli_query($conn,$sql);

                  if(mysqli_num_rows($result)>0){

$trun1 = mysqli_query($conn, 'TRUNCATE TABLE barang ');
$trun2 = mysqli_query($conn, 'TRUNCATE TABLE brand ');
$trun3 = mysqli_query($conn, 'TRUNCATE TABLE kategori ');
$trun4 = mysqli_query($conn, 'TRUNCATE TABLE mutasi ');
$trun5 = mysqli_query($conn, 'TRUNCATE TABLE supplier ');
$trun6 = mysqli_query($conn, 'TRUNCATE TABLE stok_keluar ');
$trun7 = mysqli_query($conn, 'TRUNCATE TABLE stok_keluar_daftar ');
$trun8 = mysqli_query($conn, 'TRUNCATE TABLE stok_masuk');
$trun9 = mysqli_query($conn, 'TRUNCATE TABLE stok_masuk_daftar');
$trun10 = mysqli_query($conn, 'TRUNCATE TABLE stok_sesuai');
$trun11 = mysqli_query($conn, 'TRUNCATE TABLE stok_sesuai_daftar');
$trun12 = mysqli_query($conn, 'TRUNCATE TABLE pelanggan');
$trun13 = mysqli_query($conn, 'TRUNCATE TABLE surat');


if ($trun13){
   echo "<script type='text/javascript'>  alert('Berhasil, Data telah direset permanen!'); </script>";
              echo "<script type='text/javascript'>window.location = 'set_general';</script>";
   

} else {  echo "<script type='text/javascript'>  alert('GAGAL, Data Aplikasi gagal di reset seluruhnya. Terjadi kesalahan dalam proses reset. Ulangi lagi dan pastikan internet anda stabil');</script>";}

                    } else {
                        echo "<script type='text/javascript'>  alert('GAGAL, Data telah di RESET Sebelumnya dan belum ada perubahaan sejak itu!'); </script>";
              echo "<script type='text/javascript'>window.location = 'set_general';</script>";
                    }
} }


?>
                        <!-- ./col -->

                </div>


                <div class="row">
                <?php if( $chmod>= 3 || $_SESSION['jabatan'] =='admin'){ ?>
                <div class="col-lg-6">
               <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Application Setting</h3>
            </div>

                                <div class="box-body">

                            <form class="form-horizontal" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label for="url" class="col-sm-2 control-label">Url Aplikasi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="url" name="url" placeholder="http diperlukan" value="<?php echo $url; ?>" maxlength="100"><b></b> <br>
                  </div>
                </div>

                <div class="form-group">
                  <label for="session" class="col-sm-2 control-label">Session</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="session" name="session" placeholder="Waktu Session dalam Menit" value="<?php echo $session; ?>" maxlength="4">
                  </div>
                </div>

                <div class="form-group">
                  <label for="footer" class="col-sm-2 control-label">CP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="footer" name="footer" placeholder="Input CP" value="<?php echo $footer; ?>" maxlength="50">
                  </div>
                </div>


                <div class="form-group">
                  <label for="footer" class="col-sm-2 control-label">Prefiks (Barcode & SKU)</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="prefiks" name="prefiks" placeholder="Masukkan Awalan barcode" value="<?php echo $pre; ?>" maxlength="50">
                  </div>
                </div>



        <div class="form-group">
         <label for="checkbox" class="col-sm-2 control-label">Responsive</label>
                  <div class="col-sm-10">
                    <div class="checkbox">
                      <label>
            <?php if($checkbox == '0'){?>
            <input type="checkbox" id="checkbox" name="checkbox" value="0" checked> Buat Theme jadi Responsive
            <?php }else{ ?>
                        <input type="checkbox" id="checkbox" name="checkbox" value="0"> Buat Theme jadi Responsive
            <?php } ?>
                      </label>
                    </div>
                  </div>
          </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default pull-right btn-flat" name="simpan"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
      <?php


if(isset($_POST['simpan'])){
       if($_SERVER["REQUEST_METHOD"] == "POST"){
  $url = $session = $footer = $checkbox = "";
  $url = $_POST['url'];
  $session = $_POST['session'];
  $footer = $_POST['footer'];
  $checkbox = $_POST['checkbox'];
   $pre = $_POST['prefiks'];

  if(!isset($_POST["checkbox"])){
    $checkbox = '1';
  }

           $sql="select * from backset";
                  $result=mysqli_query($conn,$sql);

              if(mysqli_num_rows($result)>0){

           $sql1 = "update backset set url='$url', sessiontime='$session', footer='$footer', responsive='$checkbox', prefikbarcode='$pre'";
             $result = mysqli_query($conn, $sql1);
             echo "<script type='text/javascript'>  alert('Berhasil, Data telah disimpan!'); </script>";
             echo "<script type='text/javascript'>window.location = 'set_general';</script>";
        }else{
                $sql1 = "insert into backset (url,sessiontime,footer,responsive) values('$url','$session','$footer','$checkbox')";
              $result = mysqli_query($conn, $sql1);
              echo "<script type='text/javascript'>  alert('Berhasil, Data telah disimpan!'); </script>";
              echo "<script type='text/javascript'>window.location = 'set_general';</script>";
        }
          }
       }
          ?>

                </div>

                                <!-- /.box-body -->

                            </div>
              </div>

              <div class="col-lg-6">
             <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Pengaturan Umum</h3>
          </div>

                              <div class="box-body">

                          <form class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="box-body">


              <?php if($avatar == null || $avatar == ""){ ?>

                      <div class="form-group" >
                        <label for="avatar" class="col-sm-2 control-label">Logo:</label>
                        <div class="col-sm-10">
                          <input type="file" name="avatar">
                        </div>
                      </div>

              <?php }else{ ?>

                          <div class="form-group" >
                            <label for="avatar" class="col-sm-2 control-label">Logo:</label>
                            <div class="col-sm-10">
                              <div class="col-sm-10">
              <img src="<?php echo $avatar; ?>" class="img-rounded" alt="Image" width="100%" height="100%">
              <input type="file" name="avatar">
            </div>
            </div>
            </div>
            <?php }?>

              <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" value="<?php echo $nama; ?>" maxlength="100">
                </div>
              </div>

              <div class="form-group">
                <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Lengkap" value="<?php echo $alamat; ?>" maxlength="255">
                </div>
              </div>

              <div class="form-group">
                <label for="notelp" class="col-sm-2 control-label">No Telepon</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Masukkan No Telepon" value="<?php echo $notelp; ?>" maxlength="20">
                </div>
              </div>

              <div class="form-group">
                <label for="tagline" class="col-sm-2 control-label">Tag pada surat</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="tagline" name="tagline" placeholder="Masukkan Tag Line" value="<?php echo $tagline; ?>" maxlength="100">
                </div>
              </div>

              <div class="form-group">
                <label for="signature" class="col-sm-2 control-label">Signature</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="3" id="signature" name="signature" maxlength="255" placeholder="Masukan Signature" required><?php echo $signature; ?></textarea>
                </div>
              </div>


            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-default pull-right btn-flat" name="simpan2"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
            </div>
            <!-- /.box-footer -->
          </form>
    <?php

if(isset($_POST['simpan2'])){
     if($_SERVER["REQUEST_METHOD"] == "POST"){
$nama = $alamat = $notelp = $tagline = $signature= $avatar="";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$tagline = $_POST['tagline'];
$signature = $_POST['signature'];

$namaavatar = $_FILES['avatar']['name'];
$ukuranavatar = $_FILES['avatar']['size'];
$tipeavatar = $_FILES['avatar']['type'];
$tmp = $_FILES['avatar']['tmp_name'];
$avatar = "dist/upload/".$namaavatar;
$sql="select * from data";
       $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0){

     if(mysqli_num_rows($result)>0){
 if((($tipeavatar == "image/jpeg" || $tipeavatar == "image/png") && ($ukuranavatar <= 10000000)) && ($chmod >= 3 || $_SESSION['jabatan'] == 'admin')){
         move_uploaded_file($tmp, $avatar);
         $sql1 = "update data set nama='$nama', alamat='$alamat', notelp='$notelp', tagline='$tagline', signature='$signature', avatar='$avatar'";
         $updatean = mysqli_query($conn, $sql1);
         echo "<script type='text/javascript'>  alert('Berhasil, Data berhasil diupdate!');</script>";
         echo "<script type='text/javascript'>window.location = 'set_general';</script>";

 }else if($chmod >= 3 || $_SESSION['jabatan'] == 'admin'){
       $avatar = "dist/upload/index.jpg";
       $sql1 = "update data set nama='$nama', alamat='$alamat', notelp='$notelp', tagline='$tagline', signature='$signature', avatar='$avatar'";
       $updatean = mysqli_query($conn, $sql1);
       echo "<script type='text/javascript'>  alert('Berhasil, Data berhasil diupdate!');</script>";
       echo "<script type='text/javascript'>window.location = 'set_general';</script>";

       echo "<script type='text/javascript'>window.location = 'set_general';</script>";
}else{
 echo "<script type='text/javascript'>  alert('Gagal!');</script>";

 }
}
else if((($tipeavatar == "image/jpeg" || $tipeavatar == "image/png") && ($ukuranavatar <= 10000000)) && ( $chmod >= 2 || $_SESSION['jabatan'] == 'admin')){
  move_uploaded_file($tmp, $avatar);
  $sql2 = "insert into data (nama, alamat, notelp, tagline, signature) values('$nama','$alamat','$notelp','$tagline','$signature','$avatar')";
  $insertan = mysqli_query($conn, $sql2);
  echo "<script type='text/javascript'>  alert('Berhasil, Data berhasil ditambahkan!');</script>";
  echo "<script type='text/javascript'>window.location = 'set_general';</script>";
}else {
  $avatar = "dist/upload/index.jpg";
  $sql2 = "insert into data (nama, alamat, notelp, tagline, signature) values('$nama','$alamat','$notelp','$tagline','$signature','$avatar')";
  $insertan = mysqli_query($conn, $sql2);
  echo "<script type='text/javascript'>  alert('Berhasil, Data berhasil ditambahkan!');</script>";
  echo "<script type='text/javascript'>window.location = 'set_general';</script>";
}
}
}
}

        ?>

              </div>

                              <!-- /.box-body -->

                          </div>
            </div>

              <?php } ?>

                                <!-- /.box-body -->
                            </div>


                            <div class="row">

 <div class="col-lg-6">
             <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Data Aplikasi</h3>
          </div>

                              <div class="box-body">

                                <h4>Klik Tombol dibawah untuk melakukan reset terhadap data aplikasi, data barang, data transaksi dan data lainnya yang pernah di input user akan dihapus. Reset akan bersifat permanen dan tidak bisa di kembalikan</h4><br>

                                <form method="post" action="set_general">
          <button name="truncate" type="submit" class="btn bg-maroon pull-left">RESET DATA APLIKASI</button>
        </form>


                              </div>
                            </div>

                          </div>
                            </div>
<!-- TIMER -->

<!-- /.TIMER -->

<?php
} else {
?>
   <div class="callout callout-danger">
    <h4>Info</h4>
    <b>Hanya user tertentu yang dapat mengakses halaman <?php echo $dataapa;?> ini .</b>
    </div>
    <?php
}
?>
            <!-- BATAS -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                    </div>
                    <!-- /.row (main row) -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
                   <?php footer();?>
            <div class="control-sidebar-bg"></div>
        </div>
              <script src="dist/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="libs/1.11.4-jquery-ui.min.js"></script>
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
     <script src="dist/sweet/js/sweetalert2.min.js"></script>
    </body>
</html>
