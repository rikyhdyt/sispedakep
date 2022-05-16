<!DOCTYPE html>
<html>
<head>
	<title>Cetak Surat Cuti</title>
</head>
<style type="text/css">
	
body.awal{
	margin-left: 50px;
	margin-right: 40px;
	margin-top: 40px
}

text.pad{
	padding-left: 450px;
}
</style>
<body class="awal">
<h2 align="center"><u>SURAT IZIN CUTI PEGAWAI PUSKESMAS KALIMAS</u></h2>
<h4 align="center">Nomor : .....................................</h4>
<text>Yang bertanda tangan dibawah ini Kepala Puskesmas Kalimas Kabupaten Pemalang,
berdasarkan perundang-undangan yang berlaku, maka dengan ini :</text><br><br>
<text>1. Memberikan izin cuti kepada pegawai yang akan melakukan <strong><?= $data['jns_cuti']?> </strong> kepada :</text><br>
<text>&nbsp;&nbsp;&nbsp;a. Nama : <?= $data['nm_pegawai']?></text><br>
<text>&nbsp;&nbsp;&nbsp;b. Tempat/tanggal lahir : <?= $data['tmpt_lahir']?>, <?= $data['tgl_lahir']?></text><br>
<text>&nbsp;&nbsp;&nbsp;c. Jabatan : <?= $data['nm_jabatan']?> - <?= $data['pns']?></text><br>
<text>&nbsp;&nbsp;&nbsp;d. Alamat : <?= $data['alamat']?></text><br><br>

<text>2. Kepada yang bersangkutan diberikan izin cuti terhitung dari <strong><?= $data['dari']?></strong> sampai <strong><?= $data['sampai']?> </strong> dengan ketentuan :</text><br>
<text>&nbsp;&nbsp;&nbsp;a. Sebelum menjalankan cuti wajib serah terima pekerjaan dengan pegawai lainnya</text><br>
<text>&nbsp;&nbsp;&nbsp;b. Setelah selesai manjalankan cuti wajib melaporkan kepada Kepala Puskesamas</text><br><br>

<text>3. Surat cuti ini diberikan berdasarkan permohonan izin cuti yang bersangkutan yang diajukan pada <?= $data['tgl_ajukan']?></text>

<br><br><br>
<text> Demikian surat izin cuti ini dibuat untuk dipergunakan sebagai semestinya.</text><br><br><br>
<text class="pad"> Dikeluarkan di Pemalang <br> 
<text class="pad">Pada tanggal <?= $tanggal?></text>
<u><br><br><br> <br>
<text class="pad">Kepala Puskesmas Kalimas</u></text>
<text class="pad"><?= $kepala['nm_pegawai']?></text>
</body>
</html>

<script type="text/javascript">
window.print();

</script>