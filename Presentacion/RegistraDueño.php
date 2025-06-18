<?php
if(isset($_POST["Registrar"])){
    $Nombre = $_POST["Nombre"];
    $Apellido = $_POST["Apellido"];
    $correo = $_POST["Correo"];
    $clave = $_POST["Clave"];
    $Dueño = new Dueño();
    if($Dueño->Insertar( $Nombre, $Apellido, md5($clave),$correo)){
         header("Location: ?pid=" . base64_encode("Presentacion/autenticar.php"));
    }
}
?>
<body class="bg-light">
<?php include("presentacion/encabezado.php");?>
    <form class="container" method="POST" action="?pid=<?php echo base64_encode("presentacion/RegistraDueño.php") ?>">
  <div class="mb-3">
    <label for="Nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="Nombre">
  </div>
  <div class="mb-3">
    <label for="apellido" class="form-label" >Apellido</label>
    <input type="text" class="form-control" name="Apellido">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="email" class="form-control" name="Correo">
  </div>
  <div class="mb-3">
    <label for="Contrasena" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="Clave">
  </div>
  <button type="submit" class="btn btn-primary" name="Registrar">Registrar</button>
</form>

</body>