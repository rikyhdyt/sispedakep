<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Pengajuan Pensiun</title>
</head>
<body>
	<h2 align="center">Laporan Data Pengajuan Pensiun <br>Puskesmas Kalimas Kabupaten Pemalang</h2>
	<h5>Tanggal pengajuan : <?php echo $dari ?> - <?php echo $sampai ?> </h5>
<table align="center" border="1" width="100%" cellspacing="0">

    <thead>
        <tr>
        	<th>No</th>
            <th>NIP/NIDP</th>
            <th>Nama</th>
             <th>Tanggal Masuk</th>
            <th>Jenis Pensiun</th>
             <th>Alasan</th>
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
                 <td><?php echo $no++;?></td>
            <td><?php echo $row->nip;?></td>
            <td><?php echo $row->nm_pegawai;?></td>
             <td><?php echo $row->tgl_masuk;?></td>
              <td><?php echo $row->jenis;?></td>
               <td><?php echo $row->alasan;?></td>
            <td><?php echo $row->tgl_ajukan;?> </td>
            <td><?php echo $row->status;?></td>

        
       <?php } ?>
    </tbody>
</table>
</body>
</html>

<script type="text/javascript">
window.print();

</script>