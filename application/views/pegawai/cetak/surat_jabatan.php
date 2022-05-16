<!DOCTYPE html>
<html>
<head>
	<title>Cetak Surat Kenaikan Jabatan</title>
</head>
<style type="text/css">
	
body.awal{
	margin-left: 50px;
	margin-right: 40px;
	margin-top: 40px
}
</style>
<body class="awal">
<h2 align="center"><u>SURAT PENGANGKATAN</u></h2>
<h4 align="center">Nomor : .....................................</h4>
<text>Berdasarkan Kebijakan Puskesmas Kalimas Kabupaten Pemalang, maka dengan ini ditetapkan bahwa :</text><br><br>

<text>Nama : <?= $data['nm_pegawai']?></text><br>
<text>NIP : <?= $data['nip']?></text><br>
<text>Golongan : <?= $data['nm_gol']?></text><br><br>
<text>Telah secara resmi menjabat  sebagai <strong><?= $data['nm_jabatan']?></strong> terhitung sejak tanggal <?= $tanggal?> </text>
<br><br>
<text>Segala hak dan kewajiban lainnya diatur sebagaimana tercantum dalam ketentuan-ketentuan maupun
peraturan-peraturan yang berlaku.</text><br><br><br><br><br>

<text>Pemalang, <?= $tanggal?></text><br>
<text>Puskesmas Kalimas Kabupaten Pemalang</text><br><br><br><br>
<text><strong><u><?= $kepala['nm_pegawai']?></u></strong></text><br>
<text>Kepala Puskesmas</text>

</body>
</html>
<script type="text/javascript">
window.print();

</script>