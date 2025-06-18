<?php
if($_SESSION["rol"] != "Dueño"){
    header("Location: ?pid=" . base64_encode("presentacion/noAutorizado.php"));
}
?>

<body>
<?php 
include ("presentacion/encabezado.php");
?>





</body>
