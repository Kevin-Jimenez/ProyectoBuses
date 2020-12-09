<?php 
	session_start();
	if (isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Inicio
	</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php include "menu.php"; ?>
</body>
</html>
<?php 
	}else{
    	echo "<script>location.href = 'menu.php'</script>";
	}
?>