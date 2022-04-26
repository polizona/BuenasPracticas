<html>
	
<body>
<div class="container">
<div class="row align-items-center">
<div class="col-12 align-self-center text-center p-4">
<h1>Escribe tu nombre</h1>
<h2> Buenas prácticas de software</h2>
<h2> Arquitectura de sistema </h2>								
<br>
<p>El objetivo de este ejercicio es conectar el servidor web con la base de datos a través de archivos PHP para grabar y recuperar en la base de datos. </p>
<br><p>Entra a tu base de datos y crea una tabla llamada alcaldia que tenga dos campos idalcaldia de tipo entero y alcaldia de tipo texto.</p>
<br><p>Descarga los archivos repositorio, edita los archivos PHP con tus credenciales de la base de datos.</p>
<br><p>Sube los archivos index.php, graba.php y recupera.php a tu servidor web.</p>
<form action="recupera.php" method="get">
<button type="submit">consulta</button>
</form>
<br>
					

<form action="graba.php" method="post">
<fieldset>
  <legend> Ingrese alcaldia </legend>
    <p><label>idalcaldia:<input type="int" name="idalcaldia" /></label> </p>
    <p><label>nombre:   <input type="text" name="alcaldia" /></label></p>
    <p><input type="submit" value="enviar"/></p>
</fieldset>
</form>
</div>
</div>	
</div>
</body>
</html>
