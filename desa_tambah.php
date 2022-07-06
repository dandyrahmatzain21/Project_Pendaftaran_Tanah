<?php
include('koneksi.php');

define('proteksi',1);
defined('proteksi') or die ('tidak boleh mengakses langsung');
?>
<div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-md-12">
                <td><h1 align="center">Tambah Desa</h1></td>
               
           
          <form class="form-group" method="POST" action="index.php?file=desa_simpan">
          
          <td><table width="599" border="0">
            <tr>
              <td width="129">Kode Desa</td>
              <td colspan="3"><input class="form-control" type="text" name="kode_desa" required="required"/></td>
            </tr>
            <tr>
              <td>Desa</td>
              <td colspan="3"><input class="form-control" type="text" name="desa"/></td>
            </tr>
            <tr>
              <td>Kecamatan</td>
              <td colspan="3"><input class="form-control" type="text" name="kecamatan"/></td>
            </tr>
            <tr>
              <td>Nama Kepala Desa</td>
              <td colspan="3"><input class="form-control" type="text" name="nama_kepala_desa"/></td>
            </tr>
            <tr>
              <td>Nip</td>
              <td colspan="3"><input class="form-control" type="text" name="nip_kepala_desa"/></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td>Saksi 1</td>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td>Nama</td>
              <td colspan="3"><input class="form-control" type="text" name="nama_saksi_1"/></td>
            </tr>
            <tr>
              <td>Tempat Lahir</td>
              <td width="155"><input class="form-control" type="text" name="tempat_lahir_saksi_1"/></td>
              <td width="126"><div align="right">Tanggal Lahir </div></td>
              <td width="171"><input class="form-control" type="date" name="tanggal_lahir_saksi_1"/></td>
            </tr>
            <tr>
              <td>Umur</td>
              <td colspan="3"><input class="form-control" type="text" name="umur_saksi_1"/></td>
            </tr>
            <tr>
              <td>Agama</td>
              <td colspan="3"><input class="form-control" type="text" name="agama_saksi_1"/></td>
            </tr>
            <tr>
              <td>No.KTP</td>
              <td colspan="3"><input class="form-control" type="text" name="no_ktp_saksi_1"/></td>
            </tr>
            <tr>
              <td>Pekerjaan</td>
              <td colspan="3"><select class="form-control" name="pekerjaan_saksi_1">
                <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                <option value="TNI/POLRI">TNI/POLRI</option>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="Pedagang">Pedagang</option>
                <option value="Petani">Petani</option>
                <option value="Buruh">Buruh</option>
                <option value="Lainnya">Lainnya</option>
              </select></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td colspan="3"><textarea class="form-control" name="alamat_saksi_1"></textarea></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td>Saksi 2</td>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td>Nama</td>
              <td colspan="3"><input class="form-control" type="text" name="nama_saksi_2"/></td>
            </tr>
            <tr>
              <td>Tempat Lahir</td>
              <td><input class="form-control" type="text" name="tempat_lahir_saksi_2"/></td>
              <td><div align="right">Tanggal Lahir </div></td>
              <td><input class="form-control" type="date" name="tanggal_lahir_saksi_2"/></td>
            </tr>
            <tr>
              <td>Umur</td>
              <td colspan="3"><input class="form-control" type="text" name="umur_saksi_2"/></td>
            </tr>
            <tr>
              <td>Agama</td>
              <td colspan="3"><input class="form-control" type="text" name="agama_saksi_2"/></td>
            </tr>
            <tr>
              <td>No.KTP</td>
              <td colspan="3"><input class="form-control" type="text" name="no_ktp_saksi_2"/></td>
            </tr>
            <tr>
              <td>Pekerjaan</td>
              <td colspan="3"><select class="form-control" name="pekerjaan_saksi_2">
                <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                <option value="TNI/POLRI">TNI/POLRI</option>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="Pedagang">Pedagang</option>
                <option value="Petani">Petani</option>
                <option value="Buruh">Buruh</option>
                <option value="Lainnya">Lainnya</option>
              </select></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td colspan="3"><textarea class="form-control" name="alamat_saksi_2"></textarea></td>
            </tr>
            <tr>
              <td>Alamat Kantor Desa</td>
              <td colspan="3"><textarea class="form-control" name="alamat_kantor_desa"></textarea></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="4"><h4><i>Catatan : Penngetikan Alamat Kantor desa Dengan Huruf Besar Dan Kecil</i></h4></td>
            </tr>
            <tr>
              <td colspan="4"><h4><i>Catatan : Untuk Pengetikan Hari/Bulan/Tanggal/Tahun Diurai</i></h4></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td>Hari</td>
              <td><input class="form-control" type="text" name="hari"/></td>
              <td>Bulan/Tanggal/Tahun</td>
              <td><input class="form-control" type="date" name="bulan_tanggal_tahun"/></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="4"><h4>Pejabat Pembuat Akta Tanah</h4></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Nama PPAT</td>
              <td><input class="form-control" type="text" name="nama_ppat" /></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="4"><h4>Satgas Yuridis</h4></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Nama Satgas 1</td>
              <td><input class="form-control" type="text" name="nama_satgas_1" /></td>
              <td><div align="right">Nip</div></td>
              <td><input class="form-control" type="text" name="nip_satgas_1" /></td>
            </tr>
            <tr>
              <td>Nama Satgas 2</td>
              <td><input class="form-control" type="text" name="nama_satgas_2" /></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><a href="index.php?file=desa_simpan"><button class="btn btn-primary"><i class="icon-interface-windows"></i> Simpan</button></a></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
            </td>

            </form>
                </div>