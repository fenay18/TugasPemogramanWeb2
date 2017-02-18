<?php
include_once 'koneksi.php';

	if (isset($_GET['delete_id'])){
		$sql_query="DELETE FROM mahasiswa WHERE id_user=".$_GET['delete_id'];
		mysql_query($sql_query);
		header("Location:$_SERVER[PHP_SELF]");
	}
?>		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Operasi CRUD</title>
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
		<script type="text/javascript">
			function edit_id(id){
				if(confirm('Yakin Ingin di edit ?')){
					window.location.href='simpan.php?edit_id='+id;
				}
			}
			
			function delete_id(id){
				if(confirm('Yakin ingin di hapus ?')){
					window.location.href='home.php?delete_id='+id;
				}
			}
		</script>
	</head>
	<body>
		<div class="Container">
			<header>
				<h1>Welcome to CRUD<a href="logout.php">-Log Out</a></h1>
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
				<table border="1" width="75%" align="center">
					<tr>
						<th><a href="tambah.php"><button type="submit">+ Tambah</button></a></th>
					</tr>
					<tr bgcolor="#959595">
						<th>No</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>
						<?php
							$sql_query = "SELECT * FROM mahasiswa";
							$result_set = mysql_query($sql_query);
						
							if (mysql_num_rows($result_set) > 0){
								while ($row = mysql_fetch_row($result_set)){
						?>
					<tr>
						<td><?php echo $row[0]; ?></td>
						<td><?php echo $row[1]; ?></td>
						<td><?php echo $row[2]; ?></td>
						<td><?php echo $row[3]; ?></td>
						<td><a href="javascript:edit_id('<?php echo $row['0']; ?>')">Edit</a>
							<a href="javascript:delete_id('<?php echo $row['0']; ?>')">Delete</a></td>
					</tr>
						<?php
								}
							}
							else {
						?>
					<tr>
						<td colspan="5">Data Tidak Ditemukan</td>
					</tr>
						<?php
							}
						?>
				</table>
			</article>
			<footer>Fheny Anggraeni Rahmat - 14 111 033</footer>
		</div>
	</body>
</html>