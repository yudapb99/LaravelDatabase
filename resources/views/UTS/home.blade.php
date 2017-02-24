@extends('UTS.index')
@section('content')
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
	  @foreach($dataList as $view)
	  <tr>
	  <td>{{ $view->id }}</td>
	  <td>{{ $view->nama }}</td>
	  <td>{{ $view->nim }}</td>
	  <td>{{ $view->alamat }}</td>
	  @endforeach
	  <td><a href="ubah">Edit</a>
	  <a href="">Delete</a></td>
</tr>      
    </table>
	
@stop