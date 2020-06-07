<header id="cabecera">
    <h1 class="titulos">Pizza Hat Spa</h1>
    <h2 class="titulos">Servicio de domicilio</h2>
    <h3 class="titulos">¡Bienvenido!</h3>
</header>
<form id="login" action="Vista/MenuCliente.php" method="POST">
    <a>Ingrese su número de teléfono:</a>
    <input name="telefono" type="number" required maxlength="9"><br><br>
    <a>Ingrese su nombre:</a>
    <input name="nombre" type="text" required maxlength="50"><br><br>
    <a>Ingrese su apellido:</a>
    <input name="apellido" type="text" required maxlength="50"><br><br>
    <a>Ingrese su dirección:</a>
    <input name="direccion" type="text" required maxlength="150"><br><br>
    <input id="botonLogin" type="submit" value="Ingresar">
</form>