<?php
session_start();
if(isset($_SESSION["phono"]) || isset($_SESSION['phno']))
{
	session_destroy();
	echo "<script>
		window.location.href='Login.php';
	</script>";
}
else
{
	echo "<script>
		window.location.href='Login.php';
	</script>";
}

?>