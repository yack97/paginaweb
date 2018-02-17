<?php require_once('conexion.php');

$menu='inicio';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<body background="img/images2.jpg" bgcolor="FFCECB"> 
	<meta charset="UTF-8">
	<title>Estructuras 2018/ingenieria</title>
	<!--<link rel="shortcut icon" type="image/x-icon" href="img/descarga(2.1).ico" />-->
	<link rel="shortcut icon" type="image/x-icon" href="img/descarga(2.2).ico" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/base.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<?php include('inc/header.php');?>
	<?php include('inc/menu.php');?>
<?php include('inc/header.php');?>
	<?php include('inc/menu.php');?>
	<?php include('inc/header.php');?>
	<?php include('inc/menu.php');?>
	<?php include('inc/header.php');?>
	<?php include('inc/menu.php');?>
	<?php include('inc/header.php');?>
	<?php include('inc/menu.php');?>

	<div class="contenedor fondo-blanco relleno-8 borde-gris" style="min-height: 500px">
		<div class="fila">
			
			<div class="columna columna-m-9 columna-g-9">
				<font face="algerian">
				<h1>ESTRUCTURA DE DATOS:</h1></font>
				<p align="center">
				<?php echo 'Una estructura de datos es, a grandes rasgos, una colección de datos (normalmente de tipo simnple) que se caracterizan por su organizacion y la operacion que se define entre ellos. '?></p>
				          <br> 
				 <p align="center">
				<?php  echo '                      
				se caracterizan por las funciones de acceso que se usan para almacenar y acceder elementos individuales de  datos. estas estructuras solo existen en la memoria RAM, cierras el programa o liberas memoria y desaparecen los datos.
				su funcion principal es buscar la eficiencia tanto en memoria como tiempos de ejecucion.'; ?></p>
				 <br>    <br/>
				   <font face="algerian"><h1>OPERACIONES:</h1></font>
				   <?php echo 'Recorrido: Implica el acceder a cada registro una única vez aunque uno o más ítem  del registro sean procesado.';?>
				   <br><br/>
				   <?php echo 'Búsqueda: Implica la localización de un registro caracterizado por una determinada clave o también el acceso de todos los registros que cumpla uno o más condiciones.';?>
				   <br><br/>
				   <?php echo 'Insercción: Cuando añadimos nuevos registros a la estructura.';?>
				   <br><br/>
				   <?php echo 'Eliminacion: Operación de borrado de un registro de la estructura.';?>
				   <br><br/>
				   <?php echo 'Ordenacion: Es la operación de clasificar los registros conforme a un orden lógico o determinado (por ejemplo, alfabéticamente, deacuerdo a una clave de nombre, o numérica, deacuerdo alguna clave de numpero etc).';?>
				   <br><br/>
				   <?php echo 'Mezcla: E la operación de combinar dos archivos previamente ordenados en uno único que tambien lo está.';?>
				   <br><br/>
				   <font face="algerian"><h1>TIPOS DE ESTRUCTURAS:</h1></font>
				   <?php echo 'Primitivas: Son primitivas aquellas que no están compuestas por otras estructuras de datos por ejemplo, enteros, booleanos y caracteres.';?>
				   <br><br/>
				   <?php echo 'No primitivas: Estructuras de datos se pueden construir de una o mas primitivas. Las estructuras de datos simples que consideramos se construyen a partir de estructuras primitivas y son: cadenas, arreglos y registros.';?>
				   <br><br/>
				   <?php echo 'Lineales: Derivados del concepto de secuencia (secuencias es un conjuntos de elementos entre los que se establece una relación de predecesor y sucesor), desde el punto de vista de la informática, existen tres estructuras lineales especialmente importantes: las pilas, las colas y las listas.';?>
				   <br><br/>
				   <?php echo 'No lineales: Estructuras de datos multienlazadas.  Cada elemento puede estar enlazado a cualquier otro componentes, en estas estructuras cada elemento puede tener varios elementos “siguientes”, lo cual introduce el concepto de estructuras de ramificación, Estas estructuras de datos de ramificación son llamadas grafos y arboles. ';?>
				   <br><br/>
				   <?php echo 'Estáticas: Son aquellas en las que se asigna una cantidad fija de memoria cuando la variable se declara. (en tiempo de compilación).';?>
				   <br><br/>
				   <?php echo 'Dinámicas: Son aquellas cuya ocupación en memoria pueden aumentar o disminuir en tiempo de ejecución.(en tiempo de ejecución).';?>
				   <br><br/>

			</div>
			<div class="columna columna-m-3 columna-g-3">
				<img src="img/images.png">
				 <br>    <br/>
				  <br>    <br/>
				   <br>    <br/>
				    <br>    <br/>
				    
                <img src="img/descarga1.1.png">
                 <br>    <br/>
				      <br>    <br/>
				      <br>    <br/>
				      <br>    <br/>
				      <br>    <br/>
                <img src="img/images-1.png">
			</div>
		</div>
	</div>

		<?php include('inc/footer.php');?>
	<script src="js/base.js"></script>
</body>
</html>