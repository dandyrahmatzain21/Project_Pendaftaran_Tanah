<?php
include('koneksi.php');

define('proteksi',1);
defined('proteksi') or die ('tidak boleh mengakses langsung');
?>
<div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-md-12">
                <td><h1 align="center">Tabel Panitia</h1></td>
               
               
            <td><a href="index.php?file=panitia_tambah" class="btn btn-primary"><i class="icon-user"></i> Tambah Panitia</a></td>
            <p></p>
            <table class="table table-bordered table table-striped">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>No.Panitia</th>
                            <th>Wilayah</th>
                            <th>Ketua</th>
                            <th>Wakil Ketua 1</th>
                            <th>Wakil Ketua 2</th>
                            <th>Anggota</th>
                            <th colspan="4">Sekretaris</th>
                          </tr>
                        </thead>
                        <tbody>
    <?php
      $sql_panitia=mysqli_query($koneksi,"SELECT * FROM table_panitia");
      $no_urut=null;
      while($data_panitia=mysqli_fetch_array($sql_panitia,MYSQLI_ASSOC)){
        $no_urut++;
        echo '<tr>
        <td>'.$no_urut.'</td>
        <td>'.$data_panitia['no_panitia'].'</td>
        <td>'.$data_panitia['wilayah'].'</td>
        <td>'.$data_panitia['ketua'].'</td>
        <td>'.$data_panitia['wk_ketua_1'].'</td>
        <td>'.$data_panitia['wk_ketua_2'].'</td>
        <td>'.$data_panitia['anggota'].'</td>
        <td>'.$data_panitia['sekretaris'].'</td>
        <td><a href="javascript:void(0);" class="btn btn-primary" onclick="javascript:window.open(\'panitia_lihat.php?no_panitia='.$data_panitia['no_panitia'].'\',\'_blank\',
          \'width=650,height=400,scrollbars=no,status=no,resizable=no,screenx=200,screeny=100\')"><i class="icon-page"></i> Lihat Form</a></td>
        <td><a href="index.php?file=panitia_edit&no_panitia='.$data_panitia['no_panitia'].'" class="btn btn-primary"><i class="icon-pencil-case"></i> Edit</a></td>
        <td><a onclick="return window.confirm(\'yakin data ini dihapus?\')" href="index.php?file=panitia_hapus&no_panitia='.$data_panitia['no_panitia'].'" class="btn btn-primary"><i class="icon-close"></i> Hapus</a></td>
        </tr>';
      }
    ?>
  </tbody>
                      </table>
                </div>