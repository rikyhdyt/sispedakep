<!DOCTYPE html>
<html>
<head>
	<title>Cetak Surat Pensiun</title>
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
<h2 align="center"><u>SURAT KETERANGAN</u></h2>
<h4 align="center">Nomor : .....................................</h4>
<br><br>
<text>Yang bertanda tangan di bawah ini :</text><br><br>
<text>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama : <?= $kepala['nm_pegawai']?></text><br>
<text>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIP : <?= $kepala['nip']?></text><br>
<text>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jabatan/Golongan : <?= $kepala['nm_jabatan']?> - <?= $kepala['nm_gol']?></text>
<br><br>
<text>Dengan ini menerangkan :</text><br><br>
<text>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama : <?= $data['nm_pegawai']?></text><br>
<text>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIP : <?= $data['nip']?></text><br>
<text>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jabatan/Golongan : <?= $data['nm_jabatan']?> - <?= $data['nm_gol']?></text><br>
<br>
<text>Bahwa benar pegawai tersebut benar akan memasuki masa pensiun. <br>
Demikian surat keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya </text>
<br><br><br>
<text class="pad">Pemalang, <?=$tanggal?></text><br>
<text class="pad">Yang membuat pernyataan,</text><br><br><br><br>
<text class="pad"><u>Kepala Puskesmas Kalimas</u></text><br>
<text class="pad"><?= $kepala['nm_pegawai']?></text>

</body>
</html>

<script type="text/javascript">
window.print();

</script>