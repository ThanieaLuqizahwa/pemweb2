

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

<!-- content praktikum1 -->
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
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Praktikum 1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <?php
$ns1 = ['id'=>1,'nim'=>01101,'uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>01102,'uts'=>90,'uas'=>90,'tugas'=>80];
$ns3 = ['id'=>3,'nim'=>01103,'uts'=>85,'uas'=>95,'tugas'=>90];
$ar_nilai = [$ns1, $ns2, $ns3];
?>
<h2 style="text-align: center;">Daftar Nilai Siswa</h2>
<!-- buat table -->
<table border="1" width="100%">
<thead>
    <tr>
    <th>No</th>
    <th>NIM</th>
    <th>UTS</th>
    <th>UAS</th>
    <th>TUGAS</th>
    <th>Nilai Akhir</th>
    </tr>
</thead>
<tbody>
    <?php
    $nomor = 1;
    foreach ($ar_nilai as $nilai){
echo '<tr><td>' .$nomor. '</td>';
echo '<td>' .$nilai['nim'].'</td>';
echo '<td>' .$nilai['uts'].'</td>';
echo '<td>' .$nilai['uas'].'</td>';
echo '<td>' .$nilai['tugas'].'</td>';
$nilai_akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas'])/3;
echo '<td>' .number_format($nilai_akhir,2,',','.').'</td>';
echo '<tr/>';
$nomor++;
    }
    ?>
</tbody>
</table>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- panggil file footer -->
<?php
include_once('footer.php');
?>
<!-- tutup content -->