<?php $__env->startSection('content'); ?>
<body>
	<h2>HALAMAN UTAMA</h2>
	<nav>
				<ul>
					<li><b>MENU</b></li>
					<li><a href="home">Halaman Utama</a></li>
					<li><a href="tambah">Tambah Data</a></li>
					<li><a href="login">Logout</a></li>
				</ul>
			</nav>
	<h3>Data Siswa</h3>
	
	<table cellpadding="5" cellspacing="0" border="1" align="center">
      <tr bgcolor="#FF0000">
        <th>No.</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Alamat</th>
        <th>Opsi</th>
      </tr>
	  <?php $__currentLoopData = $dataList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	  <tr>
	  <td><?php echo e($view->id); ?></td>
	  <td><?php echo e($view->nama); ?></td>
	  <td><?php echo e($view->nim); ?></td>
	  <td><?php echo e($view->alamat); ?></td>
	  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  <td><a href="ubah">Edit</a>
	  <a href="">Delete</a></td>
</tr>      
    </table>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('UTS.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>