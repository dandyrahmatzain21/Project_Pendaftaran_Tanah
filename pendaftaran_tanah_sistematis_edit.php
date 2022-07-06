<?php
include('koneksi.php');

define('proteksi',1);
defined('proteksi') or die ('tidak boleh mengakses langsung');
?>
<div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-md-12">
                <td><h1 align="center">Edit Pendaftara Tanah Sistematis</h1></td>
               
              <?php

$nib=$_GET['nib'];
$sql_edit=mysqli_query($koneksi,"SELECT * FROM table_permohonan where nib='$nib'");
$data_edit=mysqli_fetch_array($sql_edit,MYSQLI_ASSOC);
?>

<form class="form-group" method="POST" action="index.php?file=pendaftaran_tanah_sistematis_update">
            <p></p>
           <h3>Entry Berkas</h3>
           <p></p>
          <tr>
          <td>NIB         <input type="text" name="nib" maxlength="5" required autofocus autocomplete value="<?php echo $data_edit['nib'];?>" readonly/></td>
          <td>No.Berkas   <input type="text" name="no_berkas" maxlength="6" value="<?php echo $data_edit['no_berkas'];?>"/> </td>
          <td>No.Register <input type="text" name="no_register" maxlength="6" value="<?php echo $data_edit['no_register'];?>"/></td>
          </tr><br/> 
          <p></p>
          <td>Pemohon <input type="text" name="pemohon_1" value="<?php echo $data_edit['pemohon_1'];?>"/></td>
          <td>        <input type="text" name="pemohon_2" value="<?php echo $data_edit['pemohon_2'];?>"/></td><br/>
          <p></p>
          <td>Tempat,Tanggal Lahir <input type="text" name="tempat_lahir_1" value="<?php echo $data_edit['tempat_lahir_1'];?>"/> , 
                                   <input type="date" name="tanggal_lahir_1" value="<?php echo $data_edit['tanggal_lahir_1'];?>"/> - 
                                   <input type="text" name="tempat_lahir_2" value="<?php echo $data_edit['tempat_lahir_2'];?>"/> , 
                                   <input type="date" name="tanggal_lahir_2" value="<?php echo $data_edit['tanggal_lahir_2'];?>"/></td><br/>
          <p></p>
          <td>Umur <input type="text" name="umur_1" value="<?php echo $data_edit['umur_1'];?>"/>
                   <input type="text" name="umur_2" value="<?php echo $data_edit['umur_2'];?>"/></td><br/>
          <p></p>
          <td>Agama <input type="text" name="agama_1" value="<?php echo $data_edit['agama_1'];?>"/> 
                    <input type="text" name="agama_2" value="<?php echo $data_edit['agama_2'];?>"/></td><br/>
          <p></p>
          <td>Pekerjaan <select name="pekerjaan_1">
            <?php
            $pekerjaan=array(1=>'Pegawai Negeri Sipil','TNI/POLRI','Wiraswasta','Pedagang','Petani','Buruh','Lainnya');
            for($a=1;$a<=count($pekerjaan);$a++){
                // operator ternary untuk mengecek isi field pekerjaan dengan array pekerjaan 
                $a==$data_edit['pekerjaan_1'] ? $pilih='selected' : $pilih=null;
              
              echo '<option value="'.$a.'"  '.$pilih.' >'.$pekerjaan[$a].'</option>';
            }
            ?>
                      </select>
                       <select name="pekerjaan_2">
            <?php
            $pekerjaan=array(1=>'Pegawai Negeri Sipil','TNI/POLRI','Wiraswasta','Pedagang','Petani','Buruh','Lainnya');
            for($b=1;$b<=count($pekerjaan);$b++){
                // operator ternary untuk mengecek isi field pekerjaan dengan array pekerjaan 
                $b==$data_edit['pekerjaan_2'] ? $pilih='selected' : $pilih=null;
              
              echo '<option value="'.$b.'"  '.$pilih.' >'.$pekerjaan[$b].'</option>';
            }
            ?>
                        
                      </select></td><br/>
          <p></p>
          <td>No.KTP <input type="text" name="no_ktp_1" value="<?php echo $data_edit['no_ktp_1'];?>"/> 
                     <input type="text" name="no_ktp_2" value="<?php echo $data_edit['no_ktp_2'];?>"/></td><br/>
          <p></p>
          <td>Alamat <input type="text" name="alamat" value="<?php echo $data_edit['alamat'];?>"/></td><br/>
          <p></p>
          <td><h4>Data Tanah Dimohon</h4></td>
          <p></p>
          <td>Alas Hak <input type="text" name="alas_hak" value="<?php echo $data_edit['alas_hak'];?>"/> 
               Tanggal <input type="date" name="tanggal" value="<?php echo $data_edit['tanggal'];?>"/></td><br/>
          <p></p>
          <td>Jalan/Gang/Blok <input type="text" name="jalan_gang_blok" value="<?php echo $data_edit['jalan_gang_blok'];?>"/> 
                        RT/RW <input type="text" name="rt_rw" value="<?php echo $data_edit['rt_rw'];?>"/>
                        Nomor <input type="text" name="nomor" value="<?php echo $data_edit['nomor'];?>"/></td><br/>
          <p></p>
          <td>Desa/Kelurahan<input type="text" name="desa_kelurahan" value="<?php echo $data_edit['desa_kelurahan'];?>"/>
                   Kecamatan <input type="text" name="kecamatan" value="<?php echo $data_edit['kecamatan'];?>"/></td><br/>

          <p></p>
          <td>No.Letter C <input type="text" name="no_letter_c" value="<?php echo $data_edit['no_letter_c'];?>"/>
                  No.SPPT <input type="text" name="no_sppt" value="<?php echo $data_edit['no_sppt'];?>"/></td><br/>
          <p></p>

          <td>Nama Kepala Desa <input type="text" name="nama_kepala_desa" value="<?php echo $data_edit['nama_kepala_desa']; ?>"></td>
          <p></p>
          <td>Alamat Kantor Desa <input type="text" name="alamat_kantor_desa" value="<?php echo $data_edit['alamat_kantor_desa']; ?>"></td>
          <p></p>
          <td>Nama Pada Letter C <input type="text" name="nama_pada_letter_c" value="<?php echo $data_edit['nama_pada_letter_c'];?>"/> 
                  Nama Pada SPPT <input type="text" name="nama_pada_sppt" value="<?php echo $data_edit['nama_pada_sppt'];?>"/></td><br/>
          <p></p>
          <td>No.Persil <input type="text" name="no_persil" value="<?php echo $data_edit['no_persil'];?>"/>
                  Kelas <input type="text" name="kelas" value="<?php echo $data_edit['kelas'];?>"/>
                   Luas <input type="text" name="luas" value="<?php echo $data_edit['luas'];?>"/> M2</td><br/>
          <p></p>
          <td><h4>Pembatasan Tanah</h4></td>
          <p></p>
          <p>Utara <input type="text" name="utara" value="<?php echo $data_edit['utara'];?>"/>
             Timur <input type="text" name="timur" value="<?php echo $data_edit['timur'];?>"/>
           Selatan <input type="text" name="selatan" value="<?php echo $data_edit['selatan'];?>"/>
             Barat <input type="text" name="barat" value="<?php echo $data_edit['barat'];?>"/></p>
          <p></p>
          <td><h4>Riwayat Tanah</h4></td>
          <p></p>
          <td>1. a.Pada Saat Ini Dikuasai Oleh <input type="text" name="a_pada_saat_ini_dikuasai_oleh_1" value="<?php echo $data_edit['a_pada_saat_ini_dikuasai_oleh_1'];?>"/>
                                   Sejak Tahun <input type="text" name="sejak_tahun_1" value="<?php echo $data_edit['sejak_tahun_1'];?>"/> Berdasarkan </td><br/>
          <p></p>
          <td>                                  <input type="text" name="berdasarkan_1" value="<?php echo $data_edit['berdasarkan_1'];?>"/></td><br/>
          <p></p>
          <td>2. b.Pada Saat Ini Dikuasai Oleh <input type="text" name="b_pada_saat_ini_dikuasai_oleh_2" value="<?php echo $data_edit['b_pada_saat_ini_dikuasai_oleh_2'];?>"/>
                                   Sejak Tahun <input type="text" name="sejak_tahun_2" value="<?php echo $data_edit['sejak_tahun_2'];?>"/> Berdasarkan </td><br/>
          <p></p>
          <td>                                 <input type="text" name="berdasarkan_2" value="<?php echo $data_edit['berdasarkan_2'];?>"/></td><br/>
          <p></p>
          <td>3. c.Pada Saat Ini Dikuasai Oleh <input type="text" name="c_pada_saat_ini_dikuasai_oleh_3" value="<?php echo $data_edit['c_pada_saat_ini_dikuasai_oleh_3'];?>"/>
                                   Sejak Tahun <input type="text" name="sejak_tahun_3" value="<?php echo $data_edit['sejak_tahun_3'];?>"/> Berdasarkan </td><br/>
          <p></p>
          <td>                                 <input type="text" name="berdasarkan_3" value="<?php echo $data_edit['berdasarkan_3'];?>"/></td><br/>
          <p></p>
          <td>4. d.Pada Saat Ini Dikuasai Oleh <input type="text" name="d_pada_saat_ini_dikuasai_oleh_4" value="<?php echo $data_edit['d_pada_saat_ini_dikuasai_oleh_4'];?>"/>
                                   Sejak Tahun <input type="text" name="sejak_tahun_4" value="<?php echo $data_edit['sejak_tahun_4'];?>"/> Berdasarkan </td><br/>
          <p></p>
          <td>                                 <input type="text" name="berdasarkan_4" value="<?php echo $data_edit['berdasarkan_4'];?>"/></td><br/>
          <p></p>
          <td>Penggunaan Tanah <input type="text" name="penggunaan_tanah" value="<?php echo $data_edit['penggunaan_tanah'];?>"/> Tanggal Permohonan
                               <input type="date" name="tgl_permohonan" value="<?php echo $data_edit['tgl_permohonan'];?>"/> Panitia A
                               <input type="text" name="panitia" value="<?php echo $data_edit['panitia'];?>"/></td>
          <p></p>
          <td><h4>Data Pewaris</h4></td>
          <p></p>
          <td>Nama Pewaris     <input type="text" name="nama_pewaris" value="<?php echo $data_edit['nama_pewaris'];?>"/></td><br/>
          <p></p>
          <td>Tahun Meninggal  <input type="text" name="tahun_meninggal" value="<?php echo $data_edit['tahun_meninggal'];?>"/></td><br/>
          <p></p>
          <td>Tempat Meninggal <input type="text" name="tempat_meninggal" value="<?php echo $data_edit['tempat_meninggal'];?>"/></td><br/>

          <p></p>

            <td><a href="index.php?file=pendaftaran_tanah_sistematis_update"><button class="btn btn-primary"><i class="icon-interface-windows"></i> Simpan Berkas</button></a></td>

            </form>
                </div>