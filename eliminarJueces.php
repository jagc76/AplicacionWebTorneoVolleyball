<?php
<<<<<<< HEAD
include("../../../conexion/conexionServer.php");
$idJuez=$_GET["Id_Juez"];

$sql = "DELETE FROM juez WHERE Id_Juez='$idJuez'";
=======
include("../../../ignore/conexionServer.php");
$idEquipo = $_GET['idEquipo'];

$sql = "DELETE FROM equipos WHERE idEquipo='$idEquipo'";
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e

$eliminar = mysqli_query($conexion, $sql);

if ($eliminar) {
<<<<<<< HEAD
    header("location: listaJueces.php");
=======
    header("location: listaEquipos.php");
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e
} else {
    echo "<script>alert('No se pudo eliminar');
         windows.history.go(-1);</script>";
}

?>