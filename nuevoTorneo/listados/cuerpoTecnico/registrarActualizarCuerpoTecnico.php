<?php
    include("../../../ignore/conexionServer.php");
    $id_Cuerpotecnico=$_POST["id_Cuerpotecnico"];
    $Nombre = $_POST["Nombre"];
    $Cargo = $_POST["Cargo"];
    $Telefono = $_POST["Telefono"];
    $Cod_equipo = $_POST["Cod_equipo"];

    $sql = "UPDATE cuerpotecnico 
    SET Nombre='$Nombre', Cargo='$Cargo', Telefono='$Telefono', Cod_equipo='$Cod_equipo',
        fechaNacimiento='".$_POST["fechaNacimiento"]."' 
    WHERE id_Cuerpotecnico='$id_Cuerpotecnico'";

$actualizar = mysqli_query($conexion, $sql);

if ($actualizar) {
  header("location: listaCuerpoTecnico.php");
} else {
  echo "Error al Ingresar datos ";
}

mysqli_close($conexion); 
?>