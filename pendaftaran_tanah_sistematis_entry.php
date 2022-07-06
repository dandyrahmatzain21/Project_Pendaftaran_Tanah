<?php
include('koneksi.php');

define('proteksi',1);
defined('proteksi') or die ('tidak boleh mengakses langsung');
?>
<div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-md-12">
                <td><h1 align="center">Tambah Pendaftaran Tanah Sistematis </h1></td>
               
           
          <form class="form-group" method="POST" action="index.php?file=pendaftaran_tanah_sistematis_simpan">
            <p></p>
           <h3>Entry Berkas</h3>
           <p></p>
          <tr>
          <td>NIB         <input type="text" name="nib" maxlength="5" required autofocus autocomplete/></td>
          <td>No.Berkas   <input type="text" name="no_berkas" maxlength="6"/> </td>
          <td>No.Register <input type="text" name="no_register" maxlength="6"/></td>
          </tr><br/> 
          <p></p>
          <td>Pemohon <input type="text" name="pemohon_1"/></td>
          <td>        <input type="text" name="pemohon_2"/></td><br/>
          <p></p>
          <td>Tempat,Tanggal Lahir <input type="text" name="tempat_lahir_1"/> , 
                                   <input type="date" name="tanggal_lahir_1"/> - 
                                   <input type="text" name="tempat_lahir_2"/> , 
                                   <input type="date" name="tanggal_lahir_2"/></td><br/>
          <p></p>
          <td>Umur <input type="text" name="umur_1"/> 
                   <input type="text" name="umur_2"/></td><br/>
          <p></p>
          <td>Agama <input type="text" name="agama_1"/> 
                    <input type="text" name="agama_2"/></td><br/>
          <p></p>
          <td>Pekerjaan 
                      <select name="pekerjaan_1">
<?php
$pekerjaan=array(1=>'Pegawai Negeri Sipil','TNI/POLRI','Wiraswasta','Pedagang','Petani','Buruh','Lainnya');
for($a=1;$a<=count($pekerjaan);$a++){

  echo '<option value="'.$a.'">'.$pekerjaan[$a].'</option>';
}
?>
                      </select>

                      <select name="pekerjaan_2">
<?php
for($b=1;$b<=count($pekerjaan);$b++){

  echo '<option value="'.$b.'">'.$pekerjaan[$b].'</option>';
}
?>
                      </select>
          <p></p>
          <td>No.KTP <input type="text" name="no_ktp_1"/> 
                     <input type="text" name="no_ktp_2"/></td><br/>
          <p></p>
          <td>Alamat <input type="text" name="alamat"/></td><br/>
          <p></p>
          <td><h4>Data Tanah Dimohon</h4></td>
          <p></p>
          <td>Alas Hak <input type="text" name="alas_hak"/> Tanggal 
                       <input type="date" name="tanggal"/></td><br/>
          <p></p>
          <td>Jalan/Gang/Blok <input type="text" name="jalan_gang_blok"/>
                        RT/RW <input type="text" name="rt_rw"/>
                        Nomor <input type="text" name="nomor"/></td><br/>
          <p></p>
          <td>Desa/Kelurahan
             <select name="desa_kelurahan" required autocomplete="off">
              <option value="">-- Pilih Desa/Kelurahan --</option>
              <?php
                    $sql_desa=mysqli_query($koneksi,"SELECT * FROM table_desa");
                    while($data_desa=mysqli_fetch_array($sql_desa,MYSQLI_ASSOC)){
                    if($data_desa['kode_desa']==$desa) { $terpilih='selected'; } else { $terpilih=null; }  

                    echo'
                    <option value="'.$data_desa['desa'].'" '.$terpilih.' >'.$data_desa['desa'].'</option>
                    ';
                    }
                    ?>
                    </select></td>

             <select name="kecamatan" required autocomplete="off">
              <option value="">-- Kecamatan --</option>
              <?php
                    $sql_desa=mysqli_query($koneksi,"SELECT * FROM table_desa");
                    while($data_desa=mysqli_fetch_array($sql_desa,MYSQLI_ASSOC)){
                    if($data_desa['kode_desa']==$kecamatan) { $terpilih='selected'; } else { $terpilih=null; }  

                    echo'
                    <option value="'.$data_desa['kecamatan'].'" '.$terpilih.' >'.$data_desa['kecamatan'].'</option>
                    ';
                    }
                    ?>
                    </select></td><br/>

                    <td>Nama Kepala Desa<select name="nama_kepala_desa" required autocomplete>
              <option value="">-- Pilih Nama Kepala Desa --</option>
              <?php
                    $sql_kepala=mysqli_query($koneksi,"SELECT * FROM table_desa");
                    while($data_kepala=mysqli_fetch_array($sql_kepala,MYSQLI_ASSOC)){
                    if($data_kepala['nama_kepala_desa']==$Kepala) { $terpilih='selected'; } else { $terpilih=null; }  

                    echo'
                    <option value="'.$data_kepala['nama_kepala_desa'].'" '.$terpilih.' >'.$data_kepala['nama_kepala_desa'].'</option>
                    ';
                    }
                    ?>
                    </select></td><br/>

          <td>Alamat Kantor Desa<select name="alamat_kantor_desa" required autocomplete>
              <option value="">-- Pilih Alamat Kantor Desa --</option>
              <?php
                    $sql_alamat=mysqli_query($koneksi,"SELECT * FROM table_desa");
                    while($data_alamat=mysqli_fetch_array($sql_alamat,MYSQLI_ASSOC)){
                    if($data_alamat['alamat_kantor_desa']==$panitia) { $terpilih='selected'; } else { $terpilih=null; }  

                    echo'
                    <option value="'.$data_alamat['alamat_kantor_desa'].'" '.$terpilih.' >'.$data_alamat['alamat_kantor_desa'].'</option>
                    ';
                    }
                    ?>
                    </select></td>
          <p></p>
          <td>No.Letter C    <input type="text" name="no_letter_c"/>
                     No.SPPT <input type="text" name="no_sppt"/></td><br/>
          <p></p>
          <td>Nama Pada Letter C <input type="text" name="nama_pada_letter_c"/>
                  Nama Pada SPPT <input type="text" name="nama_pada_sppt"/></td><br/>
          <p></p>
          <td>No.Persil <input type="text" name="no_persil"/>
                  Kelas <input type="text" name="kelas"/>
                   Luas <input type="text" name="luas"/> M2</td><br/>
          <p></p>
          <td><h4>Pembatasan Tanah</h4></td>
          <p></p>
          <p>Utara <input type="text" name="utara"/>
             Timur <input type="text" name="timur"/>
           Selatan <input type="text" name="selatan"/>
             Barat <input type="text" name="barat"/></p>
          <p></p>
          <td><h4>Riwayat Tanah</h4></td>
          <p></p>
          <td>1. a.Pada Saat Ini Dikuasai Oleh <input type="text" name="a_pada_saat_ini_dikuasai_oleh_1"/>
                                   Sejak Tahun <input type="text" name="sejak_tahun_1"/> Berdasarkan </td><br/>
          <p></p>
          <td>                                 <input type="text" name="berdasarkan_1"/></td><br/>
          <p></p>
          <td>2. b.Pada Saat Ini Dikuasai Oleh <input type="text" name="b_pada_saat_ini_dikuasai_oleh_2"/>
                                   Sejak Tahun <input type="text" name="sejak_tahun_2"/> Berdasarkan </td><br/>
          <p></p>
          <td>                                 <input type="text" name="berdasarkan_2"/></td><br/>
          <p></p>
          <td>3. c.Pada Saat Ini Dikuasai Oleh <input type="text" name="c_pada_saat_ini_dikuasai_oleh_3"/>
                                   Sejak Tahun <input type="text" name="sejak_tahun_3"/> Berdasarkan </td><br/>
          <p></p>
          <td>                                 <input type="text" name="berdasarkan_3"/></td><br/>
          <p></p>
          <td>4. d.Pada Saat Ini Dikuasai Oleh <input type="text" name="d_pada_saat_ini_dikuasai_oleh_4"/>
                                   Sejak Tahun <input type="text" name="sejak_tahun_4"/> Berdasarkan </td><br/>
          <p></p>
          <td>                                 <input type="text" name="berdasarkan_4"/></td><br/>
          <p></p>
          <td>Penggunaan Tanah                 <input type="text" name="penggunaan_tanah"/>
                            Tanggal Permohonan <input type="date" name="tgl_permohonan"/> Panitia A
                                               <select name="panitia" maxlength="5" required autocomplete="off">
                                                <option value="">-- Pilih Panitia --</option>
                                                <?php
                                                $sql_panitia=mysqli_query($koneksi,"SELECT * FROM table_panitia");
                                                while($data_panitia=mysqli_fetch_array($sql_panitia,MYSQLI_ASSOC)){
                                                  if($data_panitia['no_panitia']==$panitia) { $terpilih='selected'; } else { $terpilih=null; }  

                                                  echo'
                                                  <option value="'.$data_panitia['ketua'].'" '.$terpilih.' >'.$data_panitia['ketua'].'</option>
                                                  ';
                                                }
                                                ?>
                                              </select>
 </td>
          <p></p>
          <td><h4>Data Pewaris</h4></td>
          <p></p>
          <td>Nama nama pewaris                <input type="text" name="nama_pewaris"/></td><br/>
          <p></p>
          <td>Tahun Meninggal                  <input type="text" name="tahun_meninggal"/></td><br/>
          <p></p>
          <td>Tempat Meninggal                 <input type="text" name="tempat_meninggal"/></td><br/>

          <p></p>

            <td><a href="index.php?file=pendaftaran_tanah_sistematis_simpan"><button class="btn btn-primary"><i class="icon-interface-windows"></i> Simpan Berkas</button></a></td>

            </form>
                </div>