<!DOCTYPE html>
<html>
<head>
	<title>Cetak laporan pengajuan kenaikan jabatan</title>
</head>
<body>
	<h2 align="center">Laporan Riwayat Pengajuan Kenaikan Jabatan <br>Puskesmas Kalimas Kabupaten Pemalang</h2>
<h5>Tanggal pengajuan : <?php echo $dari ?> - <?php echo $sampai ?> </h5>
<table border="1" width="100%" cellspacing="0">

    <thead>
        <tr>
            <th>NIP/NIDP</th>
            <th>Nama</th>
            <th>Jabatan Sekarang</th>
              <th>Tanggal diajukan</th>
            <th>Status</th>
            </tr>
    </thead>
    <tbody>
        <tr> 
         <?php
            $no = 1;
            foreach ($data1->result() as $row){
                ?>   
            <td><?php echo $row->nip;?></td>
            <td><?php echo $row->nm_pegawai;?></td>
             <td><?php echo $row->nm_jabatan;?></td>
            <td><?php echo $row->tgl_ajukan;?> </td>
            <td><?php echo $row->status;?></td>

        </tr>
        
       <?php } ?>
    </tbody>
</table>
</body>
</html>