<?php
$uploadedfileload="true";
$uploadedfile_size=$_FILES['uploadedfile']['size'];
$msg = "";

echo $_FILES['uploadedfile']['name'];

if ($_FILES['uploadedfile']['size']>'25000'){
	$msg=$msg."El archivo es mayor que 25KB, debes reducirlo antes de subirlo<BR>";
	$uploadedfileload="false";
}
if (!($_FILES['uploadedfile']['type'] =="image/jpeg" OR $_FILES['uploadedfile']['type'] =="image/png")){
	$msg=$msg." Tu archivo tiene que ser JPG o PNG. Otros archivos no son permitidos<BR>";
	$uploadedfileload="false";
}
$file_name=$_FILES['uploadedfile']['name'];
$add="$file_name";

if($uploadedfileload=="true"){

	if(move_uploaded_file ($_FILES['uploadedfile']['tmp_name'], $add)){
		echo " Ha sido subido satisfactoriamente";
		$imagedata = file_get_contents($file_name);
		$img64 = base64_encode($imagedata);

		$servidor="localhost";
		$usuario="tienda";
		$contrasena="kedokedo";
		$basededatos="tiendainternet";

		$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
		mysqli_set_charset($conexion, "utf8");
		/*
		$peticion = "SELECT * FROM `docentes` WHERE id_docente= ".$_POST['iddocente']." ";
		$resultado = mysqli_query($conexion, $peticion);
		while($fila = mysqli_fetch_array($resultado)){
			$id_docente = $fila['id'];
		}
		*/
		$peticion = "INSERT INTO docentes_img VALUES (
			NULL,
			'".$_POST['iddocente']."',
			'".$img64."'
			)";
		$resultado = mysqli_query($conexion, $peticion);


		if($resultado){
			?>
			<script type="text/javascript">
				alert("Registro guardado");
				window.location="mostrar.php";
			</script>
			<?php
		}
		else{
			?>
			<script type="text/javascript">
				alert("Algo ha salido mal, vuelve a intentarlo.");
				window.location="form_subir.php";
			</script>
			<?php	
		}
			}
		else{
		echo "Error al subir el archivo";
				}
}else{echo $msg;}


?>