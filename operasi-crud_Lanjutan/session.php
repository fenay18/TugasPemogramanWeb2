<?php
session_start();
include "koneksi.php";
if(isset($_POST['login'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysql_query("SELECT * FROM login WHERE username='$username' && password='$password'");
$num = mysql_num_rows($sql);
if($num==1) {	
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
?><script language="JavaScript">;document.location='home.php'</script>
<?php
} else {
// jika login salah //
?><script language="JavaScript">alert('Username atau password Anda salah'); document.location='index.php';</script>
<?php
}
}
?>