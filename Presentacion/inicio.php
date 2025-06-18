<body class="bg-light">
	<?php include("presentacion/encabezado.php")?>

	<nav class="bg-primary text-white py-2">
		<div
			class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
			<div class="fw-bold fs-5 mb-2 mb-md-0">Nombre</div>
			<div
				class="d-flex flex-column flex-md-row gap-3 text-center text-md-start">
				<a href="#" class="text-white text-decoration-none">Informacion</a>
				<a href="#" class="text-white text-decoration-none">Mas información</a>
				<a href="?pid=<?php echo base64_encode("presentacion/autenticar.php") ?>" class="text-white text-decoration-none"><i
					class="fas fa-user me-1"></i>Autenticar</a>
			</div>
		</div>
	</nav>


	<div class="container my-5">
		<div class="text-center mb-5">
			<h2 class="text-primary fw-bold">Contenedor principal</h2>
			<p class="text-dark opacity-75">Parrafo de informacion</p>
		</div>

		<div class="row row-cols-1 row-cols-md-3 g-4">

			<div class="col">
				<div class="card h-100 text-center">
					<div class="card-body">
						<h5 class="card-title">
							<i class="fas fa-check-circle text-success me-2"></i> Soy un Dueño	</h5>
						<p class="card-text"></p>
						<a href="?pid=<?php echo base64_encode("presentacion/RegistraDueño.php") ?>" class="btn btn-primary">Registrarse</a>
					</div>
				</div>
			</div>


			<div class="col">
				<div class="card h-100 text-center">
					<div class="card-body">
						<h5 class="card-title">
							<i class="fas fa-clock text-warning me-2"></i> igual que la anterior
						</h5>
						<p class="card-text">No puedes asistir? Cambia la fecha y hora de
							tu cita facilmente.</p>
						<a href="#" class="btn btn-primary">Reagendar</a>
					</div>
				</div>
			</div>


			<div class="col">
				<div class="card h-100 text-center">
					<div class="card-body">
						<h5 class="card-title">
							<i class="fas fa-times-circle text-danger me-2"></i> Cancelar
							cita
						</h5>
						<p class="card-text">Cancela tu cita medica con antelacion si no
							puedes asistir.</p>
						<a href="#" class="btn btn-primary">Cancelar</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row mt-3">
			<div class="col">
				<div class="card">
					<div class="card-header"><h4>consulta de las tablas de la base de datos</h4></div>
					<div class="card-body">
                        <p>aca se comprueba si todas las tablas estan llamando de manera correcta a la base de datos, solo es para que tu veas si tienes algun error a la hora de tomar la informacion de la base</p>
        				<?php 
        				$Administrador = new Administrador();
        				$Administradores = $Administrador -> consultar();
        				echo "<table class='table table-striped table-hover'><caption>Tabla de administradores</caption>";
        				echo "<tr><td>Id</td><td>nombre</td><td>apellido</td><td>correo</td><td>clave</td></tr>";
        				foreach($Administradores as $admins){
        				    echo "<tr>";
        				    echo "<td>" . $admins -> getId() . "</td>";
        				    echo "<td>" . $admins -> getNombre() . "</td>";
        				    echo "<td>" . $admins -> getApellido() . "</td>";
        				    echo "<td>" . $admins -> getCorreo(). "</td>";
        				    echo "<td>" . $admins -> getClave() . "</td>";
        				    echo "</tr>";
        				}
        				echo "</table>";
						$Dueño = new Dueño();
        				$Dueños = $Dueño -> consultar();
        				echo "<table class='table table-striped table-hover'><caption>Tabla de Dueños</caption>";
        				echo "<tr><td>Id</td><td>nombre</td><td>apellido</td><td>correo</td><td>clave</td></tr>";
        				foreach($Dueños as $Due){
        				    echo "<tr>";
        				    echo "<td>" . $Due -> getId() . "</td>";
        				    echo "<td>" . $Due -> getNombre() . "</td>";
        				    echo "<td>" . $Due -> getApellido() . "</td>";
        				    echo "<td>" . $Due -> getCorreo(). "</td>";
        				    echo "<td>" . $Due -> getClave() . "</td>";
        				    echo "</tr>";
        				}
        				echo "</table>";
						
						$Raza = new Raza();
        				$Razas = $Raza -> consultar();
        				echo "<table class='table table-striped table-hover'><caption>Tabla de razas</caption>";
        				echo "<tr><td>Id</td><td>nombre</td></tr>";
        				foreach($Razas as $raz){
        				    echo "<tr>";
        				    echo "<td>" . $raz -> getId() . "</td>";
        				    echo "<td>" . $raz -> getNombre() . "</td>";
        				    echo "</tr>";
        				}
        				echo "</table>";
						$Perro = new Perro();
        				$Perros = $Perro -> consultar();
        				echo "<table class='table table-striped table-hover'><caption>Tabla de perros</caption>";
        				echo "<tr><td>Id</td><td>nombre</td><td>Foto</td><td>Iddueño</td><td>IdRaza</td></tr>";
        				foreach($Perros as $Per){
        				    echo "<tr>";
        				    echo "<td>" . $Per -> getId() . "</td>";
        				    echo "<td>" . $Per -> getNombre() . "</td>";
        				    echo "<td>" . $Per -> getFoto() . "</td>";
        				    echo "<td>" . $Per -> getIdDueño() . "</td>";
        				    echo "<td>" . $Per -> getidRaza() . "</td>";
        				    echo "</tr>";
        				}
        				echo "</table>";
						
						$EstadoPaseador = new EstadoPaseador();
        				$EstadosPaseadores = $EstadoPaseador -> consultar();
        				echo "<table class='table table-striped table-hover'><caption>Tabla de Estados Paseadores</caption>";
        				echo "<tr><td>Id</td><td>nombre</td></tr>";
        				foreach($EstadosPaseadores as $Pas){
        				    echo "<tr>";
        				    echo "<td>" . $Pas -> getId() . "</td>";
        				    echo "<td>" . $Pas -> getNombre() . "</td>";
        				    echo "</tr>";
        				}
						$EstadoCita = new EstadoCita();
        				$EstadosCitas = $EstadoCita -> consultar();
        				echo "<table class='table table-striped table-hover'><caption>Tabla de Estados Citas</caption>";
        				echo "<tr><td>Id</td><td>nombre</td></tr>";
        				foreach($EstadosCitas as $Pas){
        				    echo "<tr>";
        				    echo "<td>" . $Pas -> getId() . "</td>";
        				    echo "<td>" . $Pas -> getNombre() . "</td>";
        				    echo "</tr>";
        				}
        				echo "</table>";
						$Paseador = new Paseador();
        				$Paseadores = $Paseador -> consultar();
        				echo "<table class='table table-striped table-hover'><caption>Tabla de Paseadores</caption>";
        				echo "<tr><td>Id</td><td>nombre</td><td>apellido</td><td>correo</td><td>clave</td><td>Estado</td></tr>";
        				foreach($Paseadores as $Pas){
        				    echo "<tr>";
        				    echo "<td>" . $Pas -> getId() . "</td>";
        				    echo "<td>" . $Pas -> getNombre() . "</td>";
        				    echo "<td>" . $Pas -> getApellido() . "</td>";
        				    echo "<td>" . $Pas -> getCorreo(). "</td>";
        				    echo "<td>" . $Pas -> getClave() . "</td>";
        				    echo "<td>" . $Pas -> getEstado() . "</td>";
        				    echo "</tr>";
        				}
        				echo "</table>";
						$Tarifa = new Tarifa();
        				$Tarifas = $Tarifa -> consultar();
        				echo "<table class='table table-striped table-hover'><caption>Tabla de Tarifas</caption>";
        				echo "<tr><td>Id</td><td>nombre</td><td>apellido</td><td>correo</td><td>clave</td><td>Estado</td></tr>";
        				foreach($Tarifas as $Tar){
        				    echo "<tr>";
        				    echo "<td>" . $Tar -> getId() . "</td>";
        				    echo "<td>" . $Tar -> getValor() . "</td>";
        				    echo "<td>" . $Tar -> getIdPaseador() . "</td>";
        				    echo "</tr>";
        				}
        				echo "</table>";
						$Cita = new Cita();
        				$Citas = $Cita -> consultar();
        				echo "<table class='table table-striped table-hover'><caption>Tabla de Citas</caption>";
        				echo "<tr><td>Id</td><td>nombre</td><td>apellido</td><td>correo</td><td>clave</td><td>Estado</td></tr>";
        				foreach($Citas as $Cit){
        				    echo "<tr>";
        				    echo "<td>" . $Cit -> getId() . "</td>";
        				    echo "<td>" . $Cit -> getHorario() . "</td>";
        				    echo "<td>" . $Cit -> getIdEstadoCita() . "</td>";
        				    echo "</tr>";
        				}
        				echo "</table>";
						$Paseo = new Paseo();
        				$Paseos = $Paseo -> consultar();
        				echo "<table class='table table-striped table-hover'><caption>Tabla de Paseos</caption>";
        				echo "<tr><td>Id</td><td>nombre</td><td>apellido</td><td>correo</td><td>clave</td><td>Estado</td></tr>";
        				foreach($Paseos as $Pas){
        				    echo "<tr>";
        				    echo "<td>" . $Pas -> getId() . "</td>";
        		
        				    echo "</tr>";
        				}
        				echo "</table>";

        				?>			
    				</div>
				</div>
			</div>
		</div>
		
		
	</div>
</body>