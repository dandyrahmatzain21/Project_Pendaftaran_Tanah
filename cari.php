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
    <table border="0">
      <tr>
      <label>Kata Kunci</label>
      <td><input class="form-control" type="text" name="kata_kunci" size="50" placeholder="Masukan Bagian Dari NIB Atau Nama Pemohon" autofocus autocomplete="off" required="required"/></td>
      </tr><br/>
      <tr><td><p></p><input class="btn btn-primary" type="submit" name="tombol_cari" value="Cari"/></td></tr>
    </table>
  </form>
  </div>