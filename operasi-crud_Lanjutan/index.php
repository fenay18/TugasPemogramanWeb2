<?php
	session_start();
	if(isset($_POST['login'])){
		include "koneksi.php";
		$query=mysql_query("SELECT * FROM login WHERE username='$_POST[username]' and password='$_POST[password]'");
		$row=mysql_num_rows($query);

		if($row==1){
			$_SESSION['username']=$_POST['username'];
			$_SESSION['password']=($_POST['password']);
?>
<script type="text/javascript">
	alert('Anda Berhasil Login');
	document.location="home.php";
</script>
<?php
	} else {
?>
<script type="text/javascript">
	alert('Anda Gagal Login, Silakan Cek User/Password Anda atau Silakan Daftar Terlebih Dahulu');
	document.location="index.php";
</script>
<?php
}
}
?>
<!DOCTYPE html>
<html>
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
	</head>
	
	<body>
		<div class="Container">
			<header>
				<h1>Operasi CRUD</h1>
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
				<form action="" method="post">
				<table>
				<tr>					
					<td><label>UserName :</label></td>
					<td><input id="name" name="username" placeholder="username" type="text"></td>
				</tr>
				<tr>					
				<td><label>Password :</label></td>
				<td><input id="password" name="password" placeholder="**********" type="password"></td>
				</tr>
				<tr>					
				<td colspan="2"><input name="login" type="submit" value=" Login "></td>
				</tr>				
				</table>
				</form>
			</article>
			<footer>Fheny Anggraeni Rahmat - 14 111 033</footer>
		</div>
	</body>		
</html>