<?php
<<<<<<< HEAD
    include("../../../conexion/conexionServer.php");
    $idJuez=$_POST["idJuez"];
    $Nombre = $_POST["Nombre"];
    $Telefono = $_POST["Telefono"];

    $sql = "UPDATE juez 
    SET Nombre='$Nombre', Telefono='$Telefono'
    WHERE Id_Juez='$idJuez'";
=======
    include("../../../ignore/conexionServer.php");
    $codigoEquipo=$_POST["codigoEquipo"];
    $nombreColegio = $_POST["Nombre_Colegio"];
    $nombreEquipo = $_POST["Nombre_Equipo"];

    $sql = "UPDATE equipos 
    SET Nombre_Colegio='$nombreColegio', Nombre_Equipo='$nombreEquipo'
    WHERE Cod_Equipo='$codigoEquipo'";
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e

$actualizar = mysqli_query($conexion, $sql);

if ($actualizar) {
<<<<<<< HEAD
  header("location: listaJueces.php");
=======
  header("location: listaEquipos.php");
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e
} else {
  echo "Error al Ingresar datos ";
}

mysqli_close($conexion); 
?>