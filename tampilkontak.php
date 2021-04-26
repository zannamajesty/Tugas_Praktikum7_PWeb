<h2> List Kontak</h2> <!--membuat heading 2 pada halaman web-->
<table border="1"><!--membuat tabel-->
	<tr> <th>NO</th> <th>ID</th> <th>NAMA</th> <th>GENDER</th> <th>EMAIL</th> <th>ALAMAT</th> <th>KOTA</th> <th>PESAN</th> </tr>
	<?php //perintah php
	include 'koneksi.php'; //mengkoneksikan dengan file koneksi.php
	$kontak = mysqli_query($koneksi, "SELECT * from kontak"); //membuat variabel mahasiswa
	$no = 1; //membuat variabel no dengan nilai 1
	foreach ($kontak as $row) { //membuat program perulangan 
		echo
		"<tr> 
		<td> $no </td>
		<td>".$row['id']." </td>
		<td>".$row['nama']." </td>
		<td>".$row['jkel']." </td>
		<td>".$row['email']." </td>
		<td>".$row['alamat']." </td>
		<td>".$row['kota']." </td>
		<td>".$row['pesan']." </td>
			</tr>";
		$no++; //nilai variabel no akan bertambah sesuai dengan perulangan yang berlangsung
	}
	?>
</table>