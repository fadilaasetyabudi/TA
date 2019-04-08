<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url(); ?>tema/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
   <link href="<?php echo base_url(); ?>tema/admin/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    
    <?php  $this->load->view("template/sidebar");?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <?php $this->load->view("template/topbar");?>


        

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <?php  if($this->session->flashdata('fd_pesan')){?>

          <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Notifikasi</h6>
                </div>
                <div class="card-body">
                 <?php echo $this->session->flashdata('fd_pesan'); ?>
                </div>
              </div>
              <?php } ?>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
                <a href="<?php echo site_url('obat/tambah'); ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah</span>
                  </a>
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     <th>#</th>
                     <th>Nama Obat</th>
                     <th>Harga Obat</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>#</th>
                     <th>Nama Obat</th>
                     <th>Harga Obat</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                   <?php if(count($p_semuaobat) > 0) { ?>
      <?php $no = 1; ?>
      <?php foreach ($p_semuaobat as $data) { ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data->nama_obat; ?></td>
        <td><?php echo get_rupiah($data->harga_obat); ?></td>
      
        <td>
       <!--    <a href="">Edit</a> -->
          <a href="<?php echo site_url('obat/edit/' . $data->id_obat); ?>" class="btn btn-success btn-circle">
                    <i class="fas fa-edit"></i>
                  </a>
        <!--   <a href="">Hapus</a> -->
           <a href="<?php echo site_url('obat/proses_hapus/' . $data->id_obat); ?>" class="btn btn-danger btn-circle">
                    <i class="fas fa-trash"></i>
                  </a>
        </td>
      </tr>
      <?php } ?>
      <?php } else { ?>
      <tr>
        <td colspan="4">Tidak ada obat</td>
      </tr>
      <?php } ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     <?php $this->load->view("template/footer");?>