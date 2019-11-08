<?php
session_start();
if (isset($_SESSION["email"]))
{
	unset($_SESSION['email']);
?>
	<script language="javascript">
	document.location="../index.php";
	</script>
<?php 
	
}else{
?>
	<script language="javascript">
	alert("Login Dulu Sebelum Masuk Halaman Ini");
	document.location="../index.php";</script>
<?php 
}
?>