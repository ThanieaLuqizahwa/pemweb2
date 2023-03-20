

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PrakWeb-2</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/thaniea.jpeg" class="img-circle elevation-2" alt="Thaniea">
        </div>
        <div class="info">
          <a href="#" class="d-block">Thaniea Luqizahwa</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="prak1.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="prak2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="prak3.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- content praktikum3 -->
<!-- panggil file navbar -->
<!-- panggil file sidebar -->
<?php
include_once('navbar.php');
include_once('sidebar.php');
?>
<!-- isi content -->

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Form Register IT Club</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Praktikum 3</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi IT Club</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h4 style="text-align: center;">Form Registrasi IT Club</h4>
        <hr>
        <!-- code buka form -->
        <form method="POST" action="">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Siswa</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L">
                    <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P">
                    <label for="jk_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
  <div class="form-group row">
            <label for="studi" class="col-4 col-form-label">Program Studi</label>
            <div class="col-8">
                <select id="studi" name="studi" class="custom-select">
                    <option value="TI">Teknik Informatika</option>
                    <option value="SI">Sistem Informasi</option>
                    <option value="BD">Bisnis Digital</option>
                </select>
            </div>
        </div>
  <div class="form-group row">
    <label class="col-4">skill</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="skill[]_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="skill[]_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="javascript"> 
        <label for="skill[]_2" class="custom-control-label">JAVASCRIPT</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="php"> 
        <label for="skill[]_3" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="bootstrap"> 
        <label for="skill[]_4" class="custom-control-label">BOOTSTRAP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="python"> 
        <label for="skill[]_5" class="custom-control-label">PYTHON</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="java"> 
        <label for="skill[]_6" class="custom-control-label">JAVA</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
            <label for="domi" class="col-4 col-form-label">Tempat Domisili</label>
            <div class="col-8">
                <select id="domi" name="domi" class="custom-select">
                    <option value="Jakarta">Jakarta</option>
                    <option value="Depok">Depok</option>
                    <option value="Bogor">Bogor</option>
                    <option value="Tanggerang">Tanggerang</option>
                    <option value="Bekasi">Bekasi</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
        </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">E-MAIL</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<!-- code tutup form -->
    </div>
</body>
</html>
<?php
// ambil data yang diinputkan user berdasarkan unique name
// gunakan fungsi isset untuk memeriksa apakah suatu variabel sudah atur atau belum
// fungsi isset mengembalikan nilai FALSE jika ada variabel yang berisi nilai NULL

if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $studi = $_POST['studi'];
    $skill = $_POST['skill'];

    $nilai = 0;
    foreach ($skill as $value){
            switch ($value){
                case 'html' :
                    $nilai += 10;
                    break;
                case 'css' :
                    $nilai += 10;
                    break;
                case 'javascript' :
                    $nilai += 20;
                    break;
                case 'bootstrap' :
                    $nilai += 20;
                    break;
                case 'php' :
                    $nilai += 30;
                    break;
                case 'phyton' :
                    $nilai += 30;
                    break;
                case 'java' :
                    $nilai += 50;
                    break;
                default :
                $nilai += 0;
                break;
            }
    }
}
?>

<?php
// cetak hasil register
echo "<h4>Hasil : </h4>";
echo "Nama : $nama ";
echo "<br/>NIM : $nim ";
echo "<br/>Jenis Kelamin : $jk ";
echo "<br/>Program Studi : $studi ";
echo "<br/> Skill : ";
foreach ($skill as $value){
    echo $value . " , ";
}
echo "<br/> Skor Nilai : $nilai ";
?>

<!-- cetak predikat -->
<?php
function predikat($nilai){
    if($nilai >= 100){
        return 'Sangat Baik';
    }elseif($nilai >= 60){
        return 'Baik';
    }elseif($nilai >= 40){
        return 'Cukup';
    }elseif($nilai >= 0){
        return 'Kurang';
    }else{
        return "Tidak Memadai";
    }
}
$predikat = predikat($nilai);
echo "<br/> Grade : $predikat ";
// echo "<br/>Tempat Domisili : $domi ";
echo "<br/>E-MAIL : $email ";
?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- panggil file footer -->
<?php
include_once('footer.php');
?>
<!-- tutup content -->