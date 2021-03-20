<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Link de boostrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <!-- Link de font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"
    />
<<<<<<< HEAD
    <title>Modificar Jueces</title>
=======
    <title>Modificar Equipos</title>
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e
    <link rel="stylesheet" href="../listas.css" />
  </head>

  <body>
    <header class="container">
      <div class="row">
        <div class="col-auto me-auto">
<<<<<<< HEAD
          <a href="../../index.html">
=======
          <a href="../../../index.html">
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e
            <h1><i class="fas fa-volleyball-ball"></i> SGTV</h1>
          </a>
        </div>
      </div>
    </header>
    <main class="container main">
      <div class="container">
<<<<<<< HEAD
        <h3 class="tittleMain">Modificar Jueces</h3>
=======
        <h3 class="tittleMain">Modificar Equipos</h3>
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e
      </div>
      <center><i class="fas fa-users avatar"></i><br /></center>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <td class="columnaCabecera">
                <p>
                  <b>
<<<<<<< HEAD
                    <center>ID. Juez</center>
=======
                    <center>Código Equipo</center>
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e
                  </b>
                </p>
              </td>
              <td class="columnaCabecera">
                <p>
                  <b>
<<<<<<< HEAD
                    <center>Nombre Juez</center>
=======
                    <center>Nombre Colegio</center>
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e
                  </b>
                </p>
              </td>
              <td class="columnaCabecera">
                <p>
                  <b>
<<<<<<< HEAD
                    <center>Telefono</center>
=======
                    <center>Nombre Equipo</center>
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e
                  </b>
                </p>
              </td>
              <td class="columnaCabecera">
                <p>
                  <b>
                    <center>Opciones</center>
                  </b>
                </p>
              </td>
            </tr>
          </thead>
          <?php

<<<<<<< HEAD
        include("../../../conexion/conexionServer.php");
        $idJuez=$_GET["idJuez"];
        $sql = "SELECT * FROM juez where Id_Juez='$idJuez'";
=======
        include("../../../ignore/conexionServer.php");
        $codigoEquipo=$_GET["codigoEquipo"];
        $sql = "SELECT * FROM equipos where Cod_Equipo='$codigoEquipo'";
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e
        $consulta = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_assoc($consulta)) {
        ?>
          <tbody>
            <form
              class="row g-3 needs-validation"
              novalidate
<<<<<<< HEAD
              action="registrarActualizarJueces.php"
=======
              action="registrarActualizarEquipos.php"
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e
              method="POST"
            >
              <tr>
                <td>
                  <center>
                    <input
                      type="hidden"
<<<<<<< HEAD
                      name="idJuez"
                      class="form-control"
                      id="validationCustom01"
                      min="0"
                      value="<?php echo $mostrar['Id_Juez'] ?>"
=======
                      name="codigoEquipo"
                      class="form-control"
                      id="validationCustom01"
                      min="0"
                      value="<?php echo $mostrar['Cod_Equipo'] ?>"
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e
                      required
                    />
                    <input
                      type="number"
                      class="form-control"
                      id="validationCustom01"
                      min="0"
<<<<<<< HEAD
                      value="<?php echo $mostrar['Id_Juez'] ?>"
=======
                      value="<?php echo $mostrar['Cod_Equipo'] ?>"
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e
                      required
                      disabled
                    />
                  </center>
                </td>
                <td>
                  <center>
                    <input
                      type="text"
<<<<<<< HEAD
                      name="Nombre"
                      class="form-control"
                      id="validationCustom01"
                      value="<?php echo $mostrar['Nombre'] ?>"
=======
                      name="Nombre_Colegio"
                      class="form-control"
                      id="validationCustom01"
                      value="<?php echo $mostrar['Nombre_Colegio'] ?>"
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e
                      required
                    />
                    <div class="valid-feedback">Looks good!</div>
                  </center>
                </td>
                <td>
                  <center>
                    <input
                      type="text"
<<<<<<< HEAD
                      name="Telefono"
                      class="form-control"
                      id="validationCustom01"
                      value="<?php echo $mostrar['Telefono'] ?>"
=======
                      name="Nombre_Equipo"
                      class="form-control"
                      id="validationCustom01"
                      value="<?php echo $mostrar['Nombre_Equipo'] ?>"
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e
                      required
                    />
                    <div class="valid-feedback">Looks good!</div>
                  </center>
                </td>
                <td>
                  <center>
                    <button
                      type="submit"
                      name="submit"
                      title="Guardar"
                      id="botonesLista"
                      class="btn"
                    >
                      <i class="far fa-check-square"></i>
                    </button>
                    <a
<<<<<<< HEAD
                      href="listaJueces.php"
=======
                      href="listaEquipos.php"
>>>>>>> a2cab5f0471db33b99faa9aba65a3c1c5f26170e
                      title="Cancelar"
                      id="botonesLista"
                    >
                      <i class="far fa-window-close"></i>
                    </a>
                  </center>
                </td>
              </tr>
            </form>
          </tbody>
          <?php
        
      }
  ?>
        </table>
      </div>
    </main>

    <!-- Scripts de boostrap-->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
    <!--Scripts cdn de font awesome-->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"
      integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw=="
      crossorigin="anonymous"
    ></script>
  </body>
</html>
