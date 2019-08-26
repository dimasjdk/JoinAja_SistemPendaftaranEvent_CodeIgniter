<?php
 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=Data Peserta.xls");
 header("Pragma: no-cache");
 header("Expires: 0");

 ?>
<?php
  date_default_timezone_set('Asia/Jakarta');
  echo "Tanggal Backup :".date("Y-m-d H:i:sa");
  ?>
 <br>
<table border='1' width="100%">
<tr>
		<th>No</th>
		<th>Pin</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Telepon</th>
		<th>Jumlah Tiket</th>
		<th>Alamat</th>
		<th>Created At</th>
		<th>Updated At</th>
</tr>
<tr>
		<?php
		$no=1;
        foreach ($data_peserta as $row) {
        ?>
        	<td><?php echo $no++?></td>
            <td><?php echo $row->pin;?></td>
            <td><?php echo $row->name;?></td>
            <td><?php echo $row->email;?></td>
            <td><?php echo $row->telp;?></td>
            <td><?php echo $row->nim;?></td>
            <td><?php echo $row->alamat;?></td>
            <td><?php echo $row->created_at;?></td>
            <td><?php echo $row->updated_at;?></td>
</tr>
		<?php } ?>
</table>
