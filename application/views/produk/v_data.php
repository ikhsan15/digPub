<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gema Insani Digital</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
  <!-- image preview -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap-5.0.2/dist/css/bootstrap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/adminlte/dist/css/adminlte.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/v_data.css');?>">

  <link rel="icon" type="image/png" href="<?php echo base_url('/gambar/icon_gi_digital2.png');?>">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo base_url(); ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo site_url('login/logout');?>" class="nav-link">Keluar</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="<?php echo base_url('/assets/adminlte/dist/img/user1-128x128.jpg'); ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="<?php echo base_url('/assets/adminlte/dist/img/user8-128x128.jpg'); ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="<?php echo base_url('/assets/adminlte/dist/img/user3-128x128.jpg'); ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index3.html" class="brand-link">
        <img src="<?php echo base_url('/assets/adminlte/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url('/assets/adminlte/dist/img/user2-160x160.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
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
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Tables
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url('produk'); ?>" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Produk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('kategori'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kategori</p>
                  </a>
                </li>
                <?php if($this->session->userdata('access') == 'Administrator'){ ?>
                <li class="nav-item">
                  <a href="<?php echo base_url('user'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>User</p>
                  </a>
                </li>
                <?php } ?>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Produk</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Produk</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

      <!-- FORM -- START -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary shadow-none">
                <div class="card-header">
                  <h3 class="card-title">Form Tambah Data Produk</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <?php echo validation_errors(); ?>
                  <?php echo form_open_multipart('produk/f_produk/do_save/'.$produk_id); ?>
                  <!-- <form action="<php echo site_url('produk/f_produk/do_save/') ?>" method="post" enctype="mulripart/form-data"> -->
                    <div class="form-group">
                      <input type="hidden" name="produk_id" value="<?php echo $produk_id; ?>">
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Nama Penulis</label>
                        <input type="text" name="nama_penulis" class="form-control" value="<?php echo $nama_penulis; ?>" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label>E-ISBN</label>
                        <input type="text" name="eisbn" class="form-control" value="<?php echo $eisbn; ?>">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Judul IDN</label>
                        <input type="text" name="judul_idn" class="form-control" onclick=showFirstName(<?php echo $judul_idn; ?>) value="<?php echo $judul_idn; ?>" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Judul ENG</label>
                        <input type="text" name="judul_eng" class="form-control" value="<?php echo $judul_eng; ?>" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Jumlah Halaman</label>
                        <input type="text" name="halaman" class="form-control" value="<?php echo $halaman; ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Ukuran (cm)</label>
                        <input type="text" name="ukuran" class="form-control" value="<?php echo $ukuran; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Link Google Play</label>
                      <input type="text" name="link_gplay" class="form-control" value="<?php echo $link_gplay; ?>">
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>kategori idn</label>
                        <select class="form-control" name="kategori_idn">
                          <?php
                            foreach($kategori_idn as $k){
                              if(!empty($produk_id)){
                                echo "<option value='$k->kategori_id'";
                                echo $record['kategori_idn'] == $k->kategori_id ? 'selected' : '';
                                echo ">$k->nama_kategori_idn</option>";
                              }else{
                                echo "<option value='$k->kategori_id'";
                                echo ">$k->nama_kategori_idn</option>";
                              }
                              
                            }
                          ?>
                          </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Terlaris</label>
                        <label>
                          <input type="radio" id="iya" name="terlaris" value="Iya" <?= $produk_id == 0 ? "" : ($terlaris == "Iya" ? "checked" : "") ?> required />
                          Iya
                        </label>
                        <label>
                          <input type="radio" id="tidak" name="terlaris" value="Tidak" <?= $produk_id == 0 ? "" : ($terlaris == "Tidak" ? "checked" : "") ?> required/>
                          tidak
                        </label>
                      </div>
                      
                    </div>
                    <div class="card card-info">
                      <div class="card-header">
                        <h3 class="card-title"><i class="icon fas fa-info"></i>&emsp;Sinopsis</h3>
                      </div>
                      <div class="card-body">
                        <code>Gunakan <'br'> (tanpa tanda ') di akhir paragraf untuk memulai paragraf baru.</code>
                        <br>
                        <div class="card-body">
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label>Sinopsis IDN</label>
                              <textarea class="form-control" rows="3" name="sinopsis_idn"><?php echo $sinopsis_idn; ?></textarea>
                            </div>
                            <div class="form-group col-md-6">
                              <label>Sinopsis ENG</label>
                              <textarea class="form-control" rows="3" name="sinopsis_eng"><?php echo $sinopsis_eng; ?></textarea>
                            </div>
                          </div>
                        </div>
                      </div>                   
                    </div>
                    <div class="card card-info">
                      <div class="card-header">
                        <h3 class="card-title"><i class="icon fas fa-info"></i>&emsp;Link YT</h3>
                      </div>
                      <div class="card-body">
                        Benar : https://youtube.com/embed/yZTjTN-ilFI
                        <br>
                        <code>Salah : https://youtu.be/yZTjTN-ilFI</code> 
                        <br>
                        <div class="card-body">
                          <input type="text" name="link_yt" class="form-control" value="<?php echo $link_yt; ?>">
                        </div>
                      </div>                      
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-9">
                          <label for="exampleInputFile">Cover</label>
                          <br>
                          <!-- <code>*Nama file harus tanpa spasi</code> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="userfile" name="userfile" onchange="readURL(this);">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <br>
                          <img id="cover" class="rounded float-end" class="img-thumbnail" width="70%" 
                            <?php
                              if(!empty($record['cover_img'])){
                            ?>
                                src="<?php echo base_url() ?>./gambar/cover/<?php echo $record['cover_img'] ?>"
                            <?php
                              }else{
                            ?>
                              src="https://img.icons8.com/wired/64/000000/no-image.png" 
                            <?php 
                              }
                            ?>
                            alt="image cover" />
                        </div>
                      </div>
                    </div>
                    <div class="box-footer" align="center">
                      <input type="submit" class="btn btn-block btn-outline-primary" style="width:100px;" value="Submit">
                      <input type="reset" class="btn btn-block btn-outline-warning" style="width:100px;" value="Reset" onclick="location.href='<?php echo base_url('produk'); ?>'">
                    </div>

                  </form>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- FORM -- END -->

      <!-- DATA TABLE -- START -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-primary shadow-none">
                <div class="card-header">
                  <h3 class="card-title">Data Produk</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <button><?php echo anchor('produk/print_excel', 'Export Excel') ?></button>
                  <!-- <table id="example1" class="table table-bordered"> -->
                  <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No. </th>
                        <th>Penulis</th>
                        <th>Judul IDN</th>
                        <th>Judul ENG</th>
                        <th>E-ISBN</th>
                        <th>Terlaris</th>
                        <th>Halaman</th>
                        <th>Ukuran</th>
                        <th>Kategori</th>
                        <th>Cover</th>
                        <th>Cover Size</th>
                        <th>Url GPlay</th>
                        <th>Url YT</th>
                        <th>Sinopsis IDN</th>
                        <th>Sinopsis ENG</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                        $no = 1;
                        foreach ($rec_prod->result() as $r){
                      ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $r->nama_penulis ?></td>
                          <td><?php echo $r->judul_idn ?></td>
                          <td><?php echo $r->judul_eng ?></td>
                          <td><?php echo $r->eisbn ?></td>                          
                          <td><?php echo $r->terlaris ?></td>
                          <td><?php echo $r->halaman ?></td>
                          <td><?php echo $r->ukuran ?></td>
                          <td><?php echo $r->nama_kategori_idn ?></td>
                          <td>
                            <?php if(!empty($r->cover_img)){ ?>
                              <img src="<?php echo base_url().'./gambar/cover/'.$r->cover_img; ?>" class="img-thumbnail" width="70px" height="70px">
                            <?php }else{ ?>
                              <img src="https://img.icons8.com/wired/64/000000/no-image.png"  class="img-thumbnail" width="70px" height="70px">
                            <?php } ?>
                          </td>
                          <td><?php echo $r->cover_size ?></td>
                          <td><?php echo $r->link_gplay ?></td>
                          <td><?php echo $r->link_yt ?></td>
                          <td><?php echo $r->sinopsis_idn ?></td>
                          <td><?php echo $r->sinopsis_eng ?></td>
                          <td><?php echo anchor('produk/f_produk/do_update/'.$r->produk_id, 'Edit')?></td>
                          <td><?php echo anchor('produk/f_produk/do_delete/'.$r->produk_id, 'Delete') ?></td>
                        </tr>
                      <?php
                          $no++;
                        }
                      ?>
                    
                    </tbody>
                    <!-- <tfoot>
                      <tr>
                        <th>No. </th>
                        <th>Penulis</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Terlaris</th>
                        <th>Sinopsis</th>
                        <th>Cover</th>
                        <th>Cover Size</th>
                        <th>Url YT</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </tfoot> -->
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- DATA TABLE -- END -->
    </div>
    
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url('/assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?php echo base_url('/assets/adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/adminlte/plugins/jszip/jszip.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/adminlte/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/adminlte/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('/assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url('/assets/adminlte/dist/js/demo.'); ?>"></script>
  <!-- Page specific script -->
  <script src="<?php echo base_url('/assets/js/v_data.js'); ?>"></script>

  <script>
    // start - image preview
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#cover')
          .attr('src', e.target.result)
          .width(150)
          .height(200);
        };
        reader.readAsDataURL(input.files[0]);
        }
      }
    // end - image preview
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });

  </script>
</body>
</html>
