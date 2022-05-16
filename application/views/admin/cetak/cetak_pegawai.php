<style type="text/css" media="print">
  @page { size: landscape; }
</style>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Data Pegawai </title>
</head>
<body>
    <h2 align="center">Laporan Data Pegawai <br>Puskesmas Kalimas Kabupaten Pemalang</h2>
<table align="center" border="1" cellspacing="0" width="100%">

    <thead>
        <tr>
            <th>No</th>
            <th>NIP/NIDP</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Golongan</th>
            <th>Gaji</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Masuk</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Pendidikan</th>
            <th>E-mail</th>
            <th>No. HP</th>
           
            </tr>
    </thead>
    <tbody>
        <tr>  
        <?php
            $no = 1;
            foreach ($data->result() as $row){
                ?>  
            <td><?php echo $no++;?></td>
            <td><?php echo $row->nip;?></td>
            <td><?php echo $row->nm_pegawai;?></td>
            <td><?php echo $row->nm_jabatan;?> - <?php echo $row->pns;?></td>
            <td><?php echo $row->nm_gol;?></td>
            <td><?php echo $row->gaji;?></td>
            <td><?php echo $row->jekel;?></td>
            <td><?php echo $row->tgl_masuk;?></td>
            <td><?php echo $row->tmpt_lahir;?>, <?php echo $row->tgl_lahir;?></td>
            <td><?php echo $row->alamat;?></td>
            <td><?php echo $row->pendidikan;?></td>
            <td><?php echo $row->email;?></td>
            <td><?php echo $row->no_hp;?></td>
            
           
        </tr>
        
        <?php } ?>
    
    </tbody>
</table>
</body>
</html>



<script type="text/javascript">
window.print();

</script>