<?php
include('koneksi.php');

define('proteksi',1);
defined('proteksi') or die ('tidak boleh mengakses langsung');
?>
<div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-md-12">

                <td><h1 align="center">Pendaftaran Tanah Sistematis</h1></td>
               <form name="form_cari_data_pendaftaran" method="post" action="index.php?file=hasil_cari">
    <table align="right" border="0">
      <tr>
      <td><input type="text" name="kata_kunci" size="50" placeholder="Masukan Bagian Dari NIB Atau Nama Pemohon" autofocus autocomplete="off" required="required"/> <button class="btn btn-primary"><span class="icon-search"></span></button></td>
      </tr><br/>
    </table>
  </form>
               
            <td><a href="index.php?file=pendaftaran_tanah_sistematis_entry" class="btn btn-primary"><i class="icon-form"></i> Entry Berkas</a></td>
            <p></p>
            <table class="table table-bordered table table-striped">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>NIB</th>
                            <th>No.Berkas</th>
                            <th>Nama Pemohon</th>
                            <th>Nama Pemohon 2</th>
                            <th>Tempat Tanggal Lahir</th>
                            <th>Pekerjaan</th>
                            <th colspan="4">Luas</th>
                          </tr>
                        </thead>
                        <tbody>
    <?php
      $sql_permohonan=mysqli_query($koneksi,"SELECT * FROM table_permohonan");
      $no_urut=null;
      while($data_permohonan=mysqli_fetch_array($sql_permohonan,MYSQLI_ASSOC)){
        $no_urut++;
        echo '<tr>
        <td>'.$no_urut.'</td>
        <td>'.$data_permohonan['nib'].'</td>
        <td>'.$data_permohonan['no_berkas'].'</td>
        <td>'.$data_permohonan['pemohon_1'].'</td>
        <td>'.$data_permohonan['pemohon_2'].'</td>
        <td>'.$data_permohonan['tempat_lahir_1'].','.$data_permohonan['tanggal_lahir_1'].'</td>
        <td>'.$data_permohonan['pekerjaan_1'].'</td>
        <td>'.$data_permohonan['luas'].'</td>
        <td><a href="index.php?file=pendaftaran_tanah_sistematis_edit&nib='.$data_permohonan['nib'].'" class="btn btn-primary"><i class="icon-pencil-case"></i> Edit</a></td>
        <td><a onclick="return window.confirm(\'yakin data ini dihapus?\')" href="index.php?file=pendaftaran_tanah_sistematis_hapus&nib='.$data_permohonan['nib'].'" class="btn btn-primary"><i class="icon-close"></i> Hapus</a></td> 
        <td>  <a href="javascript:void(0);" class="btn btn-primary" onclick="javascript:window.open(\'lampiran_13.php?nib='.$data_permohonan['nib'].'\',\'_blank\',
          \'width=850,height=600,scrollbars=no,status=no,resizable=no,screenx=200,screeny=100\')"><i class="icon-page"></i> Print</a></td></tr>';
      }
    ?>
       
  </tbody>
                      </table>
                </div>