<?php
include('koneksi.php');

define('proteksi',1);
defined('proteksi') or die ('tidak boleh mengakses langsung');
?>
<div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-md-12">
                <td><h1 align="center">Tabel Desa</h1></td>
               
               
            <td><a href="index.php?file=desa_tambah" class="btn btn-primary"><i class="icon-form"></i> Tambah Desa</a></td>
            <p></p>
            <table class="table table-bordered table table-striped">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Kode Desa</th>
                            <th>Desa</th>
                            <th>Kecamatan</th>
                            <th colspan="4">Nama Kepala Desa</th>
                          </tr>
                        </thead>
                        <tbody>
    <?php
      $sql_desa=mysqli_query($koneksi,"SELECT * FROM table_desa");
      $no_urut=null;
      while($data_desa=mysqli_fetch_array($sql_desa,MYSQLI_ASSOC)){
        $no_urut++;
        echo '<tr>
        <td>'.$no_urut.'</td>
        <td>'.$data_desa['kode_desa'].'</td>
        <td>'.$data_desa['desa'].'</td>
        <td>'.$data_desa['kecamatan'].'</td>
        <td>'.$data_desa['nama_kepala_desa'].'</td>
        <td><a href="javascript:void(0);" class="btn btn-primary" onclick="javascript:window.open(\'desa_lihat.php?kode_desa='.$data_desa['kode_desa'].'\',\'_blank\',
          \'width=650,height=600,scrollbars=no,status=no,resizable=no,screenx=200,screeny=100\')"><i class="icon-page"></i> Lihat Form</a></td>
        <td><a href="index.php?file=desa_edit&kode_desa='.$data_desa['kode_desa'].'" class="btn btn-primary"><i class="icon-pencil-case"></i> Edit</a></td>
        <td><a onclick="return window.confirm(\'yakin data ini dihapus?\')" href="index.php?file=desa_hapus&kode_desa='.$data_desa['kode_desa'].'" class="btn btn-primary"><i class="icon-close"></i> Hapus</a></td>
        </tr>';
      }
    ?>
  </tbody>
                      </table>
                </div>