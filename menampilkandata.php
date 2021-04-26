<h2> List Mahasiswa</h2> <!--membuat heading 2 pada halaman web-->
<table border="1"><!--membuat tabel-->
	<tr> <th>NO</th> <th>NIM</th> <th>NAMA</th> <th>GENDER</th> <th>JURUSAN</th> <th>ALAMAT</th> 
	<?php //perintah php
	include 'koneksi.php'; //mengkoneksikan dengan file koneksi.php
	$mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa"); //membuat variabel mahasiswa
	$no = 1; //membuat variabel no dengan nilai 1
	foreach ($mahasiswa as $row) { //membuat program perulangan 
		$jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki Laki'; //membuat variabel jenis kelamin
		echo
		"<tr> 
		<td> $no </td>
		<td>".$row['nim']." </td>
		<td>".$row['nama']." </td>
		<td>".$jenis_kelamin." </td>
		<td>".$row['jurusan']." </td>
		<td>".$row['alamat']." </td>
			</tr>";
		$no++; //nilai variabel no akan bertambah sesuai dengan perulangan yang berlangsung
	}
	?>