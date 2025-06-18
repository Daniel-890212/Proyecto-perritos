<?php
if($_SESSION["rol"] != "Paseador"){
    header("Location: ?pid=" . base64_encode("presentacion/noAutorizado.php"));
}
?>
<body>
<?php 
include ("Presentacion/encabezado.php");
?>





</body>

