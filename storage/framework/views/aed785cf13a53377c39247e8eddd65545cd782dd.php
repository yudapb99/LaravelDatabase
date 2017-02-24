<?php $__env->startSection('content'); ?>
<body>
	<h2>INPUT DATA</h2>
	
	<nav>
				<ul>
					<li><b>MENU</b></li>
					<li><a href="home">Halaman Utama</a></li>
					<li><a href="tambah">Tambah Data</a></li>
					<li><a href="login">Logout</a></li>
				</ul>
			</nav>
	
	<h3>Tambah Data Siswa</h3>
	
		<table cellpadding="3" cellspacing="0" align="center">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" size="30" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="30" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
<?php echo $__env->make('UTS.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>