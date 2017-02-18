<?php
include_once 'koneksi.php';
if(isset($_POST['btn-simpan']))
{
 $nama = $_POST['nama'];
 $nim = $_POST['nim'];
 $alamat = $_POST['alamat'];

 $sql_query = "INSERT INTO mahasiswa(nama,nim,alamat) VALUES('$nama','$nim','$alamat')";

 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data berhasil disimpan');
  window.location.href='home.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Terjadi error saat simpan data');
  </script>
  <?php
 }
}
if(isset($_POST['btn-batal']))
{
 header("Location: home.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Operasi Tambah Data</title>
		<style>
			div.container {
				width:100px;
				border: 1px solid gray;
			}
			header, footer {
				padding: 1em;
				color:#FFFFFF;
				background-image:url(index.jpg);
				clear:left;
				text-align :center;
			}
			nav {
				float:left; 
				max-width: 160px;
				margin:0;
				padding:1em;
			}
			nav ul {
				list-style-type:none;
				padding:0;
			}
			nav ul a{
				text-decoration:none;
			}
			article {
				margin-left:170px;
				border-left:1px solid gray;
				padding:1em;
				overflow:hidden;
			}
		</style>
	</head>
	<body>
		<div class="Container">
			<header>
				<h1>Operator CRUD</h1>
			</header>
			<nav>
				<ul>
					<li><b>MENU</b></li>
					<li><a href="#">Menu 1</a></li>
					<li><a href="#">Menu 2</a></li>
					<li><a href="#">Menu 3</a></li>
				</ul>
			</nav>
			<article>
				<form method="POST" action="tambah.php">
					<table border="1" width="60%" align="center">
						<tr>
							<th><align ="center" colspan="2">Tambah data</th>
						</tr>
						<tr>
							<td bgcolor="#959595"><strong>NIM</strong></td>
						  <td><Input style="text" name="nim" size="80"></td>
						</tr>
						<tr>
							<td bgcolor="#959595"><strong>Nama</strong></td>
						  <td><input type=" text" name="nama" size="80"></td>
						</tr>
						<tr>
							<td bgcolor="#959595"><strong>Alamat</strong></td>
						  <td><input type=" text" name="alamat" size="80"></td>
						</tr>
						<tr>
							<td colspan="2" align="right"><input name="btn-simpan" type="submit" value="Tambah" /> <input type="button" value="Batal" name="btn-batal"/></td>
						</tr>
					</table>
				</form>
			</article>
			<footer>Fheny Anggraeni Rahmat - 14 111 033</footer>
		</div>
	</body>
</html>