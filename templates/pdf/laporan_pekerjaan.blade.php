<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pekerjaan</title>
</head>
<?php 
	$bulan = array(
	                '01' => 'JANUARI',
	                '02' => 'FEBRUARI',
	                '03' => 'MARET',
	                '04' => 'APRIL',
	                '05' => 'MEI',
	                '06' => 'JUNI',
	                '07' => 'JULI',
	                '08' => 'AGUSTUS',
	                '09' => 'SEPTEMBER',
	                '10' => 'OKTOBER',
	                '11' => 'NOVEMBER',
	                '12' => 'DESEMBER',
	        );
 ?>
<body style="text-align: center;" >
	<p style="text-align: center;"><h1>LAPORAN PEKERJAAN</h1></p>
	<table  border="1" width="100%" style="text-align: center;">
		<tr style="background-color: grey">
			<td>Nama Operasional</td>
			<td>Pekerjaan</td>
			<td>Nama Customer</td>
			<td>Status</td>
			<td>Tanggal</td>
		</tr>
		<?php foreach ($model_pekerjaan as $key => $value): ?>
			<tr>
				<td><?php echo $value['nama_operasional']; ?></td>
				<td><?php echo $value['pekerjaan']; ?></td>
				<td><?php echo $value['nama_customer']; ?></td>
				<td><?php echo $value['status']; ?></td>
				<td><?php echo date('d-m-Y', strtotime($value['tanggal'])); ?></td>
			</tr>
		<?php endforeach ?>
	</table>
	<div style="width: 100%">
		<p style="text-align: center; float: right;">
			Jakarta, <?php echo date('d').' '.(strtolower($bulan[date('m')])).' '.date('Y') ?> <br>
			Mengetahui <br><br><br><br><br>
			Manager
		</p>
	</div>
	
</body>
</html>