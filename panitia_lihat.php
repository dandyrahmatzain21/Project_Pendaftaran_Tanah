<?php
include('koneksi.php');

define('proteksi',1);
defined('proteksi') or die ('tidak boleh mengakses langsung');
?>
<div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-md-12">
                <td><h1 align="center">Panitia</h1></td>
               
               <?php
              $no_panitia=$_GET['no_panitia'];
              $sql_edit=mysqli_query($koneksi,"SELECT * FROM table_panitia where no_panitia='$no_panitia'");
              $data_edit=mysqli_fetch_array($sql_edit,MYSQLI_ASSOC);
              ?>
           
<form class="form-group" method="POST" action="index.php?file=panitia">
          <td><table  width="621" border="0">
            <tr>
              <td width="82">No.Panitia</td>
              <td width="155"><input type="text" name="no_panitia" value="<?php echo $data_edit['no_panitia'];?>" readonly/></td>
              <td width="43">&nbsp;</td>
              <td width="323">&nbsp;</td>
            </tr>
            <tr>
              <td>Wilayah</td>
              <td><input type="text" name="wilayah" value="<?php echo $data_edit['wilayah'];?>" readonly/></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Ketua</td>
              <td><input type="text" name="ketua" value="<?php echo $data_edit['ketua'];?>" readonly/></td>
              <td> <div align="center">Nip</div></td>
              <td><input type="text" name="nip_ketua" value="<?php echo $data_edit['nip_ketua'];?>" readonly/></td>
            </tr>
            <tr>
              <td>Wk Ketua 1</td>
              <td><input type="text" name="wk_ketua_1" value="<?php echo $data_edit['wk_ketua_1'];?>" readonly/></td>
              <td><div align="center">Nip</div></td>
              <td><input type="text" name="nip_wk_ketua_1" value="<?php echo $data_edit['nip_wk_ketua_1'];?>" readonly/></td>
            </tr>
            <tr>
              <td>Wk Ketua 2</td>
              <td><input type="text" name="wk_ketua_2" value="<?php echo $data_edit['wk_ketua_2'];?>" readonly/></td>
              <td><div align="center">Nip</div></td>
              <td><input type="text" name="nip_wk_ketua_2" value="<?php echo $data_edit['nip_wk_ketua_2'];?>" readonly/></td>
            </tr>
            <tr>
              <td>Anggota</td>
              <td><input type="text" name="anggota" value="<?php echo $data_edit['anggota'];?>" readonly/></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Sekretaris</td>
              <td><input type="text" name="sekretaris" value="<?php echo $data_edit['sekretaris'];?>" readonly/></td>
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
              <td colspan="4">Surat Keputusan Pemberian Hak Atas Tanah / Penegasan Konversi Hak Atas Tanah</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Tanggal</td>
              <td><input type="date" name="tanggal" value="<?php echo $data_edit['tanggal'];?>" readonly/></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>No</td>
              <td><input type="text" name="no" value="<?php echo $data_edit['no'];?>" readonly/></td>
              <td rowspan="4">&nbsp;</td>
              <td rowspan="4">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td rowspan="2">&nbsp;</td>
            </tr>
          </table>
          </td>
            </form>
                </div>