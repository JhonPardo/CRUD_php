<!doctype html>
<?php
//para que no vuelva a pedir el login 
session_start();
if (isset($_SESSION['usuario'])){
    header('Location: vista/formularios/principal.php');
}
?>


<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<style type="text/css">
body {
    background-image: url(vista/img/nordkette-7022793_960_720.jpg);
    background-repeat: no-repeat;
	background-size:100%;
}
</style>
<link href="vista/css/archivo.css" rel="stylesheet" type="text/css">
</head>

<body>
	
</body>
</html>
