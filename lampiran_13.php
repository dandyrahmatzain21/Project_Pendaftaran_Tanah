<html>
<head>
  <style>
  body {
  background: rgb(204,204,204); 
  }
  page {
    background: white;
    display: block;
    margin: 0 auto;
    margin-bottom: 0.5cm;
    box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
  }
  page[size="F4"] {  
    width: 21.59cm;
    height: 33.02cm; 
  }
  page[size="A4"][layout="portrait"] {
    width: 29.7cm;
    height: 21cm;  
  }
  page[size="A3"] {
    width: 29.7cm;
    height: 42cm;
  }
  page[size="A3"][layout="portrait"] {
    width: 42cm;
    height: 29.7cm;  ac
  }
  page[size="A5"] {
    width: 14.8cm;
    height: 21cm;
  }
  page[size="A5"][layout="portrait"] {
    width: 21cm;
    height: 14.8cm;  
  }
  @media print {
    body, page {
    margin: 0;
    box-shadow: 0;
    }
  }
</style>
</head>
              <?php
include('koneksi.php');
$nib=$_GET['nib'];
$sql_edit=mysqli_query($koneksi,"SELECT * FROM table_permohonan where nib='$nib'");
$data_edit=mysqli_fetch_array($sql_edit,MYSQLI_ASSOC);
?>
<body onload="window.print()">
<page size="F4">


<table align="center" width="700" border="0">
    <tr>
    <td><table border="0" cellspacing="0" cellpadding="0" width="662">
      <tr>
        <td width="104" valign="top"><p align="center"><strong> </strong><strong> </strong><img src="Logo Bpn.png" width="100" height="100"></p></td>
        <td width="558" valign="top"><p align="center"><strong>BADAN PERTANAHAN    NASIONAL</strong><br />
                <strong>REPUBLIK INDONESIA</strong><br />
                <strong>KANTOR    PERTANAHAN KABUPATEN KUNINGAN</strong><br />
          Jalan RE. Martadinata No. 84 Telp (0232) 871582    Kuningan 45514 </p></td>
      </tr>
    </table>
      <div> </div>
      <p align="center">&nbsp;</p>
      <p align="center"><strong><u>TANDA TERIMA  DOKUMEN</u></strong><br />
        Nomor : ............/PTSL/............../2017</p>
      <p>Telah terima  berkas permohonan pendaftaran tanah sistematis lengkap dari : </p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="130" valign="top"><p>Nama</p></td>
          <td width="28" valign="top"><p>:</p></td>
          <td width="515" valign="top"><p><strong><?php echo $data_edit['pemohon_1'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="130" valign="top"><p>Alamat</p></td>
          <td width="28" valign="top"><p>:</p></td>
          <td width="515" valign="top"><p><strong><?php echo $data_edit['alamat'];?></strong><strong> </strong></p></td>
        </tr>
      </table>
      <p>Atas bidang Tanah Milik Adat  : </p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="130" valign="top"><br />
            Terletak di </td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="528" valign="top"><p><strong><?php echo $data_edit['jalan_gang_blok'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="130" valign="top"><p>Desa</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="528" valign="top"><p><strong><?php echo $data_edit['desa_kelurahan'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="130" valign="top"><p>Kecamatan</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="528" valign="top"><p><strong><?php echo $data_edit['kecamatan'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="130" valign="top"><p>Kabupaten</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="528" valign="top"><p><strong>KUNINGAN</strong></p></td>
        </tr>
      </table>
      <p>Beserta dokumen  yang dilampirkan dibawah ini : </p>
      <table border="1" cellspacing="0" cellpadding="0">
        <tr>
          <td width="677" valign="top"><ol>
            <li>Photo Copy &nbsp;KTP No. <strong><?php echo $data_edit['no_ktp_1'];?></strong> </li>
          </ol></td>
        </tr>
        <tr>
          <td width="677" valign="top"><ol>
            <li>Photo Copy SPPT/PBB No. <strong><?php echo $data_edit['no_sppt'];?></strong> </li>
          </ol></td>
        </tr>
        <tr>
          <td width="677" valign="top"><ol>
            <li><strong><?php echo $data_edit['berdasarkan_1'];?></strong><em>, </em>Tanggal <strong><?php echo $data_edit['tanggal'];?></strong>No. <strong><?php echo $data_edit['nomor'];?></strong> </li>
          </ol></td>
        </tr>
        <tr>
          <td width="677" valign="top"><ol>
            <li>Surat Pernyataan    Penguasaan Fisik Bidang Tanah</li>
          </ol></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="262" rowspan="2" valign="top"><p>&nbsp;</p></td>
          <td width="416" colspan="2" valign="top"><p align="center">Kuningan,<?php echo $data_edit['tgl_permohonan'];?> <br />
            Pengumpul Data Yuridis</p></td>
        </tr>
        <tr>
          <td width="274" valign="top"><p>&nbsp;</p>
              <p><strong>1. </strong><strong>WAWAN SABUDIAWAN</strong><strong> </strong><br />
                  <strong>NIP. </strong><strong>196807191990031004</strong><strong> </strong></p>
            <p><strong>2. </strong><strong>SETIA BUDIANTO. SP</strong><strong> </strong></p></td>
          <td width="142" valign="top"><p>&nbsp;</p>
              <p>( ...................... )</p>
            <p>&nbsp;</p>
            <p>( ...................... )</p></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>

</table>

</page>
<page size="F4">
<table align="center" width="700" border="0">
  

  <tr>
    <td><p align="right"><em>Lampiran 13</em></p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="93" valign="top"><p>&nbsp;</p></td>
          <td width="19" valign="top"><p>&nbsp;</p></td>
          <td width="226" valign="top"><p>&nbsp;</p>
              <p align="right">Sdr.</p>
            <p><strong>&nbsp;</strong></p></td>
          <td width="340" valign="top"><p>Kepada    Yth.<br />
            Kepala    Kantor Pertanahan Kabupaten&nbsp; Kuningan<br />
            Cq.<br />
            Ketua Panitia Ajudikasi<br />
            Pendaftaran Tanah Sistematis    Lengkap<br />
            Di -<br />
            Kuningan </p></td>
        </tr>
      </table>
      <p align="center">&nbsp;</p>
      <p>Dengan hormat, </p>
      <p>Yang bertanda tangan  di bawah ini : </p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="115" valign="top"><p>Nama</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="539" valign="top"><p><strong><?php echo $data_edit['pemohon_1'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="115" valign="top"><p>Umur</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="539" valign="top"><p><strong> <?php echo $data_edit['umur_1'];?></strong><strong>&nbsp;TAHUN</strong></p></td>
        </tr>
        <tr>
          <td width="115" valign="top"><p>Pekerjaan</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="539" valign="top"><p><strong> <?php echo $data_edit['pekerjaan_1'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="115" valign="top"><p>Nomor    KTP</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="539" valign="top"><p><strong><?php echo $data_edit['no_ktp_1'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="115" valign="top"><p>Alamat</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="539" valign="top"><p><strong>DUSUN PAHING 12/03 DESA CARACAS</strong><strong> </strong></p></td>
        </tr>
      </table>
      <p>Dalam hal ini  bertindak untuk dan atas nama diri sendiri/selaku kuasa dari : </p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="115" valign="top"><p>Nama</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="539" valign="top"><p>.................................................................................................................................</p></td>
        </tr>
        <tr>
          <td width="115" valign="top"><p>Umur</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="539" valign="top"><p>.................................................................................................................................</p></td>
        </tr>
        <tr>
          <td width="115" valign="top"><p>Pekerjaan</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="539" valign="top"><p>.................................................................................................................................</p></td>
        </tr>
        <tr>
          <td width="115" valign="top"><p>Nomor    KTP</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="539" valign="top"><p>.................................................................................................................................</p></td>
        </tr>
        <tr>
          <td width="115" valign="top"><p>Alamat</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="539" valign="top"><p>.................................................................................................................................</p></td>
        </tr>
      </table>
      <p>Berdasarkan Surat  Kuasa Nomor &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;tanggal&hellip;..&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;dengan ini mengajukan permohonan *)</p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="36" valign="top"><p align="right">1. </p></td>
          <td width="303" valign="top"><p>Pengukuran</p></td>
        </tr>
        <tr>
          <td width="36" valign="top"><p align="right">2.</p></td>
          <td width="303" valign="top"><p>Konversi/ Pendaftaran Hak Milik    Adat</p></td>
        </tr>
      </table>
      <p>Atas  bidang Tanah Milik Adat : </p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="149" valign="top"><p>Terletak    di blok </p></td>
          <td width="28" valign="top"><p>:</p></td>
          <td width="499" valign="top"><p><strong> <?php echo $data_edit['jalan_gang_blok'];?></strong> </p></td>
        </tr>
        <tr>
          <td width="149" valign="top"><p>Desa/Kelurahan. </p></td>
          <td width="28" valign="top"><p>:</p></td>
          <td width="499" valign="top"><p><strong> <?php echo $data_edit['desa_kelurahan'];?></strong> </p></td>
        </tr>
        <tr>
          <td width="149" valign="top"><p>Kecamatan </p></td>
          <td width="28" valign="top"><p>:</p></td>
          <td width="499" valign="top"><p><strong> <?php echo $data_edit['kecamatan'];?></strong> </p></td>
        </tr>
        <tr>
          <td width="149" valign="top"><p>Kabupaten </p></td>
          <td width="28" valign="top"><p>:</p></td>
          <td width="499" valign="top"><p><strong>KUNINGAN</strong> </p></td>
        </tr>
        <tr>
          <td width="149" valign="top"><p>Pengunaan    Tanah </p></td>
          <td width="28" valign="top"><p>:</p></td>
          <td width="499" valign="top"><p><strong> <?php echo $data_edit['penggunaan_tanah'];?></strong> </p></td>
        </tr>
      </table>
      <p>Untuk melengkapi  permohonan dimaksud, bersama ini saya lampirkan : </p>
      <table border="1" cellspacing="0" cellpadding="0">
        <tr>
          <td width="677" valign="top"><ol>
            <li>Photo    Copy KTP No. <strong> <?php echo $data_edit['no_ktp_1'];?></strong> </li>
          </ol></td>
        </tr>
        <tr>
          <td width="677" valign="top"><ol>
            <li>SPPT&nbsp; No. <strong> <?php echo $data_edit['no_sppt'];?></strong> </li>
            <li><strong> <?php echo $data_edit['berdasarkan_1'];?></strong> No. <strong> <?php echo $data_edit['nomor'];?></strong><strong> </strong>Tanggal&nbsp; <strong> <?php echo $data_edit['tanggal'];?></strong> </li>
          </ol></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="329" valign="top"><p>&nbsp;</p></td>
          <td width="349" valign="top"><p>Kuningan,  <?php echo $data_edit['tgl_permohonan'];?><br />
            Hormat kami,</p>
              <p align="center">&nbsp;</p>
            <p align="center">Materai 6000</p>
            <p align="center">&nbsp;</p>
            <p align="center"><strong><?php echo $data_edit['pemohon_1'];?></strong><strong> </strong></p></td>
        </tr>
      </table>
      <strong><em><br clear="all" />
      </em></strong></td>

</table>
</page>

<page size="F4">

<table align="center" width="700" border="0">
  <tr>
    <td><p align="right"><em>Lampiran IV PMATR/  KBPN No. 35 Tahun 2016</em></p>
      <p align="center"><strong>SURAT PERNYATAAN PENGUASAAN FISIK BIDANG  TANAH</strong><br />
          <strong>&nbsp;</strong></p>
      <br clear="all" />
      <br />
Saya yang bertanda  tangan di bawah  ini&nbsp; :
<table border="0" cellspacing="0" cellpadding="0" width="614">
  <tr>
    <td width="160" valign="top"><br />
      Nama </td>
    <td width="19" valign="top"><p align="center">: </p></td>
    <td width="435" valign="top"><p><strong><?php echo $data_edit['pemohon_1'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="160" valign="top"><p>NIK </p></td>
    <td width="19" valign="top"><p align="center">: </p></td>
    <td width="435" valign="top"><p><strong></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="160" valign="top"><p>Agama </p></td>
    <td width="19" valign="top"><p align="center">: </p></td>
    <td width="435" valign="top"><p><strong> <?php echo $data_edit['agama_1'];?></strong></p></td>
  </tr>
  <tr>
    <td width="160" valign="top"><p>Usia </p></td>
    <td width="19" valign="top"><p align="center">: </p></td>
    <td width="435" valign="top"><p><strong><?php echo $data_edit['umur_1'];?></strong><strong>&nbsp;TAHUN</strong></p></td>
  </tr>
  <tr>
    <td width="160" valign="top"><p>Pekerjaan </p></td>
    <td width="19" valign="top"><p align="center">: </p></td>
    <td width="435" valign="top"><p><strong><?php echo $data_edit['pekerjaan_1'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="160" valign="top"><p>Alamat </p></td>
    <td width="19" valign="top"><p align="center">: </p></td>
    <td width="435" valign="top"><p><strong><?php echo $data_edit['alamat'];?></strong><strong> </strong></p></td>
  </tr>
</table>
<p>Dengan ini  menyatakan dengan sesungguhnya serta dengan itikad baik bahwa saya  menguasai/memiliki sebidang tanah yang terletak di :</p>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="160" valign="top"><br />
      Jalan/RT/RW </td>
    <td width="19" valign="top"><p align="center">: </p></td>
    <td width="430" valign="top"><p><strong><?php echo $data_edit['jalan_gang_blok'];?></strong><strong>/</strong><strong><?php echo $data_edit['rt_rw'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="160" valign="top"><p>Desa/ Kelurahan </p></td>
    <td width="19" valign="top"><p align="center">: </p></td>
    <td width="430" valign="top"><p><strong><?php echo $data_edit['desa_kelurahan'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="160" valign="top"><p>Kecamatan </p></td>
    <td width="19" valign="top"><p align="center">: </p></td>
    <td width="430" valign="top"><p><strong><?php echo $data_edit['kecamatan'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="160" valign="top"><p>Kabupaten </p></td>
    <td width="19" valign="top"><p align="center">: </p></td>
    <td width="430" valign="top"><p><strong>KUNINGAN</strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="160" valign="top"><p>NIB </p></td>
    <td width="19" valign="top"><p align="center">: </p></td>
    <td width="430" valign="top"><p><strong><?php echo $data_edit['nib'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="160" valign="top"><p>Penggunaan Tanah </p></td>
    <td width="19" valign="top"><p align="center">: </p></td>
    <td width="430" valign="top"><p><strong><?php echo $data_edit['penggunaan_tanah'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="160" valign="top"><p>Luas </p></td>
    <td width="19" valign="top"><p align="center">: </p></td>
    <td width="430" valign="top"><p><strong><?php echo $data_edit['luas'];?></strong><strong> M2</strong><strong> </strong></p></td>
  </tr>
</table>
<p>Dengan batas-batas  sebagai berikut : </p>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="160" valign="top"><br />
      Utara </td>
    <td width="19" valign="top"><p align="center">: </p></td>
    <td width="430" valign="top"><p><strong><?php echo $data_edit['utara'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="160" valign="top"><p>Timur </p></td>
    <td width="19" valign="top"><p align="center">: </p></td>

    <td width="430" valign="top"><p><strong><?php echo $data_edit['timur'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="160" valign="top"><p>Selatan </p></td>
    <td width="19" valign="top"><p align="center">: </p></td>
    <td width="430" valign="top"><p><strong><?php echo $data_edit['selatan'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="160" valign="top"><p>Barat </p></td>
    <td width="19" valign="top"><p align="center">: </p></td>
    <td width="430" valign="top"><p><strong><?php echo $data_edit['barat'];?></strong><strong> </strong></p></td>
  </tr>
</table>
<p>Bahwa bidang tanah  tersebut saya peroleh dari <strong><?php echo $data_edit['b_pada_saat_ini_dikuasai_oleh_2'];?></strong> sejak  tahun <strong><?php echo $data_edit['sejak_tahun_1'];?></strong>yang sampai dengan saat  ini saya kuasai/miliki secara fisik dan terus-menerus, tidak dijadikan jaminan  sesuatu hutang,  tidak dalam sengketa, bukan aset Pemerintah/Daerah, dan tidak berada/termasuk  di/ dalam kawasan hutan. </p>
<p>Surat pernyataan  ini saya buat dengan sebenar-benarnya dengan penuh tanggung  jawab baik secara perdata maupun secara pidana, dan apabila di kemudian hari  terdapat unsur-unsur yang tidak benar dalam  pernyataan ini maka segala akibat yang timbul menjadi tanggung jawab saya  sepenuhnya dan bersedia dituntut sesuai ketentuan hukum yang berlaku, serta  tidak akan melibatkan pihak lain dan saya bersedia atas sertipikat hak atas  tanah yang telah terbit dan saya terima dibatalkan oleh pejabat yang  berwenang. </p>
<p>Demikian Surat  Pernyataan ini saya buat di hadapan saksi-saksi :</p>
<table border="0" cellspacing="0" cellpadding="0" width="682">
  <tr>
    <td width="31" valign="top"><br />
      1. </td>
    <td width="90" valign="top"><p>Nama </p></td>
    <td width="28" valign="top"><p align="center">: </p></td>
    <td width="518" colspan="2" valign="top"><p><strong>AJI PANGESTU</strong><strong> </strong></p></td>
    <td width="16"></td>
  </tr>
  <tr>
    <td width="31" valign="top"><p align="center">&nbsp;</p></td>
    <td width="90" valign="top"><p>NIK </p></td>
    <td width="28" valign="top"><p align="center">: </p></td>
    <td width="518" colspan="2" valign="top"><p><strong>32847464748888888</strong><strong> </strong></p></td>
    <td width="16" valign="top"><p><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="31" valign="top"><p align="center">&nbsp;</p></td>
    <td width="90" valign="top"><p>Agama </p></td>
    <td width="28" valign="top"><p align="center">: </p></td>
    <td width="518" colspan="2" valign="top"><p><strong>ISLAM</strong><strong> </strong></p></td>
    <td width="16" valign="top"><p><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="31" valign="top"><p align="center">&nbsp;</p></td>
    <td width="90" valign="top"><p>Usia</p></td>
    <td width="28" valign="top"><p align="center">: </p></td>
    <td width="518" colspan="2" valign="top"><p><strong>55</strong><strong> TAHUN</strong><strong> </strong></p></td>
    <td width="16" valign="top"><p><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="31" valign="top"><p align="center">&nbsp;</p></td>
    <td width="90" valign="top"><p>Pekerjaan </p></td>
    <td width="28" valign="top"><p align="center">: </p></td>
    <td width="518" colspan="2" valign="top"><p><strong>PERANGKAT DESA</strong><strong> </strong></p></td>
    <td width="16" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="31" valign="top"><p align="center">&nbsp;</p></td>
    <td width="90" valign="top"><p>Alamat </p></td>
    <td width="28" valign="top"><p align="center">: </p></td>
    <td width="533" colspan="3" valign="top"><p><strong>DESA CILIMUS</strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="31" valign="top"><p align="center">2.</p></td>
    <td width="90" valign="top"><p>Nama </p></td>
    <td width="28" valign="top"><p align="center">: </p></td>
    <td width="321" valign="top"><p><strong>DEDE YUSUF</strong><strong> </strong></p></td>
    <td width="212" colspan="2" valign="top"><p><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="31" valign="top"><p>&nbsp;</p></td>
    <td width="90" valign="top"><p>NIK </p></td>
    <td width="28" valign="top"><p align="center">: </p></td>
    <td width="321" valign="top"><p><strong>32462789999999999</strong><strong> </strong></p></td>
    <td width="212" colspan="2" valign="top"><p><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="31" valign="top"><p>&nbsp;</p></td>
    <td width="90" valign="top"><p>Agama </p></td>
    <td width="28" valign="top"><p align="center">: </p></td>
    <td width="321" valign="top"><p><strong>ISLAM</strong><strong> </strong></p></td>
    <td width="212" colspan="2" valign="top"><p><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="31" valign="top"><p>&nbsp;</p></td>
    <td width="90" valign="top"><p>Usia</p></td>
    <td width="28" valign="top"><p align="center">: </p></td>
    <td width="321" valign="top"><p><strong>53</strong><strong> TAHUN</strong><strong> </strong></p></td>
    <td width="212" colspan="2" valign="top"><p><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="31" valign="top"><p>&nbsp;</p></td>
    <td width="90" valign="top"><p>Pekerjaan </p></td>
    <td width="28" valign="top"><p align="center">: </p></td>
    <td width="321" valign="top"><p><strong>PERANGKAT DESA</strong><strong> </strong></p></td>
    <td width="212" colspan="2" valign="top"><p><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="31" valign="top"><p>&nbsp;</p></td>
    <td width="90" valign="top"><p>Alamat</p></td>
    <td width="28" valign="top"><p align="center">: </p></td>
    <td width="533" colspan="3" valign="top"><p><strong>DESA CILIMUS</strong><strong> </strong></p></td>
  </tr>
</table>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="142" valign="top"><p>DIBUAT DI </p></td>
    <td width="19" valign="top"><p>: </p></td>
    <td width="207" valign="top"><p><strong>KUNINGAN</strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="142" valign="top"><p>PADA TANGGAL</p></td>
    <td width="19" valign="top"><p>: </p></td>
    <td width="207" valign="top"><p><strong> <?php echo $data_edit['tgl_permohonan'];?></strong></p></td>
  </tr>
</table>
<div align="center">
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="339" colspan="2" valign="top"><p>SAKSI-SAKSI : </p></td>
      <td width="338" rowspan="2" valign="top"><p align="center">YANG MEMBUAT    PERNYATAAN,</p>
          <p align="center">Materai 6000</p>
        <p align="center"><em><u>&nbsp;</u></em></p>
        <p align="center"><em><u>&nbsp;</u></em></p>
        <p align="center"><strong><?php echo $data_edit['pemohon_1'];?></strong><strong> </strong></p></td>
    </tr>
    <tr>
      <td width="182" valign="top"><p>&nbsp;</p>
          <ol>
            <li><strong>AJI PANGESTU</strong> </li>
          </ol>
        <p>&nbsp;</p>
        <ol>
          <li><strong>DEDE YUSUF</strong><strong> </strong></li>
        </ol></td>
      <td width="157" valign="top"><p>&nbsp;</p>
          <p align="center">( &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;. )</p>
        <p align="center">( &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;. )</p></td>
    </tr>
  </table>
</div>
<em><br clear="all" />
</em></td>
  </tr>
</table>
</page>

<page size="F4">

<table align="center" width="700" border="0">
  

  <tr>
    <td><table border="0" cellspacing="0" cellpadding="0" width="662">
      <tr>
        <td width="104" valign="top"><p align="center"><strong> </strong><strong> </strong><img src="Logo_Kabupaten_kuningan.jpg" width="100" height="100"></p></td>
        <td width="558" valign="top"><p align="center"><strong>PEMERINTAH KABUPATEN  KUNINGAN</strong><br>
            <strong>KECAMATAN </strong><strong><?php echo $data_edit['kecamatan'];?></strong><strong> </strong><br>
            <strong>DESA </strong><?php echo $data_edit['desa_kelurahan'];?><strong> </strong><br />
          Alamat : <?php echo $data_edit['alamat_kantor_desa']; ?> </p></td>
      </tr>
    </table>
      <div> </div>
      <br clear="all" />
      <p align="center"><strong><u>SURAT KETERANGAN </u></strong><br />
        Nomor :........................................... </p>
      <p>Yang bertanda tangan di bawah ini,  Kepala Desa <strong><?php echo $data_edit['desa_kelurahan'];?></strong>, Kecamatan <strong><?php echo $data_edit['kecamatan'];?></strong>, Kabupaten <strong>KUNINGAN</strong>, dengan ini menerangkan sebagai berikut : </p>
      <ol>
        <li>Bahwa sebidang tanah seluas <strong><?php echo $data_edit['luas'];?></strong><strong> </strong>M2 terletak di :</li>
      </ol>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="160" valign="top"><p>Jalan</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="465" valign="top"><p><strong><?php echo $data_edit['jalan_gang_blok'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="160" valign="top"><p>RT/RW</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="465" valign="top"><p><strong><?php echo $data_edit['rt_rw'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="160" valign="top"><p>Desa</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="465" valign="top"><p><strong><?php echo $data_edit['desa_kelurahan'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="160" valign="top"><p>Kecamatan</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="465" valign="top"><p><strong><?php echo $data_edit['kecamatan'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="160" valign="top"><p>Kabupaten</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="465" valign="top"><p><strong>KUNINGAN</strong></p></td>
        </tr>
      </table>
      <p>adalah benar merupakan Tanah Milik Adat sesuai Letter C/SPPT/PBB No. <strong><?php echo $data_edit['no_sppt'];?></strong> atas nama <strong><?php echo $data_edit['pemohon_1'];?></strong> yang penggunaannya berupa <strong><?php echo $data_edit['penggunaan_tanah'];?></strong>, dengan batas-batasnya : </p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="161" valign="top"><ol>
            <li>Sebelah Utara</li>
          </ol></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="454" valign="top"><p><strong><?php echo $data_edit['utara'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="161" valign="top"><ol>
            <li>Sebelah Timur</li>
          </ol></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="454" valign="top"><p><strong><?php echo $data_edit['timur'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="161" valign="top"><ol>
            <li>Sebelah Selatan</li>
          </ol></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="454" valign="top"><p><strong><?php echo $data_edit['selatan'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="161" valign="top"><ol>
            <li>Sebelah Barat</li>
          </ol></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="454" valign="top"><p><strong><?php echo $data_edit['barat'];?></strong><strong> </strong></p></td>
        </tr>
      </table>
      <p>yang dimiliki <strong><?php echo $data_edit['pemohon_1'];?></strong>dan secara fisik dikuasai oleh yang bersangkutan.</p>
      <ol>
        <li>Bahwa riwayat tanah tersebut menurut  catatan Buku Desa <strong><?php echo $data_edit['desa_kelurahan'];?></strong><strong> </strong>dan informasi kesaksian adalah sebagai berikut :</li>
        <li>Pada tahun <strong><?php echo $data_edit['sejak_tahun_2'];?></strong> tercatat atas nama <strong><?php echo $data_edit['b_pada_saat_ini_dikuasai_oleh_2'];?></strong> Kohir/C Nomor <strong><?php echo $data_edit['no_letter_c'];?></strong><strong>, </strong>Persil No.<strong><?php echo $data_edit['no_persil'];?></strong>, Kelas <strong><?php echo $data_edit['kelas'];?></strong>. </li>
        <li>Pada tahun&nbsp; <strong><?php echo $data_edit['sejak_tahun_1'];?></strong> dialihkan/beralih kepada <strong><?php echo $data_edit['pemohon_1'];?></strong> berdasarkan <strong><?php echo $data_edit['berdasarkan_1'];?></strong> tanggal <strong><?php echo $data_edit['tanggal'];?></strong> nomor :&nbsp; <strong><?php echo $data_edit['nomor'];?></strong> Kohirnya berubah menjadi C Nomor .....................&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </li>
        <li>Pada tahun ............. dialihkan/beralih kepada ....................&nbsp;  berdasarkan................... </li>
        <li>Pada tahun ............. dialihkan/beralih kepada ....................&nbsp;  berdasarkan  ...........&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </li>
      </ol>
      <p>Kohirnya berubah menjadi C Nomor ......................................&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
      <ol>
        <li>Bahwa tanah tersebut bukan merupakan  aset Pemerintah/Daerah dan  tidak termasuk dalam kawasan hutan. </li>
        <li>Bahwa tanah tersebut tidak sedang  menjadi jaminan suatu hutang dan tidak dalam sengketa. </li>
        <li>Surat Keterangan ini bukan merupakan  bukti pemilikan tanah tetapi hanya dipergunakan sebagai kelengkapan permohonan  pendaftaran hak atas tanah bekas milik adat.</li>
      </ol>
      <p>Demikian Surat Keterangan ini dibuat  untuk dapat dipergunakan sebagaimana mestinya.</p>
      <p>&nbsp;</p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="329" valign="top"><p>&nbsp;</p></td>
          <td width="329" valign="top"><p align="center">Kuningan, <?php echo $data_edit['tgl_permohonan'];?><br />
            Kepala Desa <strong><?php echo $data_edit['desa_kelurahan'];?></strong></p>
              <p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
            <p align="center"><strong><?php echo $data_edit['nama_kepala_desa'] ; ?></strong><strong> </strong></p>
            <p align="center"><strong>&nbsp;</strong></p></td>
        </tr>
      </table></td>
  </tr>

</table>

</page>

<page size="F4">

<table align="center" width="700" border="0"> 
  <tr>
    <td><table border="0" cellspacing="0" cellpadding="0" width="662">
      <tr>
        <td width="104" valign="top"><p align="center"><strong> </strong><strong> </strong><img src="Logo_Kabupaten_kuningan.jpg" width="100" height="100"></p></td>
        <td width="558" valign="top"><p align="center"><strong>PEMERINTAH KABUPATEN  KUNINGAN</strong><br>
                <strong>KECAMATAN </strong><strong><?php echo $data_edit['kecamatan'];?></strong><strong> </strong><br>
                <strong>DESA </strong><?php echo $data_edit['desa_kelurahan'];?><strong> </strong><br />
          Alamat : <?php echo $data_edit['alamat_kantor_desa'] ?> </p></td>
      </tr>
    </table>
    <p align="center"><br />
          <strong>&nbsp;</strong></p>
      <p align="center"><strong><u>&nbsp;</u></strong></p>
      <br clear="all" />
      <p align="center"><strong><u>SURAT KETERANGAN</u></strong><br />
          <strong>No</strong><strong>mor :</strong><strong> </strong><strong>.........................................</strong><strong> </strong></p>
      <p>Yang bertanda tangan di bawah ini Kepala Desa <strong><?php echo $data_edit['desa_kelurahan'];?></strong>, Kecamatan <strong><?php echo $data_edit['kecamatan'];?></strong>, Kabupaten <strong>KUNINGAN</strong>, dengan ini menerangkan bahwa  : </p>
      <ol>
        <li>Berdasarkan data-data yang ada di Kantor kami bahwa buku &nbsp;C desa tidak ada, yang ada adalah SPPT dengan  nomor <strong><?php echo $data_edit['no_sppt'];?></strong> atas nama <strong><?php echo $data_edit['pemohon_1'];?></strong>. </li>
        <li>Bahwa bidang tanah yang dimohon sertipikat oleh Saudara <strong><?php echo $data_edit['pemohon_1'];?></strong> SPPT Nomor <strong><?php echo $data_edit['no_sppt'];?></strong> atas nama <strong><?php echo $data_edit['pemohon_1'];?></strong> adalah  benar merupakan tanah milik adat.</li>
        <li>Bahwa tanah tersebut  dimiliki oleh <strong><?php echo $data_edit['pemohon_1'];?></strong> sejak tahun <strong><?php echo $data_edit['sejak_tahun_1'];?></strong> berdasarkan <strong><?php echo $data_edit['berdasarkan_1'];?></strong> tanggal <strong><?php echo $data_edit['tanggal'];?></strong> Nomor <strong><?php echo $data_edit['nomor'];?></strong>. </li>
      </ol>
      <p>Demikian Surat Keterangan  ini kami buat dengan sebenarnya untuk digunakan dalam rangka permohonan  sertipikat.</p>
      <p>&nbsp;</p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="329" valign="top"><p><u>&nbsp;</u></p></td>
          <td width="349" valign="top"><p align="center">&nbsp;&nbsp;&nbsp; Kuningan, <strong>&nbsp;</strong><?php echo $data_edit['tgl_permohonan'];?><br />
            Kepala Desa <strong><?php echo $data_edit['desa_kelurahan'];?></strong> </p>
              <p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
            <p align="center"><strong><?php echo $data_edit['nama_kepala_desa'] ; ?></strong><strong> </strong></p></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
    <p><strong>&nbsp;</strong></p></td>
  </tr>
  </table>

</page>

<page size="F4">

<table align="center" width="700" border="0">
  

  <tr>
    <td><p align="center"><strong>SURAT  PERNYATAAN KESAKSIAN </strong><strong> </strong></p>
      <p>Pada hari ini <strong>....................</strong>, tanggal <strong>......................</strong>, bulan <strong>.....................</strong>, tahun <strong>.........................</strong><strong> </strong>kami yang bertanda tangan di bawah  ini :</p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="26" valign="top"><p>1.</p></td>
          <td width="142" valign="top"><p>Nama</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="482" valign="top"><p><strong>AJI PANGESTU</strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="26" valign="top"><p>&nbsp;</p></td>
          <td width="142" valign="top"><p>Umur</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="482" valign="top"><p><strong>55</strong><strong> TAHUN</strong></p></td>
        </tr>
        <tr>
          <td width="26" valign="top"><p>&nbsp;</p></td>
          <td width="142" valign="top"><p>Pekerjaan</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="482" valign="top"><p><strong>PERANGKAT DESA</strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="26" valign="top"><p>&nbsp;</p></td>
          <td width="142" valign="top"><p>Alamat</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="482" valign="top"><p><strong>DESA CILIMUS</strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="26" valign="top"><p>2.</p></td>
          <td width="142" valign="top"><p>Nama</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="482" valign="top"><p><strong>DEDE YUSUF</strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="26" valign="top"><p>&nbsp;</p></td>
          <td width="142" valign="top"><p>Umur</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="482" valign="top"><p><strong>53</strong><strong> TAHUN</strong></p></td>
        </tr>
        <tr>
          <td width="26" valign="top"><p>&nbsp;</p></td>
          <td width="142" valign="top"><p>Pekerjaan</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="482" valign="top"><p><strong>PERANGKAT DESA</strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="26" valign="top"><p>&nbsp;</p></td>
          <td width="142" valign="top"><p>Alamat</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="482" valign="top"><p><strong>DESA CILIMUS</strong><strong> </strong></p></td>
        </tr>
      </table>
      <p>dengan ini memberikan kesaksian atas kepemilikan sebidang  / sebagian tanah Letter C/SPPT No <strong><?php echo $data_edit['no_sppt'];?></strong> Persil <strong><?php echo $data_edit['no_persil'];?></strong> Kelas <strong><?php echo $data_edit['kelas'];?></strong> Luas <strong><?php echo $data_edit['luas'];?></strong> m2, tertulis atas nama <strong><?php echo $data_edit['pemohon_1'];?></strong>, terletak di blok <strong><?php echo $data_edit['jalan_gang_blok'];?></strong> RT/RW <strong><?php echo $data_edit['rt_rw'];?></strong> &nbsp;Desa <strong><?php echo $data_edit['desa_kelurahan'];?></strong><strong>,</strong> Kecamatan <strong><?php echo $data_edit['kecamatan'];?></strong><strong>,</strong> Kabupaten <strong>KUNINGAN</strong> dengan batas - batas:</p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="168" valign="top"><p>Sebelah Utara </p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="482" valign="top"><p><strong><?php echo $data_edit['utara'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="168" valign="top"><p>Sebelah Timur </p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="482" valign="top"><p><strong><?php echo $data_edit['timur'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="168" valign="top"><p>Sebelah Selatan </p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="482" valign="top"><p><strong><?php echo $data_edit['selatan'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="168" valign="top"><p>Sebelah Barat</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="482" valign="top"><p><strong><?php echo $data_edit['barat'];?></strong><strong> </strong></p></td>
        </tr>
      </table>
      <p>Bahwa tanah tersebut  sejak tahun <strong><?php echo $data_edit['sejak_tahun_2'];?></strong> dikuasai oleh <strong><?php echo $data_edit['b_pada_saat_ini_dikuasai_oleh_2'];?></strong>. Berikutnya pada tahun <strong><?php echo $data_edit['sejak_tahun_1'];?></strong> dikeluarkan kepada :</p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="168" valign="top"><br />
            Nama </td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="482" valign="top"><p><strong><?php echo $data_edit['pemohon_1'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="168" valign="top"><p>Umur</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="482" valign="top"><p><strong><?php echo $data_edit['umur_1'];?>&nbsp;TAHUN</strong></p></td>
        </tr>
        <tr>
          <td width="168" valign="top"><p>Pekerjaan</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="482" valign="top"><p><strong><?php echo $data_edit['pekerjaan_1'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="168" valign="top"><p>Alamat</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="482" valign="top"><p><strong><?php echo $data_edit['alamat'];?></strong><strong> </strong></p></td>
        </tr>
      </table>
      <p>berdasarkan <strong><?php echo $data_edit['berdasarkan_1'];?></strong> tanggal <strong><?php echo $data_edit['tanggal'];?></strong>, nomor <strong><?php echo $data_edit['nomor'];?></strong> dan sampai saat ini masih dikuasai oleh <strong><?php echo $data_edit['pemohon_1'];?></strong> adalah orang yang sebenarnya berhak atas tanah dimaksud.</p>
      <p>Demikian surat  pernyataan ini dibuat dengan sesungguhnya, untuk dipergunakan sebagaimana mestinya.</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="329" rowspan="2" valign="top"><p align="center">Mengetahui : </p>
              <p align="center">Kepala Desa <strong><?php echo $data_edit['desa_kelurahan'];?></strong> </p>
            <p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
            <p align="center"><strong><?php echo $data_edit['nama_kepala_desa'] ; ?></strong><strong> </strong></p></td>
          <td width="348" colspan="2" valign="top"><p align="center">Yang memberikan    kesaksian </p></td>
        </tr>
        <tr>
          <td width="208" valign="top"><p>&nbsp;</p>
              <p><strong>1.</strong><strong> </strong><strong>AJI PANGESTU</strong><strong> </strong></p>
            <p><strong>&nbsp;</strong></p>
            <p><strong>&nbsp;</strong></p>
            <p><strong>2.</strong><strong> </strong><strong>DEDE YUSUF</strong> </p></td>
          <td width="140" valign="top"><p>&nbsp;</p>
              <p>( .............................    ) </p>
            <p align="center">&nbsp;</p>
            <p align="center">Materai 6000</p>
            <p>( .............................    ) </p>
            <p>&nbsp;</p></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    <p align="right"><em>&nbsp;</em></p></td>
  </tr>

</table>

</page>

<page size="F4">

<table align="center" width="700" border="0">
  

  <tr>
    <td><p align="right"><em>Lampiran V PMATR/KBPN No. 35 Tahun 2016</em><br />
          <strong>SURAT PERNYATAAN BPHTB TERHUTANG</strong></p>
      <p>Saya  yang bertanda tangan di bawah  ini&nbsp; :</p>
      <table border="0" cellspacing="0" cellpadding="0" width="671">
        <tr>
          <td width="104" valign="top"><br />
            Nama </td>
          <td width="28" valign="top"><p align="center">:</p></td>
          <td width="539" valign="top"><p><strong><?php echo $data_edit['pemohon_1'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="104" valign="top"><p>NIK</p></td>
          <td width="28" valign="top"><p align="center">:</p></td>
          <td width="539" valign="top"><p><strong>...............</strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="104" valign="top"><p>Agama</p></td>
          <td width="28" valign="top"><p align="center">:</p></td>
          <td width="539" valign="top"><p><strong> <?php echo $data_edit['agama_1'];?></strong></p></td>
        </tr>
        <tr>
          <td width="104" valign="top"><p>Usia</p></td>
          <td width="28" valign="top"><p align="center">:</p></td>
          <td width="539" valign="top"><p><strong><?php echo $data_edit['umur_1'];?>&nbsp;TAHUN</strong></p></td>
        </tr>
        <tr>
          <td width="104" valign="top"><p>Pekerjaan</p></td>
          <td width="28" valign="top"><p align="center">:</p></td>
          <td width="539" valign="top"><p><strong><?php echo $data_edit['pekerjaan_1'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="104" valign="top"><p>Alamat</p></td>
          <td width="28" valign="top"><p align="center">:</p></td>
          <td width="539" valign="top"><p><strong><?php echo $data_edit['alamat'];?></strong><strong> </strong></p></td>
        </tr>
      </table>
      <p>Dengan ini menyatakan dengan  sesungguhnya bahwa atas penguasaan/pemilikan sebidang tanah yang sesuai dengan  dan/atau tertuang dalam Surat Keputusan Pemberian Hak Atas Tanah/Surat  Keputusan Penegasan Konversi Hak Atas Tanah Tanggal :  --------------------- &nbsp;Nomor  : ------------------------<br />
        terletak di : </p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="161" valign="top"><br />
            Jalan/RT/RW </td>
          <td width="28" valign="top"><p align="center">:</p></td>
          <td width="486" valign="top"><p><strong><?php echo $data_edit['jalan_gang_blok'];?></strong><strong>/</strong><strong><?php echo $data_edit['rt_rw'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="161" valign="top"><p>Desa/    Kelurahan</p></td>
          <td width="28" valign="top"><p align="center">:</p></td>
          <td width="486" valign="top"><p><strong><?php echo $data_edit['desa_kelurahan'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="161" valign="top"><p>Kecamatan</p></td>
          <td width="28" valign="top"><p align="center">:</p></td>
          <td width="486" valign="top"><p><strong><?php echo $data_edit['kecamatan'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="161" valign="top"><p>Kabupaten/Kota</p></td>
          <td width="28" valign="top"><p align="center">:</p></td>
          <td width="486" valign="top"><p><strong>KUNINGAN</strong></p></td>
        </tr>
        <tr>
          <td width="161" valign="top"><p>NIB</p></td>
          <td width="28" valign="top"><p align="center">:</p></td>
          <td width="486" valign="top"><p><strong><?php echo $data_edit['nib'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="161" valign="top"><p>Penggunaan Tanah</p></td>
          <td width="28" valign="top"><p align="center">:</p></td>
          <td width="486" valign="top"><p><strong><?php echo $data_edit['penggunaan_tanah'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="161" valign="top"><p>Luas</p></td>
          <td width="28" valign="top"><p align="center">:</p></td>
          <td width="486" valign="top"><p><strong><?php echo $data_edit['luas'];?></strong><strong> M2</strong></p></td>
        </tr>
      </table>
      <p>Dengan  batas-batas sebagai berikut : </p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="95" valign="top"><br />
            Utara </td>
          <td width="19" valign="top"><p align="center">:</p></td>
          <td width="562" valign="top"><p><strong><?php echo $data_edit['utara'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="95" valign="top"><p>Timur</p></td>
          <td width="19" valign="top"><p align="center">:</p></td>
          <td width="562" valign="top"><p><strong><?php echo $data_edit['timur'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="95" valign="top"><p>Selatan</p></td>
          <td width="19" valign="top"><p align="center">:</p></td>
          <td width="562" valign="top"><p><strong><?php echo $data_edit['selatan'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="95" valign="top"><p>Barat</p></td>
          <td width="19" valign="top"><p align="center">:</p></td>
          <td width="562" valign="top"><p><strong><?php echo $data_edit['barat'];?></strong><strong> </strong></p></td>
        </tr>
      </table>
      <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><br />
        Bahwa Bea Perolehan Hak atas Tanah dan  Bangunan (BPHTB) yang dikenakan atas perolehan hak atas tanah saya sebagaimana  tersebut di atas, adalah menjadi tanggung jawab saya sepenuhnya dan merupakan  pajak atau bea terhutang bagi saya yang wajib dan akan saya lunasi.</p>
      <p>&nbsp;</p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="113" valign="top"><p>Dibuat    di</p></td>
          <td width="16" valign="top"><p>:</p></td>
          <td width="229" valign="top"><p><strong>KUNINGAN</strong></p></td>
        </tr>
        <tr>
          <td width="113" valign="top"><p>Pada    Tanggal</p></td>
          <td width="16" valign="top"><p>:</p></td>
          <td width="229" valign="top"><p><strong> <?php echo $data_edit['tgl_permohonan'];?></strong></p></td>
        </tr>
      </table>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="343" valign="top"><p align="center">&nbsp;</p></td>
          <td width="343" valign="top"><p align="center">Yang    membuat pernyataan,</p>
              <p align="center">&nbsp;</p>
            <p align="center">Materai    6.000</p>
            <p align="center">&nbsp;</p>
            <p align="center"><strong><?php echo $data_edit['pemohon_1'];?></strong><strong> </strong></p></td>
        </tr>
      </table>
      <p align="center">&nbsp;</p>
      <p>&nbsp;</p>
    <p><em>&nbsp;</em></p></td>
  </tr>

</table>

</page>

<page size="F4">

<table align="center" width="700" border="0">
  

  <tr>
    <td><p align="right"><em>Lampiran 6 Juknis  Bidang Yuridis</em></p>
      <p align="center"><strong>BERITA  ACARA PEMERIKSAAN TANAH</strong><strong> </strong></p>
      <p>Pada hari&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;., tanggal &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip; bulan &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..tahun <strong>DUA RIBU TUJUH BELAS</strong> kami yang bertanda tangan dibawah ini adalah Anggota Panitia Ajudikasi Pendaftaran Tanah  Sistematis Lengkap : </p>
      <table border="0" cellspacing="0" cellpadding="0" width="669">
        <tr>
          <td width="151" valign="top"><ol>
            <ol>
              <li>&nbsp;Nama</li>
            </ol>
          </ol></td>
          <td width="24" valign="top"><p align="center">:</p></td>
          <td width="494" valign="top"><p><strong>SOELISTIONO</strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="151" valign="top"><p>&nbsp;&nbsp;&nbsp;&nbsp; NIP</p></td>
          <td width="24" valign="top"><p align="center">:</p></td>
          <td width="494" valign="top"><p><strong>19600918 198103 1 002</strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="151" valign="top"><p>&nbsp;&nbsp;&nbsp;&nbsp; Jabatan</p></td>
          <td width="24" valign="top"><p align="center">:</p></td>
          <td width="494" valign="top"><p><strong>Wakil Ketua Bidang Fisik</strong></p></td>
        </tr>
        <tr>
          <td width="151" valign="top"><ol>
            <ol>
              <li>&nbsp;Nama</li>
            </ol>
          </ol></td>
          <td width="24" valign="top"><p align="center">:</p></td>
          <td width="494" valign="top"><p><strong>DODI RAHMADI, S.SiT</strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="151" valign="top"><p>&nbsp;&nbsp;&nbsp;&nbsp; NIP</p></td>
          <td width="24" valign="top"><p align="center">:</p></td>
          <td width="494" valign="top"><p><strong>19731217 199503 1 001</strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="151" valign="top"><p>&nbsp;&nbsp;&nbsp;&nbsp; Jabatan</p></td>
          <td width="24" valign="top"><p align="center">:</p></td>
          <td width="494" valign="top"><p><strong>Wakil Ketua Bidang Yuridis</strong></p></td>
        </tr>
      </table>
      <p>Dengan ini kami telah melakukan pemeriksaan tanah atas permohonan sdr. <strong><?php echo $data_edit['pemohon_1'];?></strong><strong>,</strong> dalam hal ini  bertindak untuk dan atas nama sendiri, atas bidang tanah seluas <strong><?php echo $data_edit['luas'];?></strong> m&sup2;terletak di Jalan/Blok <strong><?php echo $data_edit['jalan_gang_blok'];?></strong><strong>,</strong> RT/RW <strong><?php echo $data_edit['rt_rw'];?></strong><em>,</em> Desa <strong><?php echo $data_edit['desa_kelurahan'];?></strong><strong>,</strong> Kecamatan <strong><?php echo $data_edit['kecamatan'];?></strong><strong>,</strong> Kabupaten <strong>KUNINGAN</strong> dengan hasil sebagai berikut :</p>
      <ol>
        <li>Penguasaan, Penggunaan dan Keadaan Tanah :</li>
        <li>Digarap/dikuasai/dimiliki oleh <strong><?php echo $data_edit['pemohon_1'];?></strong><strong>,</strong> berdasarkan <strong><?php echo $data_edit['berdasarkan_1'];?></strong> </li>
        <li>Penggunaan tanah sesuai RTRW wilayah setempat</li>
        <li>Keadaan tanah berupa <strong><?php echo $data_edit['penggunaan_tanah'];?></strong><strong>.</strong> </li>
        <li>Tanda-tanda batas telah terpasang dengan batas-batas bidang tanah yang  dimohon :</li>
      </ol>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="145" valign="top"><p>Sebelah Utara</p></td>
          <td width="30" valign="top"><p align="center">:</p></td>
          <td width="399" valign="top"><p><strong><?php echo $data_edit['utara'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="145" valign="top"><p>Sebelah Timur</p></td>
          <td width="30" valign="top"><p align="center">:</p></td>
          <td width="399" valign="top"><p><strong><?php echo $data_edit['timur'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="145" valign="top"><p>Sebelah Selatan</p></td>
          <td width="30" valign="top"><p align="center">:</p></td>
          <td width="399" valign="top"><p><strong><?php echo $data_edit['selatan'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="145" valign="top"><p>Sebelah Barat</p></td>
          <td width="30" valign="top"><p align="center">:</p></td>
          <td width="399" valign="top"><p><strong><?php echo $data_edit['barat'];?></strong><strong> </strong></p></td>
        </tr>
      </table>
      <ol>
        <li>Tidak ada keberatan para pihak pada saat pemeriksaan tanah.</li>
      </ol>
      <p>Demikian hasil pemeriksan ini dibuat untuk dipergunakan  sebagaimana mestinya.</p>
      <p>&nbsp;</p>
      <p>Anggota Panitia Ajudikasi Pendaftaran Tanah Sistematis Lengkap</p>
      <table border="0" cellspacing="0" cellpadding="0" width="551">
        <tr>
          <td width="85" valign="top"><ol>
            <li>Nama</li>
          </ol></td>
          <td width="22" valign="top"><p align="center">:</p></td>
          <td width="262" valign="top"><p><strong>SOELISTIONO</strong><strong> </strong></p></td>
          <td width="182" rowspan="2"><p>( ..............................    )</p></td>
        </tr>
        <tr>
          <td width="85" valign="top"><p>&nbsp;&nbsp;&nbsp; NIP</p></td>
          <td width="22" valign="top"><p align="center">:</p></td>
          <td width="262" valign="top"><p><strong>19600918 198103 1 002</strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="85" valign="top"><p>&nbsp;</p></td>
          <td width="22" valign="top"><p align="center">&nbsp;</p></td>
          <td width="262" valign="top"><p>&nbsp;</p></td>
          <td width="182" valign="top"><p>&nbsp;</p></td>
        </tr>
        <tr>
          <td width="85" valign="top"><ol>
            <li>Nama</li>
          </ol></td>
          <td width="22" valign="top"><p align="center">:</p></td>
          <td width="262" valign="top"><p><strong>DODI RAHMADI, S.SiT</strong><strong> </strong></p></td>
          <td width="182" rowspan="2"><p>(    .............................. )</p></td>
        </tr>
        <tr>
          <td width="85" valign="top"><p>&nbsp;&nbsp; &nbsp;NIP</p></td>
          <td width="22" valign="top"><p align="center">:</p></td>
          <td width="262" valign="top"><p><strong>19731217 199503 1 001</strong><strong> </strong></p></td>
        </tr>
      </table>
      <p><strong>&nbsp;</strong></p>
      <p><strong>&nbsp;</strong></p>
      <p><strong>&nbsp;</strong></p>
      <p><strong>&nbsp;</strong></p>
      <p><strong>&nbsp;</strong></p>
    <p><strong>&nbsp;</strong></p></td>
  </tr>

</table>

</page>

<page size="F4">
  <table align="center" width="700" border="0">
    
  <tr>
    <td><p align="center"><strong>FORMULIR ISIAN INVENTARISASI DAN  IDENTIFIKASI</strong><br />
          <strong>PESERTA  PENDAFTARAN TANAH SISTEMATIK LENGKAP</strong></p>
      <p>Nomor Urut&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; :<br />
        Desa/Kecamatan&nbsp;&nbsp; : <strong><?php echo $data_edit['desa_kelurahan'];?></strong><strong>/</strong><strong><?php echo $data_edit['kecamatan'];?></strong> <br />
  &nbsp;</p>
      <br clear="all" />
      <br />
I. IDENTITAS SUBYEK
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="28" valign="top"><br />
      1. </td>
    <td width="208" valign="top"><p>Perorangan</p></td>
    <td width="19" valign="top"><p>&nbsp;</p></td>
    <td width="412" valign="top"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="28" valign="top"><p>&nbsp;</p></td>
    <td width="208" valign="top"><p>a. Nama</p></td>
    <td width="19" valign="top"><p>:</p></td>
    <td width="412" valign="top"><p><strong><?php echo $data_edit['pemohon_1'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="28" valign="top"><p>&nbsp;</p></td>
    <td width="208" valign="top"><p>b. Tempat/Tanggal Lahir</p></td>
    <td width="19" valign="top"><p>:</p></td>
    <td width="412" valign="top"><p><strong>KUNINGAN</strong><strong>/</strong><strong><?php echo $data_edit['tanggal_lahir_1'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="28" valign="top"><p>&nbsp;</p></td>
    <td width="208" valign="top"><p>c. Nomor Identitas</p></td>
    <td width="19" valign="top"><p>:</p></td>
    <td width="412" valign="top"><p><strong>.....................</strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="28" valign="top"><p>&nbsp;</p></td>
    <td width="208" valign="top"><p>d. Alamat</p></td>
    <td width="19" valign="top"><p>:</p></td>
    <td width="412" valign="top"><p><strong>DUSUN <?php echo $data_edit['jalan_gang_blok'];?> RT/RW<?php echo $data_edit['rt_rw'];?> DESA <?php echo $data_edit['desa_kelurahan'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="28" valign="top"><p>&nbsp;</p></td>
    <td width="208" valign="top"><p>e. Pekerjaan</p></td>
    <td width="19" valign="top"><p>:</p></td>
    <td width="412" valign="top"><p><strong><?php echo $data_edit['pekerjaan_1'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="28" valign="top"><p>&nbsp;</p></td>
    <td width="208" valign="top"><p>&nbsp;</p></td>
    <td width="19" valign="top"><p>&nbsp;</p></td>
    <td width="412" valign="top"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="28" valign="top"><p>2.</p></td>
    <td width="208" valign="top"><p>Badan Hukum</p></td>
    <td width="19" valign="top"><p>:</p></td>
    <td width="412" valign="top"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="28" valign="top"><p>&nbsp;</p></td>
    <td width="208" valign="top"><p>a. Nama</p></td>
    <td width="19" valign="top"><p>:</p></td>
    <td width="412" valign="top"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="28" valign="top"><p>&nbsp;</p></td>
    <td width="208" valign="top"><p>b. Nomor Akta Pendirian</p></td>
    <td width="19" valign="top"><p>:</p></td>
    <td width="412" valign="top"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="28" valign="top"><p>&nbsp;</p></td>
    <td width="208" valign="top"><p>c. Alamat</p></td>
    <td width="19" valign="top"><p>:</p></td>
    <td width="412" valign="top"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="28" valign="top"><p>&nbsp;</p></td>
    <td width="208" valign="top"><p>d. Jenis Usaha**</p></td>
    <td width="19" valign="top"><p>:</p></td>
    <td width="412" valign="top"><p>Komersil(<em>Profit oriented</em>)/Keagamaan/Sosial</p></td>
  </tr>
</table>
<div> </div>
<p>&nbsp;</p>
<p>II. IDENTIFIKASI OBYEK </p>
<table border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="28" valign="top"><br />
      1. </td>
    <td width="208" colspan="3" valign="top"><p>Letak Tanah :</p></td>
    <td width="19" valign="top"><p>&nbsp;</p></td>
    <td width="411" colspan="2" valign="top"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="28" valign="top"><p>&nbsp;</p></td>
    <td width="208" colspan="3" valign="top"><p>a. Jalan/Blok</p></td>
    <td width="19" valign="top"><p>:</p></td>
    <td width="411" colspan="2" valign="top"><p><strong><?php echo $data_edit['jalan_gang_blok'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="28" valign="top"><p>&nbsp;</p></td>
    <td width="208" colspan="3" valign="top"><p>b. RT/RW</p></td>
    <td width="19" valign="top"><p>:</p></td>
    <td width="411" colspan="2" valign="top"><p><strong><?php echo $data_edit['rt_rw'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="28" valign="top"><p>&nbsp;</p></td>
    <td width="208" colspan="3" valign="top"><p>c. No.    Bidang/NIB</p></td>
    <td width="19" valign="top"><p>:</p></td>
    <td width="411" colspan="2" valign="top"><p><strong><?php echo $data_edit['nib'];?></strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="28" valign="top"><p>2.</p></td>
    <td width="208" colspan="3" valign="top"><p>Luas</p></td>
    <td width="19" valign="top"><p>:</p></td>
    <td width="411" colspan="2" valign="top"><p><strong><?php echo $data_edit['luas'];?></strong><strong> M&sup2;</strong></p></td>
  </tr>
  <tr>
    <td width="28" valign="top"><p>3.</p></td>
    <td width="639" colspan="6" valign="top"><p>Status Tanah    Yang Dikuasasi* :</p></td>
  </tr>
  <tr>
    <td width="29" colspan="2"></td>
    <td width="198" valign="top"><ul>
      <li>Tanah Negara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </li>
      <li>Tanah Milik Adat</li>
    </ul></td>
    <td width="284" colspan="3" valign="top"><ul>
      <li>Tanah Wakaf</li>
      <li>Tanah Hak    (HM/HGB/HP)</li>
    </ul></td>
    <td width="156"></td>
  </tr>
</table>
<ul>
  <li>
    <div>
  </li>
</ul>
<p>&nbsp;</p>
Lain-Lain***
<table border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="28" colspan="2" valign="top"><p>4.</p></td>
    <td width="639" colspan="3" valign="top"><p>Penggunaan/Pemanfaatan*</p></td>
  </tr>
  <tr>
    <td width="28"></td>
    <td width="198" colspan="2" valign="top"><ul>
      <li>Rumah Tinggal</li>
      <li>Pertanian</li>
      <li>Toko/Ruko</li>
      <li>Kantor</li>
    </ul></td>
    <td width="284" valign="top"><ul>
      <li>Pabrik</li>
      <li>Tempat Ibadah</li>
      <li>Pemakaman</li>
    </ul>
        <p>&nbsp;</p></td>
    <td width="157"></td>
  </tr>
</table>
<ul>
  <li>
    <div>
  </li>
</ul>
<p>&nbsp;</p>
Lain-Lain***
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="28" valign="top"><p>5.</p></td>
    <td width="639" valign="top"><p>Bukti Penguasaan</p></td>
  </tr>
</table>
<ul>
  <li>Girik/Petok/Pipil/Kekitir/Kartu penunjukan/Kartu  Kaveling/Verponding Indonesia**</li>
  <li>Surat Keterangan Garapan/Surat Keterangan Tanah/Surat Jual  Beli di Bawah Tangan**</li>
  <li>IPPEDA/IREDA/PBB**</li>
  <li>Akta Peralihan)Jual Beli/Hibah/Waris/Tukar Menukar/Pembagian  Hak Bersama/Inbreng)**</li>
  <li>Akta Ikrar Wakaf/Pengganti Akta Ikrar Wakaf**</li>
  <li>Surat Pernyataan Penguasaan Pemilikan Tanah</li>
  <li>Sertipikat Hak Atas Tanah Nomor</li>
  <li>Lain-lain***</li>
</ul>
<p> </p>
<div> </div>
 
</p>
<p>&nbsp;</p></td>
  </tr>
  </table>
</page>

<page size="F4">
  <table align="center" width="700" border="0">
    

  <tr>
    <td><table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="28" colspan="2" valign="top"><p>6.</p></td>
        <td width="639" colspan="3" valign="top"><p>Status Sengketa</p></td>
      </tr>
      <tr>
        <td width="9"></td>
        <td width="198" colspan="2" valign="top"><ul>
          <li>Tidak Ada Sengketa</li>
        </ul></td>
        <td width="318" valign="top"><ul>
          <li>Ada Sengketa***</li>
        </ul></td>
        <td width="141"></td>
      </tr>
    </table>
      <p> </p>
      <div>
        <p>&nbsp;</p>
      </div>
      </p>
      <p>&nbsp;</p>
      <br clear="all" />
      <p>III. CATATAN TERLAMPIR*</p>
      <ul>
        <li>Identitas  Subyek** (KTP/SIM/Akta Pendirian Badan Hukum/Lain-Lain)</li>
      </ul>
      <p>Lain-lain....................................................................  .(diisi sesuai yang dilampirkan)</p>
      <ul>
        <li>Bukti  Penguasaan................................................... (diisi sesuai yang  dilampirkan)</li>
        <li>Bukti  Penggunaan**(IMB/Lain-lain***)</li>
      </ul>
      <p>Lain-lain..................................................................(diisi  sesuai yang dilampirkan)</p>
      <ul>
        <li>Bukti  Perolehan Hak **(Akta Jual Beli/Akta Hibah/Akta Ikrar Wakaf/Waris/Lain-lain)</li>
      </ul>
      <p>Lain-lain................................................................. (diisi  sesuai yang dilampirkan)</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <br clear="all" />
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="395" colspan="2" valign="top"><p align="center">Mengetahui,</p></td>
          <td width="284" valign="top"><p align="center">Kuningan, <?php echo $data_edit['tgl_permohonan'];?></p></td>
        </tr>
        <tr>
          <td width="395" colspan="2" valign="top"><p align="center">Petugas Pengumpul Data Yuridis</p></td>
          <td width="284" rowspan="2" valign="top"><p>&nbsp;</p></td>
        </tr>
        <tr>
          <td width="262" valign="top"><p align="center">&nbsp;</p>
              <ul>
                <li><strong>SUTIONO,SH</strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></li>
              </ul>
            <p><strong>&nbsp;&nbsp;&nbsp; NIP. </strong><strong>196703161991031003</strong><strong> </strong></p>
            <p><strong>2. </strong><strong>ROBY PRIBADI</strong><strong> </strong></p></td>
          <td width="132" valign="top"><p>&nbsp;</p>
              <p>( ..................... )</p>
            <p>&nbsp;</p>
            <p>( ..................... )</p></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>Keterangan :<br />
        *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>centang jika ada</em><br />
  <em>**&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; coret yang tidak diperlukan</em><br />
  <em>***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; uraikan secara singkat</em></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>

  </table>
</page>

<page size="F4">
  <table align="center" width="700" border="0">
    
  <tr>
    <td><p align="center"><strong><u>SURAT KETERANGAN BEDA LUAS</u></strong></p>
      <p>Saya yang bertanda tangan di bawah ini  :</p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="111" valign="top"><p>Nama</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="548" valign="top"><p><strong><?php echo $data_edit['pemohon_1'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="111" valign="top"><p>Umur</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="548" valign="top"><p><strong><?php echo $data_edit['umur_1'];?>&nbsp;TAHUN</strong></p></td>
        </tr>
        <tr>
          <td width="111" valign="top"><p>Alamat</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="548" valign="top"><p><strong>DUSUN <?php echo $data_edit['jalan_gang_blok'];?> RT/RW <?php echo $data_edit['rt_rw'];?> DESA <?php echo $data_edit['desa_kelurahan'];?></strong><strong> </strong></p></td>
        </tr>
      </table>
      <p>adalah pemilik sebidang tanah yang  berbatasan dengan tanah milik sebagai berikut :</p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="111" valign="top"><p>Utara</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="505" valign="top"><p><strong><?php echo $data_edit['utara'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="111" valign="top"><p>Timur</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="505" valign="top"><p><strong><?php echo $data_edit['timur'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="111" valign="top"><p>Selatan</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="505" valign="top"><p><strong><?php echo $data_edit['selatan'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="111" valign="top"><p>Barat</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="505" valign="top"><p><strong><?php echo $data_edit['barat'];?></strong><strong> </strong></p></td>
        </tr>
      </table>
      <p>Dengan ini menyatakan bahwa tanah milik  adat yang tercantum dalam kutipan Letter C dari Desa <strong><?php echo $data_edit['desa_kelurahan'];?></strong><strong>,</strong>C/SPPT No. <strong><?php echo $data_edit['no_sppt'];?></strong><strong>, </strong>Persil<em><?php echo $data_edit['no_persil'];?></em><em>,</em> Luas <strong><?php echo $data_edit['luas'];?></strong><strong> </strong>M&sup2;<em>,</em> dan tercantum dalam <strong><?php echo $data_edit['berdasarkan_1'];?></strong> tanggal <strong><?php echo $data_edit['tanggal'];?></strong><em>, </em>No. <strong><?php echo $data_edit['nomor'];?></strong><em>, </em>Desa/Kelurahan <strong><?php echo $data_edit['desa_kelurahan'];?></strong><strong>,</strong> Kecamatan <strong><?php echo $data_edit['kecamatan'];?></strong>, Kabupaten <strong>KUNINGAN.</strong></p>
      <table border="1" cellspacing="0" cellpadding="0">
        <tr>
          <td width="404" colspan="4" valign="top"><p>Tercantum dalam Kutipan C /SPPT/PBB</p></td>
          <td width="57" valign="top"><p>Luas </p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="113" valign="top"><p align="right"><strong><?php echo $data_edit['luas'];?></strong><strong> </strong></p></td>
          <td width="38" valign="top"><p>M&sup2;</p></td>
        </tr>
        <tr>
          <td width="404" colspan="4" valign="top"><p>Tercantum dalam akta/dokumen yuridis</p></td>
          <td width="57" valign="top"><p>Luas</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="113" valign="top"><p align="right"><em>&nbsp;</em></p></td>
          <td width="38" valign="top"><p>M&sup2;</p></td>
        </tr>
        <tr>
          <td width="145" valign="top"><p>Hasil Pengukuran</p></td>
          <td width="51" valign="top"><p>NIB</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="190" valign="top"><p><strong><?php echo $data_edit['nib'];?></strong><strong> </strong></p></td>
          <td width="57" valign="top"><p>&nbsp;</p></td>
          <td width="19" valign="top"><p>&nbsp;</p></td>
          <td width="113" valign="top"><p align="right"><em>&nbsp;</em></p></td>
          <td width="38" valign="top"><p>&nbsp;</p></td>
        </tr>
        <tr>
          <td width="145" valign="top"><p>&nbsp;</p></td>
          <td width="51" valign="top"><p>Tgl</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="190" valign="top"><p><em>&nbsp;</em></p></td>
          <td width="57" valign="top"><p>Luas</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="113" valign="top"><p align="center"><em>&nbsp;</em></p></td>
          <td width="38" valign="top"><p>M&sup2;</p></td>
        </tr>
        <tr>
          <td width="404" colspan="4" valign="top"><p>Selisih Luas    lebih/kurang</p></td>
          <td width="57" valign="top"><p>&nbsp;</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="113" valign="top"><p align="center"><em>&nbsp;</em></p></td>
          <td width="38" valign="top"><p>M&sup2;</p></td>
        </tr>
      </table>
      <p>Atas kelebihan / kekurangan luas  tersebut di atas, kami pemilik tanah yang berbatasan dengan tanah milik adat  atas nama <strong><?php echo $data_edit['pemohon_1'];?></strong><strong> </strong><strong>tidak keberatan, tidak dirugikan dan  menerima hasil pengukuran tersebut</strong> untuk dicantumkan dalam sertipikat tanah atas nama : <strong><?php echo $data_edit['pemohon_1'];?></strong><strong> </strong></p>
      <p>Demikian Surat Pernyataan ini kami buat  dengan sebenarnya tanpa unsur paksaan dari pihak manapun juga, apabila  pernyataan ini tidak benar dan dikemudian hari ada pihak yang dirugikan, maka  kami bersedia dituntut sesuai dengan hukum yang berlaku.</p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="423" valign="top"><p>&nbsp;</p>
              <p>Persetujuan tetangga batas :</p>
            <table border="0" cellspacing="0" cellpadding="0" width="420">
                <tr>
                  <td width="68" valign="top"><br />
                    Utara </td>
                  <td width="19" valign="top"><p>:</p></td>
                  <td width="168" valign="top"><p><strong><?php echo $data_edit['utara'];?></strong><strong> </strong></p></td>
                  <td width="165" valign="top"><p align="center">( &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;. )</p></td>
                </tr>
                <tr>
                  <td width="68" valign="top"><p>Timur</p></td>
                  <td width="19" valign="top"><p>:</p></td>
                  <td width="168" valign="top"><p><strong><?php echo $data_edit['timur'];?></strong><strong> </strong></p></td>
                  <td width="165" valign="top"><p align="center">( &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;. ) </p></td>
                </tr>
                <tr>
                  <td width="68" valign="top"><p>Selatan</p></td>
                  <td width="19" valign="top"><p>:</p></td>
                  <td width="168" valign="top"><p><strong><?php echo $data_edit['selatan'];?></strong><strong> </strong></p></td>
                  <td width="165" valign="top"><p align="center">( &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;. ) </p></td>
                </tr>
                <tr>
                  <td width="68" valign="top"><p>Barat</p></td>
                  <td width="19" valign="top"><p>:</p></td>
                  <td width="168" valign="top"><p><strong><?php echo $data_edit['barat'];?></strong><strong> </strong></p></td>
                  <td width="165" valign="top"><p align="center">( &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;. ) </p></td>
                </tr>
            </table></td>
          <td width="254" valign="top"><p align="center">Kuningan,<?php echo $data_edit['tgl_permohonan'];?><br />
            Pemilik Tanah</p>
              <p align="center"><em>Materai</em><br />
                  <em>Rp. 6000,-</em></p>
            <p align="center">&nbsp;</p>
            <p align="center"><strong><?php echo $data_edit['pemohon_1'];?></strong><strong> </strong></p></td>
        </tr>
      </table>
      <p align="center">Mengetahui :<br />
        Kepala Desa <strong><?php echo $data_edit['desa_kelurahan'];?></strong><strong><u></u></strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong><?php echo $data_edit['nama_kepala_desa'] ; ?></strong><strong> </strong></p>
    <p align="right"><em>&nbsp;</em></p></td>
  </tr>
  <tr>
  </table>
</page>

<page size="F4">
  <table align="center" width="700" border="0">
    

  <tr>
    <td><p align="right"><em>Lampiran 43</em><br />
          <em>DI. 201</em><strong></strong></p>
      <p>BADAN  PERTANAHAN NASIONAL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />
        KANTOR  PERTANAHAN KABUPATEN KUNINGAN<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><br />
  <strong>RISALAH PENELITIAN DATA YURIDIS </strong><br />
  <strong>DAN </strong><br />
  <strong>PENETAPAN BATAS</strong></p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="138" valign="top"><br />
            Desa / Kelurahan </td>
          <td width="19" valign="top"><p align="center">:</p></td>
          <td width="227" valign="top"><p><strong><?php echo $data_edit['desa_kelurahan'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="138" valign="top"><p>NIB</p></td>
          <td width="19" valign="top"><p align="center">:</p></td>
          <td width="227" valign="top"><p><strong><?php echo $data_edit['nib'];?></strong><strong> </strong></p></td>
        </tr>
      </table>
      <table border="1" cellspacing="0" cellpadding="0">
        <tr>
          <td width="677" colspan="6" valign="top"><ol>
            <li><strong>IDENTIFIKASI    BIDANG TANAH DAN YANG BERKEPENTINGAN</strong><strong> </strong></li>
          </ol></td>
        </tr>
        <tr>
          <td width="677" colspan="6" valign="top"><ol>
            <li><strong>BIDANG    TANAH</strong><strong> </strong></li>
          </ol></td>
        </tr>
        <tr>
          <td width="677" colspan="6" valign="top"><p>LETAK    TANAH <br />
            Jalan / Blok *) : <strong><?php echo $data_edit['jalan_gang_blok'];?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; RT/RW : <strong><?php echo $data_edit['rt_rw'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="677" colspan="6" valign="top"><ol>
            <li><strong>YANG    BERKEPENTINGAN</strong><strong> </strong></li>
          </ol></td>
        </tr>
        <tr>
          <td width="677" colspan="6" valign="top"><table border="0" cellspacing="0" cellpadding="0" width="659">
              <tr>
                <td width="113" valign="top"><p>Nama</p></td>
                <td width="19" valign="top"><p>:</p></td>
                <td width="301" colspan="5" valign="top"><p><strong><?php echo $data_edit['pemohon_1'];?></strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p></td>
                <td width="227" valign="top"><p>Perorangan / Badan Hukum      *)</p></td>
              </tr>
              <tr>
                <td width="196" colspan="4" valign="top"><p>KTP / NOPEN (Perorangan) </p></td>
                <td width="19" valign="top"><p>:</p></td>
                <td width="217" colspan="2" valign="top"><p><strong><?php echo $data_edit['no_ktp_1'];?></strong><strong> </strong></p></td>
                <td width="227" valign="top"><p>Tanggal lahir : <strong><?php echo $data_edit['tanggal_lahir_1'];?></strong> </p></td>
              </tr>
              <tr>
                <td width="131" colspan="2" valign="top"><p>Pekerjaan</p></td>
                <td width="19" valign="top"><p>:</p></td>
                <td width="509" colspan="5" valign="top"><p><strong><?php echo $data_edit['pekerjaan_1'];?></strong><strong> </strong></p></td>
              </tr>
              <tr>
                <td width="131" colspan="2" valign="top"><p>Tempat Tinggal</p></td>
                <td width="19" valign="top"><p>:</p></td>
                <td width="509" colspan="5" valign="top"><p><strong>DUSUN <?php echo $data_edit['jalan_gang_blok'];?> RT/RW <?php echo $data_edit['rt_rw'];?>      DESA <?php echo $data_edit['desa_kelurahan'];?></strong><strong> </strong></p></td>
              </tr>
              <tr>
                <td width="131" colspan="2" valign="top"><p>Badan Hukum</p></td>
                <td width="19" valign="top"><p>:</p></td>
                <td width="509" colspan="5" valign="top"><p>Badan Hukum/Pemda TK. I,      II/Desa/Kelurahan/BUMN*)</p></td>
              </tr>
              <tr>
                <td width="131" colspan="2" valign="top"><p>Akta Pendirian</p></td>
                <td width="19" valign="top"><p>:</p></td>
                <td width="199" colspan="3" valign="top"><p>No. </p></td>
                <td width="311" colspan="2" valign="top"><p>Tanggal </p></td>
              </tr>
            </table>
              <p>Di    daftar di Pengadilan negeri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tanggal    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No <br />
                Perhatian    : Bila yang berkepentingan terdiri dari 1 (satu) orang, sehingga ruang ini    tidak muat, dapat disertai lampiran PERHATIAN LIHAT LAMPIRAN *)</p></td>
        </tr>
        <tr>
          <td width="677" colspan="6" valign="top"><ol>
            <li><strong>SKETSA    BIDANG TANAH</strong><strong> </strong></li>
          </ol></td>
        </tr>
        <tr>
          <td width="677" colspan="6" valign="top"><p><strong>&nbsp;</strong></p>
              <p> <strong> </strong></p>
            <p><strong>&nbsp;</strong></p>
            <p><strong>&nbsp;</strong></p>
            <p><strong>&nbsp;</strong></p>
            <p><strong>&nbsp;</strong></p>
            <p><strong>&nbsp;</strong></p>
            <p><strong>&nbsp;</strong></p>
            <p><strong>&nbsp;</strong></p>
            <p><strong>&nbsp;</strong></p>
            <p><strong>&nbsp;</strong></p></td>
        </tr>
        <tr>
          <td width="677" colspan="6" valign="top"><ol>
            <li><strong>PERSETUJUAN BATAS BIDANG TANAH</strong></li>
          </ol></td>
        </tr>
        <tr>
          <td width="313" colspan="2" valign="top"><p align="center"><strong>Nama Tetangga yang</strong><br />
                  <strong>Berkepentingan</strong></p></td>
          <td width="364" colspan="4" valign="top"><p align="center"><strong>Tanda Tangan Persetujuan </strong><br />
                  <strong>Tetangga</strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="53" valign="top"><p align="center">1.</p></td>
          <td width="261" valign="top"><p><strong></strong><strong> </strong></p></td>
          <td width="25" valign="top"><p>&nbsp;</p></td>
          <td width="76" valign="top"><p>Utara</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="244" valign="top"><p>&nbsp;</p><strong><?php echo $data_edit['utara'];?></strong></td>
        </tr>
        <tr>
          <td width="53" valign="top"><p align="center">2.</p></td>
          <td width="261" valign="top"><p><strong></strong><strong> </strong></p></td>
          <td width="25" valign="top"><p>&nbsp;</p></td>
          <td width="76" valign="top"><p>Timur</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="244" valign="top"><p>&nbsp;</p><strong><?php echo $data_edit['timur'];?></strong></td>
        </tr>
        <tr>
          <td width="53" valign="top"><p align="center">3.</p></td>
          <td width="261" valign="top"><p><strong></strong><strong> </strong></p></td>
          <td width="25" valign="top"><p>&nbsp;</p></td>
          <td width="76" valign="top"><p>Selatan</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="244" valign="top"><p>&nbsp;</p><strong><?php echo $data_edit['selatan'];?></strong></td>
        </tr>
        <tr>
          <td width="53" valign="top"><p align="center">4.</p></td>
          <td width="261" valign="top"><p><strong></strong><strong> </strong></p></td>
          <td width="25" valign="top"><p>&nbsp;</p></td>
          <td width="76" valign="top"><p>Barat</p></td>
          <td width="19" valign="top"><p>:</p></td>
          <td width="244" valign="top"><p>&nbsp;</p><strong><?php echo $data_edit['barat'];?></strong></td>
        </tr>
        <tr>
          <td width="53" valign="top"><p>&nbsp;</p></td>
          <td width="261" valign="top"><p>&nbsp;</p></td>
          <td width="25" valign="top"><p>&nbsp;</p></td>
          <td width="339" colspan="3" valign="top"><p>&nbsp;</p></td>
        </tr>
        <tr>
          <td width="53" valign="top"><p><strong>&nbsp;</strong></p></td>
          <td width="261" valign="top"><p><strong>&nbsp;</strong></p></td>
          <td width="25" valign="top"><p><strong>&nbsp;</strong></p></td>
          <td width="339" colspan="3" valign="top"><p><strong>&nbsp;</strong></p></td>
        </tr>
      </table>
      <p><em>*) Coret yang tidak sesuai &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </em><em>Halaman 1 dari 6</em><br />
          <em>Catatan : agar ditulis dengan  huruf cetak tinta hitam</em><br />
          <em>Tidak diperbolehkan ada hapusan  / tipe ex</em></p>
      <em><br clear="all" />
      </em></td>
  </tr>

  </table>
</page>

<page size="F4">
  <table align="center" width="700" border="0">
    

  <tr>
    <td><table border="1" cellspacing="0" cellpadding="0" width="685">
      <tr>
        <td width="685" colspan="3" valign="top"><ol>
          <li><strong>DATA TENTANG PEMILIKAN DAN PENGUASAAN    HAK ATAS TANAH :</strong><strong> </strong></li>
        </ol></td>
      </tr>
      <tr>
        <td width="685" colspan="3" valign="top"><ol>
          <li><strong>PEMILIKAN    / PENGUASAAN TANAH </strong><strong> </strong></li>
        </ol></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p> 1.</p></td>
        <td width="660" colspan="2" valign="top"><p>Bukti-bukti    Pemilikan / Penguasaan : </p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p>&nbsp;</p></td>
        <td width="660" colspan="2" valign="top"><ol>
          <li>Sertifikat &nbsp;&nbsp;&nbsp;&nbsp; : HM/HGU/HGB/HPL/HP*) </li>
        </ol></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p>&nbsp;</p></td>
        <td width="660" colspan="2" valign="top"><p>Atas    Nama&nbsp;&nbsp; : &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.. No. &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;    Tanggal &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..<br />
          Sertifikat &nbsp;&nbsp;&nbsp;&nbsp; :    Ada/Tidak ada*) </p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p>&nbsp;</p></td>
        <td width="660" colspan="2" valign="top"><ol>
          <li>Warisan </li>
        </ol></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p> </p></td>
        <td width="660" colspan="2" valign="top"><p>Nama    Pewaris &nbsp;&nbsp;&nbsp; : ........................................................................................................................<br />
          Meninggal    Thn &nbsp;&nbsp; : .......................................<strong> </strong>Di : ........................................................................<br />
          Surat wasiat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :    Ada** &#9633; Tidak ada** &#9633; Keterangan *** : &#9633; (buatkan bila tidak ada) </p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p> </p></td>
        <td width="660" colspan="2" valign="top"><ol>
          <li>Hibah/Pemberian     :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nama    pemberi hibah : </li>
        </ol>
            <p>Dilakukan    dengan&nbsp; : Surat di bawah tangan/Akta    PPAT/Lisan*)**)<br />
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tanggal :    ........................... No.    Akta PPAT : ..............................<br />
              (Bila dilakukan secara lisan buatkan surat    pernyataan)***) </p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p>&nbsp;</p></td>
        <td width="660" colspan="2" valign="top"><ol>
          <li>Pembelian </li>
        </ol>
            <p>Dilakukan    dengan : Surat di bawah tangan/kwitansi/Akta PPAT/Lisan*)**)<br />
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tanggal : <strong><?php echo $data_edit['tanggal'];?></strong> No.    Akta PPAT : <strong>.........</strong> <br />
              Nama PPAT : &nbsp;<strong>.............</strong> </p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p> </p></td>
        <td width="660" colspan="2" valign="top"><ol>
          <li>Pelelangan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Risalah lelang** : &#9633; Thn :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tgl : </li>
        </ol>
            <p>Tempat dan nama kantor lelang : </p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p> </p></td>
        <td width="660" colspan="2" valign="top"><ol>
          <li>Putusan    Pemberian Hak : </li>
        </ol>
            <p>Jabatan    pejabat yang memutuskan : <br />
              Surat    Keputusan** No. :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Tgl : <br />
              Persyaratannya :&nbsp;&nbsp;    Telah dipenuhi : &#9633;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Belum dipenuhi : &#9633; </p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p>&nbsp;</p></td>
        <td width="660" colspan="2" valign="top"><ol>
          <li>Perwakafan    : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Akta    (pengganti) Ikrar Wakaf** : &#9633;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No    : </li>
        </ol>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tanggal    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <br />
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nadzir    &nbsp; : </p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p>&nbsp;</p></td>
        <td width="660" colspan="2" valign="top"><ol>
          <li>Lain-lain    sebutkan : </li>
        </ol>
            <p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p><strong>2.</strong></p></td>
        <td width="303" valign="top"><p><strong>Bukti Perpajakan : </strong></p></td>
        <td width="357" valign="top"><p><strong>Uraian</strong><strong> </strong></p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p><strong>&nbsp;</strong></p></td>
        <td width="303" valign="top"><p>&nbsp;</p>
            <ol>
              <li>Petok    D/Letter C, girik, kikitir : </li>
            </ol>
          <p>&#9633;<br />
            Pajak    Hasil Bumi **</p>
          <ol>
            <li>Verponding/Verponding    Indonesia </li>
          </ol>
          <p>*<br />
            **    : <br />
            &#9633;</p>
          <ol>
            <li>IPEDA/PBB/SPPT*+**</li>
          </ol>
          <p>&#9633;&nbsp;&nbsp;&nbsp; <strong></strong> </p>
          <ol>
            <li>Lain-lain    : Sebutkan, bukti : </li>
          </ol>
          <p>Dilampirkan    :<br />
            &#9633;</p>
          <p>&nbsp;</p></td>
        <td width="357" valign="top"><p>&nbsp;</p>
            <p>Kantor    yang diterbitkan : </p>
          <p>Tahun/Tanggal    : <br />
            Kantor    yang menerbitkan : </p>
          <p>&nbsp;</p>
          <p>Tahun/Tanggal    : <br />
            Kantor    yang menerbitkan : <br />
            <strong>Dinas Pendapatan Daerah Kabupaten    Kuningan</strong><br />
            Tahun/Tanggal    : </p>
          <p>&nbsp;</p></td>
      </tr>
    </table>
    <p><em>**) : Bukti Terlampir&nbsp;&nbsp;&nbsp; ***) : Surat pernyataan keterangan  terlampir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Halaman  2 dari 6</em></p></td>
  </tr>

  </table>
</page>

<page size="F4">
  <table align="center" width="700" border="0">
    

  <tr>
    <td><table border="1" cellspacing="0" cellpadding="0" width="685">
      <tr>
        <td width="25" valign="top"><p><strong>3.</strong></p></td>
        <td width="660" colspan="2" valign="top"><p><strong>Kenyataan Penguasaan dan Penggunaan    Tanah :&nbsp; </strong><strong> </strong></p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p><strong>&nbsp;</strong></p></td>
        <td width="660" colspan="2" valign="top"><table border="1" cellspacing="0" cellpadding="0" width="636">
            <tr>
              <td width="636" valign="top"><ol>
                <li>Pada tahun <strong><?php echo $data_edit['sejak_tahun_2'];?></strong> dikuasasi/dimiliki oleh <strong><?php echo $data_edit['b_pada_saat_ini_dikuasai_oleh_2'];?></strong> </li>
              </ol></td>
            </tr>
            <tr>
              <td width="636" valign="top"><ol>
                <li>Berikutnya pada tahun <strong><?php echo $data_edit['sejak_tahun_1'];?></strong> dikuasai/dimiliki oleh <strong><?php echo $data_edit['a_pada_saat_ini_dikuasai_oleh_1'];?></strong>&nbsp; </li>
              </ol>
                  <p>Berdasarkan <strong><?php echo $data_edit['berdasarkan_1'];?></strong> Tanggal <strong><?php echo $data_edit['tanggal'];?></strong> No. <strong><?php echo $data_edit['nomor'];?></strong> </p></td>
            </tr>
            <tr>
              <td width="636" valign="top"><ol>
                <li>Berikutnya pada tahun ..............      oleh ............................. Diperoleh dengan cara      ........................... </li>
              </ol></td>
            </tr>
            <tr>
              <td width="636" valign="top"><p>&nbsp;</p></td>
            </tr>
          </table>
            <ol>
              <li>Penggunaan    Tanah : Sawah : &#9633; Ladang : &#9633; Kebun : &#9633; Kolam ikan : &#9633; Perumahan : &#9633;</li>
            </ol>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Industri    : &#9633; Perkebunan : &#9633; Dikelola pengembang : &#9633; </p>
          <ol>
            <li>Lapangan    umum : &#9633; Pengembangan ternak : &#9633; Dibiarkan : &#9633;&nbsp; </li>
          </ol></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p><strong>4.</strong></p></td>
        <td width="660" colspan="2" valign="top"><p><strong>Bangunan diatas Tanah</strong></p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p><strong>&nbsp;</strong></p></td>
        <td width="660" colspan="2" valign="top"><ol>
          <li>Jenisnya    : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rumah hunian : &#9633;    Gudang : &#9633; Kantor : &#9633; Bengkel : &#9633; Tokoh : &#9633;</li>
        </ol>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pagar :    &#9633;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rumah ibadah : &#9633;</p>
          <ol>
            <li>Tidak ada bangunan : &#9633; </li>
          </ol></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p><strong>5.</strong></p></td>
        <td width="275" valign="top"><p><strong>Status    Tanahnya : </strong></p></td>
        <td width="385" valign="top"><p><strong>Uraian</strong><strong> </strong></p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p><strong>&nbsp;</strong></p></td>
        <td width="275" valign="top"><ol>
          <li>Tanah    dengan hak adat perorangan </li>
        </ol></td>
        <td width="385" valign="top"><p>Hak    milik Adat : &#9633; Hak Gogol : &#9633; Hak Sanggan : &#9633; Hak Yayasan : &#9633;<br />
          Hak    Anggaduh : &#9633; Hak Pekulen : &#9633; Hak Norowito : &#9633; </p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p><strong>&nbsp;</strong></p></td>
        <td width="275" valign="top"><ol>
          <li> Tanah    Negara : </li>
        </ol></td>
        <td width="385" valign="top"><p>HPL    : Pemda Propinsi/Kabupaten/Kotamadya *:<br />
          Dikuasai    departemen ; <br />
          Dikuasai    secara perorangan : </p>
            <p>Lain-lain,    sebutkan : </p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p><strong>&nbsp;</strong></p></td>
        <td width="275" valign="top"><ol>
          <li>Tanah    bagi kepentingan umum : </li>
        </ol></td>
        <td width="385" valign="top"><p>Tanah    Kuburan : &#9633; Tanah Pangonan : &#9633;<br />
          Tanah    Pasar : &#9633; Tanah Lapang : &#9633; Tanah Kas Desa : &#9633; </p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p><strong>&nbsp;</strong></p></td>
        <td width="275" valign="top"><ol>
          <li>Lain-lain,    sebutkan : </li>
        </ol>
            <p>&nbsp;</p>
          <p>&nbsp;</p></td>
        <td width="385" valign="top"><p>&nbsp;</p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p><strong>6.</strong></p></td>
        <td width="660" colspan="2" valign="top"><p><strong>Beban-beban atas tanah&nbsp; </strong><strong> </strong></p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p><strong>&nbsp;</strong></p></td>
        <td width="660" colspan="2" valign="top"><p>&nbsp;</p>
            <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p><strong>7</strong><strong>.</strong></p></td>
        <td width="660" colspan="2" valign="top"><p><strong>Bangunan Kepentingan Umum dan Sosial    (kalau ada uraikan)</strong><strong> </strong></p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p><strong>&nbsp;</strong></p></td>
        <td width="660" colspan="2" valign="top"><p>&nbsp;</p>
            <p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p><strong>8</strong><strong>.</strong></p></td>
        <td width="660" colspan="2" valign="top"><p><strong>Sengketa Atas Tanah </strong><strong> </strong></p></td>
      </tr>
      <tr>
        <td width="25" valign="top"><p><strong>&nbsp;</strong></p></td>
        <td width="660" colspan="2" valign="top"><ol>
          <li>Sedang dalam sengketa (kalau ada    uraikan)</li>
        </ol>
            <p>&nbsp;</p>
          <ol>
            <li>Tidak ada sengketa :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </li>
          </ol>
          <p>&nbsp;</p></td>
      </tr>
    </table>
    <em>*) Coret yang tidak sesuai &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </em></td>
  </tr>

  </table>
</page>

<page size="F4">
  <table align="center" width="700" border="0">
    

  <tr>
    <td><table border="1" cellspacing="0" cellpadding="0" width="688">
      <tr>
        <td width="28" rowspan="2" valign="top"><p><strong>B.</strong></p></td>
        <td width="341" colspan="2" valign="top"><p><strong>YANG MENGUMPULKAN DATA : **)</strong></p></td>
        <td width="319" rowspan="2" valign="top"><p align="center"><strong>Mengetahui :</strong><br />
                <strong>YANG BERKEPENTINGAN/WAKILNYA </strong></p>
            <p align="center"><strong>&nbsp;</strong></p>
          <p align="center"><strong><?php echo $data_edit['pemohon_1'];?></strong><strong> </strong></p></td>
      </tr>
      <tr>
        <td width="216" valign="top"><p><strong>&nbsp;</strong></p>
            <ol>
              <li><strong>SUTIONO,SH</strong><strong>&nbsp;&nbsp;&nbsp; </strong></li>
            </ol>
          <p><strong>&nbsp;</strong></p>
          <ol>
            <li><strong>ROBY PRIBADI</strong><strong>&nbsp;&nbsp;&nbsp; </strong></li>
          </ol></td>
        <td width="125" valign="top"><p>&nbsp;</p>
            <p>(    ........................ )</p>
          <p>&nbsp;</p>
          <p>( ........................ )</p></td>
      </tr>
      <tr>
        <td width="688" colspan="4" valign="top"><ol>
          <li><strong>KESIMPULAN    SATGAS YURIDIS/ PANITIA AJUDIKASI PENDAFTARAN TANAH SISTEMATIS LENGKAP    *)</strong><strong> </strong></li>
        </ol></td>
      </tr>
      <tr>
        <td width="688" colspan="4" valign="top"><p><strong>Berdasarkan pada penilian atas fakta    dan data yang telah dikumpulkan, maka dengan ini disimpulkan bahwa :</strong><strong> </strong></p></td>
      </tr>
      <tr>
        <td width="28" valign="top"><p align="center">1.</p></td>
        <td width="660" colspan="3" valign="top"><p>Pemilik/yang    menguasai tanah adalah : <strong><?php echo $data_edit['pemohon_1'];?></strong> </p>
            <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td width="28" valign="top"><p align="center">2.</p></td>
        <td width="660" colspan="3" valign="top"><p>Status    tanahnya adalah : </p>
            <ol>
              <li>Tanah Hak : Milik :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </li>
              <li>Bekas Tanah Adat Perorangan : HMA    :&nbsp;&nbsp; &radic;&nbsp; Gogol tetap :&nbsp;&nbsp;&nbsp;&nbsp; Pekulen :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Andarbeni : </li>
              <li>Tanah Negara :&nbsp;&nbsp;&nbsp;&nbsp;  Dikuasai    langsung oleh negara :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BUMN    :&nbsp;&nbsp;&nbsp; Instansi pemerintah : *) </li>
            </ol>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pemda    Tk. I, II :&nbsp;&nbsp; &nbsp;Badan Otorita :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Desa/Kelurahan : </p>
          <ol>
            <li>Lain-lain, sebutkan : </li>
          </ol>
          <p>Kepada    yang menempati, yaitu <strong><?php echo $data_edit['pemohon_1'];?></strong> dapat *) diusulkan untuk diberikan Hak Milik.</p></td>
      </tr>
      <tr>
        <td width="28" valign="top"><p>3.</p></td>
        <td width="660" colspan="3" valign="top"><p>Pembebanan    atas tanah : Sedang diagunkan :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tidak diagunkan :</p></td>
      </tr>
      <tr>
        <td width="28" valign="top"><p>4.</p></td>
        <td width="660" colspan="3" valign="top"><p>Alat    bukti yang diajukan : Lengkap :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tidak lengkap :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tidak ada :</p></td>
      </tr>
      <tr>
        <td width="688" colspan="4" valign="top"><p><strong>&nbsp;</strong></p>
            <p>Demikian    kesimpulan risalah penelitian data yuridis dan penetapan batas atas bidang    tanah dengan : </p>
          <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="101" valign="top"><br />
                  NIB </td>
                <td width="19" valign="top"><p>:</p></td>
                <td width="481" colspan="4" valign="top"><p><strong><?php echo $data_edit['nib'];?></strong><strong> </strong></p></td>
                <td width="42"></td>
              </tr>
              <tr>
                <td width="101" valign="top"><p>Dibuat      di </p></td>
                <td width="19" valign="top"><p>:</p></td>
                <td width="481" colspan="4" valign="top"><p><strong>KUNINGAN</strong></p></td>
                <td width="42"></td>
              </tr>
              <tr>
                <td width="101" valign="top"><p>Tanggal</p></td>
                <td width="19" valign="top"><p>:</p></td>
                <td width="481" colspan="4" valign="top"><p><strong>&nbsp;</strong></p></td>
                <td width="42"></td>
              </tr>
              <tr>
                <td width="101" valign="top"><p>Oleh</p></td>
                <td width="19" valign="top"><p>:</p></td>
                <td width="481" colspan="4" valign="top"><p><strong>Panitia Ajudikasi Pendaftaran Tanah Sistematis      Lengkap</strong></p></td>
                <td width="42"></td>
              </tr>
              <tr>
                <td width="247" colspan="3"><p>KETUA</p></td>
                <td width="19"><p>:</p></td>
                <td width="227"><ol>
                  <li><strong>SUMARTONO, A.Ptnh</strong><strong> </strong></li>
                </ol></td>
                <td width="150" colspan="2"><p>(&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;... )</p></td>
              </tr>
              <tr>
                <td width="247" colspan="3"><p>WAKIL KETUA BIDANG FISIK</p></td>
                <td width="19"><p>:</p></td>
                <td width="227"><ol>
                  <li><strong>SOELISTIONO</strong><strong> </strong></li>
                </ol></td>
                <td width="150" colspan="2"><p>(&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;... ) </p></td>
              </tr>
              <tr>
                <td width="247" colspan="3"><p>WAKIL KETUA BIDANG YURIDIS</p></td>
                <td width="19"><p>&nbsp;</p></td>
                <td width="227"><ol>
                  <li><strong>DODI RAHMADI, S.SiT</strong><strong> </strong></li>
                </ol></td>
                <td width="150" colspan="2"><p>(&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;... ) </p></td>
              </tr>
              <tr>
                <td width="247" colspan="3"><p>ANGGOTA</p></td>
                <td width="19"><p>&nbsp;</p></td>
                <td width="227"><ol>
                  <li><strong>YATI RUSPIDA</strong><strong> </strong></li>
                </ol></td>
                <td width="150" colspan="2"><p>(&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;... ) </p></td>
              </tr>
              <tr>
                <td width="247" colspan="3"><p>SEKRETARIS</p></td>
                <td width="19"><p>&nbsp;</p></td>
                <td width="227"><ol>
                  <li><strong>MERISA      NUR PUTERI</strong><strong> </strong></li>
                </ol></td>
                <td width="150" colspan="2"><p>(&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;... ) </p></td>
              </tr>
          </table></td>
      </tr>
    </table>
      <p><em>*) Coret yang tidak sesuai &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </em><br />
          <em>**) Untuk sistematik oleh Satgas  Yuridis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </em><em>Halaman 4 dari 6&nbsp;&nbsp;&nbsp;&nbsp; </em><br />
          <em>&nbsp;Untuk Sporadik oleh Kepala Seksi Pengukuran  dan Pendaftaran Tanah Panitia &ldquo;A&rdquo;</em></p></td>
  </tr>

  </table>
</page>

<page size="F4">
  <table align="center" width="700" border="0">
    

  <tr>
    <td><table border="1" cellspacing="0" cellpadding="0" width="686">
      <tr>
        <td width="686" valign="top"><ol>
          <li><strong>SANGGAHAN    / KEBERATAN </strong></li>
        </ol></td>
      </tr>
      <tr>
        <td width="686" valign="top"><ol>
          <li> Uraian    Singkat Sengketa / Sanggahan : </li>
          <li>Terkadang    sengketa/sanggahan * mengenai batas/pemilikan * tanah antara </li>
        </ol>
            <p>kepentingan    dengan (nama)&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.gugatan ke Pengadilan<br />
              telah    diajukan/tidak diajukan *</p>
          <ol>
            <li>Selama    pengumuman ada/tidak ada *) yang menyanggah</li>
            <li>Nama    penyanggah&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..</li>
          </ol>
          <p>Alamat    &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;</p>
          <ol>
            <li>Alamat    penyangah : &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;...</li>
          </ol>
          <p>Beserta    surat buktinya &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.<br />
            (c    dan d diisi bila ada yang menyanggah)</p>
          <ol>
            <li>Penyelesaian sengketa / sanggahan : </li>
          </ol>
          <p>&nbsp;</p>
          <p><strong>&nbsp;</strong></p>
          <p><strong>&nbsp;</strong></p></td>
      </tr>
      <tr>
        <td width="686" valign="top"><ol>
          <li><strong>KESIMPULAN    AKHIR KETUA PANITIA AJUDIKASI PENDAFTARAN TANAH SISTEMATIS LENGKAP </strong></li>
        </ol></td>
      </tr>
      <tr>
        <td width="686" valign="top"><p><strong>&nbsp;</strong></p>
            <table border="0" cellspacing="0" cellpadding="0" width="672">
              <tr>
                <td width="274" valign="top"><ol>
                  <li>Nama Pemilik/yang      berkepentingan </li>
                </ol></td>
                <td width="19" valign="top"><p>:</p></td>
                <td width="379" valign="top"><p><strong><?php echo $data_edit['pemohon_1'];?></strong><strong> </strong></p></td>
              </tr>
              <tr>
                <td width="274" valign="top"><ol>
                  <li>Status Tanah </li>
                </ol></td>
                <td width="19" valign="top"><p>:</p></td>
                <td width="379" valign="top"><p>Tanah Milik/Tanah Negara</p></td>
              </tr>
              <tr>
                <td width="274" valign="top"><ol>
                  <li>Pertimbangan dalam hal      status </li>
                </ol></td>
                <td width="19" valign="top"><p>:</p></td>
                <td width="379" valign="top"><p>&nbsp;</p></td>
              </tr>
            </table>
          <ol>
            <li>Berdasarkan data fisik dan data    yuridis yang disahkan dengan Berita Acara Pengesahan data fisik dan data yuridis    tanggal ........................................,    hak    atas tanah ini ditegaskan/diakui konversinya menjadi Hak Milik dengan    pemegang haknya <strong><?php echo $data_edit['pemohon_1'];?></strong>tanpa    catatan/dengan catatan ada keberatan (tidak ke pengadilan/sedang diproses    di pengadilan dengan/tanpa sita jaminan*) </li>
          </ol>
          <ol>
            <li>Diproses melalui pengakuan/ pemberian    hak. </li>
          </ol>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="284" valign="top"><p>&nbsp;</p></td>
                <td width="378" valign="top"><p>Kuningan, <br />
                  A.n. Kepala Kantor Pertanahan Kabupaten Kuningan <br />
                  Ketua Panitia Ajudikasi<br />
                  Pendaftaran Tanah Sistematis      Lengkap</p>
                    <p>&nbsp;</p>
                  <p align="center">&nbsp;</p>
                  <p align="center"><strong>SUMARTONO,      A.Ptnh</strong><strong> </strong><br />
                        <strong>NIP. </strong><strong>19640323      198603 1 002</strong> </p></td>
              </tr>
            </table>
          <p><strong>&nbsp;</strong></p>
          <p><strong>Catatan : Coret seluruh kata-kata no. 3 bila tidak diperlukan </strong><strong> </strong></p></td>
      </tr>
    </table>
    <p><em>*) Coret yang tidak sesuai &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; halaman  5 dari 6</em></p></td>
  </tr>

  </table>
</page>



<page size="F4">
  <table align="center" width="700" border="0">
    

  
  <tr>
    <td><table border="1" cellspacing="0" cellpadding="0" width="678">
      <tr>
        <td width="678" colspan="2" valign="top"><ul>
          <li><strong></strong><strong>KEPUTUSAN KETUA PANITIA AJUDIKASI    PENDAFTARAN TANAH SISTEMATIS LENGKAP</strong><strong> </strong></li>
        </ul></td>
      </tr>
      <tr>
        <td width="31" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
        <td width="647" valign="top"><p>Mengingat Pertaturan Menteri Negara Agraria / Kepala    Badan Pertahananan Nasional Nomor 3 Tahun&nbsp;    1997 dan Peraturan Menteri Agraria dan Tata Ruang/ Kepala Badan    Pertanahan Nasional Nomor 35 Tahun 2016 jo. Peraturan Menteri Agraria dan    Tata Ruang/ Kepala Badan Pertanahan Nasional Nomor 1 Tahun 2017 serta    memperhatikan kesimpulan Ketua Panitia Ajudikasi Pendaftaran Tanah Sistematis    Lengkap yang tercantum dalam daftar isian 201, maka :&nbsp; </p></td>
      </tr>
      <tr>
        <td width="31" valign="top"><p align="center">1.</p></td>
        <td width="647" valign="top"><p>Berdasarkan    data fisik dan data yuridis yang disyahkan dengan berita acara pengesahan    data fisik dan data yuridis tanggal .....................................    hak atas tanah ini No. Persil : <strong><?php echo $data_edit['no_persil'];?></strong>No.Kohir <strong>...</strong> seluas <strong><?php echo $data_edit['luas'];?></strong><strong> </strong>M&sup2; terletak di Jln/Blok <strong><?php echo $data_edit['jalan_gang_blok'];?></strong> Desa/Kelurahan <strong><?php echo $data_edit['desa_kelurahan'];?></strong>,    ditegaskan konversinya menjadi hak milik/diakui sebagai hak milik    dengan pemegang hak <strong><?php echo $data_edit['pemohon_1'];?></strong>tanpa    dengan catatan ada keberatan (tidak ke Pengadilan/sedang dalam proses di    Pengadilan dengan/tanpa sita jaminan*)</p></td>
      </tr>
      <tr>
        <td width="31" valign="top"><p align="center">2.</p></td>
        <td width="647" valign="top"><p> Berdasarkan    data fisik dan data yuridis yang disyarahkan dengan berita acara pengesahan    data fisik dan data yuridis tanggal &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;. Bidang tanah ini    statusnya adalah TANAH NEGARA, kepada yang menempati/menguasai nama    &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;. dapat/tidak dapat diusulkan untuk diberikan Hak Milik/Hak    Guna Bangunan/Hak Pakai. </p></td>
      </tr>
      <tr>
        <td width="31" valign="top"><p align="center">3.</p></td>
        <td width="647" valign="top"><p>Berdasarkan    Berita Acara Panitia &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip; Jo Peraturan Menteri Negara    Agraria/Kepala Badan Pertahanan Nasional Nomor 3 tahun 1997 Tanggal 1 Oktober    1997 dan Keputusan Mengeri Negara Kepala Badan Pertahanan Nasional Nomor    &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.. Tahun &hellip;&hellip;&hellip;&hellip;. Bidang tanah yang diuraikan pada daftar isian 201 ini    adalah dalam SENGKETA, sehubungan dengan itu proses persertifikatannya    ditunda sampai diterbitkan Keputusan Lembaga Peradilan yang telah mempunyai    kekuatan tetap.</p>
            <p>Apabila    dikemudian hari ternyata ada bukti yang lebih kuat dan sah, sehingga isi keputusan    ini harus dirubah dan disesuaikan dengan bukti tersebut, maka hal itu akan    dilakukan sesuai dengan peraturan perundang-undangan yang berlaku.</p>
          <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="631" valign="top"><p>Ditetapkan di Kuningan&nbsp; pada tanggal </p></td>
              </tr>
            </table>
          <p>No.    SK </p>
          <p>&nbsp;</p>
          <p align="center">A.n. Kepala Kantor Pertahanan Kabupaten Kuningan <br />
            Ketua Panitia Ajudikasi<br />
            Pendaftaran    Tanah Sistematis Lengkap</p>
          <p align="center">&nbsp;</p>
          <p align="center"><strong>SUMARTONO,    A.Ptnh</strong><strong> </strong><br />
                <strong>NIP. </strong><strong>19640323    198603 1 002</strong><strong> </strong></p>
          <p>&nbsp;</p>
          <p>Catatan :  - Beri tanda lingkaran untuk nomor yang    dipilih </p>
          <ul>
            <li>&nbsp;&nbsp;Coret semua kata-kata nomor yang    tidak dipilih</li>
          </ul></td>
      </tr>
    </table>
    <p><em>*) Coret yang tidak sesuai &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; halaman  6 dari 6</em></p></td>
  </tr>

  </table>
</page>


<page size="F4">
  <table align="center" width="700" border="0">
    
  <tr>
    <td><p align="center"><strong>K U T I P A N</strong></p>
      <p align="center"><strong>TANDA PENDAFTARAN SEMENTARA TANAH  MILIK INDONESIA</strong><br />
          <strong>PETIKAN DARI BUKU UKURAN INI  DIBERIKAN KEPADA</strong></p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="225" valign="top"><p>NAMA</p></td>
          <td width="28" valign="top"><p>:</p></td>
          <td width="463" valign="top"><p><strong><?php echo $data_edit['b_pada_saat_ini_dikuasai_oleh_2'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="225" valign="top"><p>NO. BUKU PENDAFTARAN C</p></td>
          <td width="28" valign="top"><p>:</p></td>
          <td width="463" valign="top"><p><strong>.......</strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="225" valign="top"><p>DESA</p></td>
          <td width="28" valign="top"><p>:</p></td>
          <td width="463" valign="top"><p><strong>CARACAS</strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="225" valign="top"><p>KECAMATAN</p></td>
          <td width="28" valign="top"><p>:</p></td>
          <td width="463" valign="top"><p><strong><?php echo $data_edit['desa_kelurahan'];?></strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="225" valign="top"><p>KABUPATEN</p></td>
          <td width="28" valign="top"><p>:</p></td>
          <td width="463" valign="top"><p><strong>KUNINGAN</strong></p></td>
        </tr>
        <tr>
          <td width="225" valign="top"><p>PROPINSI</p></td>
          <td width="28" valign="top"><p>:</p></td>
          <td width="463" valign="top"><p><strong>JAWA BARAT</strong></p></td>
        </tr>
      </table>
      <p align="center"><strong>Sebagai bukti bahwa tanah tersebut dibawah ini telahdicatat dalam</strong><br />
          <strong>Buku Pendaftaran Tanah Milik Indonesia Kantor daerah Tingkat II  Kuningan</strong></p>
      <table border="1" cellspacing="0" cellpadding="0" width="704">
        <tr>
          <td width="354" colspan="5"><br />
              <strong>SAWAH</strong> </td>
          <td width="350" colspan="5"><p align="center"><strong>DARAT</strong></p></td>
        </tr>
        <tr>
          <td width="66" rowspan="2"><p align="center"><strong>Nomor</strong><strong> </strong><br />
                  <strong>Persil dan</strong><br />
                  <strong>Hurup</strong><br />
                  <strong>Bagian</strong><br />
                  <strong>Persil</strong><strong> </strong></p></td>
          <td width="80" rowspan="2"><p align="center"><strong>Kelas Desa</strong><strong> </strong></p></td>
          <td width="132" colspan="2"><p align="center"><strong>Luas menurut Buku</strong><strong> </strong><br />
                  <strong>Pendaftaran Huruf B</strong><strong> </strong></p></td>
          <td width="76" rowspan="2"><p align="center"><strong>Sebab dan</strong><strong> </strong><br />
                  <strong>Tanggal</strong><br />
                  <strong>Perubahan</strong><strong> </strong></p></td>
          <td width="66" rowspan="2"><p align="center"><strong>Nomor</strong><strong> </strong><br />
                  <strong>Persil dan</strong><br />
                  <strong>Hurup</strong><br />
                  <strong>Bagian</strong><br />
                  <strong>Persil</strong><strong> </strong></p></td>
          <td width="76" rowspan="2"><p align="center"><strong>Kelas Desa</strong><strong> </strong></p></td>
          <td width="132" colspan="2"><p align="center"><strong>Luas Menurut Buku</strong><strong> </strong><br />
                  <strong>Pendaftaran Hurup B</strong><strong> </strong></p></td>
          <td width="76" rowspan="2"><p align="center"><strong>Sebab dan</strong><strong> </strong><br />
                  <strong>Tanggal</strong><br />
                  <strong>Perubahan</strong></p></td>
        </tr>
        <tr>
          <td width="66"><p align="center"><strong>Ha</strong><strong> </strong></p></td>
          <td width="66"><p align="center"><strong>M</strong><strong>&sup2;</strong><strong> </strong></p></td>
          <td width="66"><p align="center"><strong>Ha</strong></p></td>
          <td width="66"><p align="center"><strong>M</strong><strong>&sup2;</strong><strong> </strong></p></td>
        </tr>
        <tr>
          <td width="66"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="80"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="66"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="66"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="76"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="66" valign="top"><p align="center"><strong>&nbsp;</strong></p>
              <p align="center"><strong>05</strong><strong> </strong></p></td>
          <td width="76" valign="top"><p align="center"><strong>&nbsp;</strong></p>
              <p align="center"><strong>D.II</strong><strong> </strong></p></td>
          <td width="66" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="66" valign="top"><p align="center"><strong>&nbsp;</strong></p>
              <p align="center"><strong>293</strong><strong> </strong></p></td>
          <td width="76"><p align="center"><strong><em>&nbsp;</em></strong></p></td>
        </tr>
      </table>
      <table border="0" cellspacing="0" cellpadding="0" width="709">
        <tr>
          <td width="331" valign="top"><p><strong>&nbsp;</strong></p></td>
          <td width="378" valign="top"><p align="center"><strong>&nbsp;</strong></p>
              <p align="center">UNTUK SALINAN SESUAI DENGAN ASLINYA<br />
                DARI BUKU C SEBELUM TANGGAL 24-09-1960<br />
                KEPALA DESA <strong><?php echo $data_edit['desa_kelurahan'];?></strong> </p>
            <p><strong>&nbsp;</strong></p>
            <p><strong>&nbsp;</strong></p>
            <p align="center"><strong><?php echo $data_edit['nama_kepala_desa'] ; ?></strong><strong> </strong></p></td>
        </tr>
      </table></td>
  </tr>
  </table>
</page>

</body>