<!DOCTYPE html>
<html lang="es">
<?php
include_once("modelo/operacionesBD.php"); 
    $sErr = ""; 
    $arrPrototipo = null;
    $oVivienda = new operacionesVivienda();
    try {
        $arrPrototipo = $oVivienda->buscarTodos();
    } catch (Exception $e) {
        error_log($e->getFile() . "" . $e->getLine() . "" . $e->getMessage(), 0);
        $sErr = "Error en base de datos, comunicarse con el administrador";
    }

    if ($sErr == ""){
		include_once("cabecera.html");
    include_once("banner.html");
	}
	else{
		header("Location: error.php?sError=".$sErr);
		
	}
    ?>

    <main>
    <div class="contenido">
        <section id="blog" style="text-align: center;">
            <h3>CASAS DISPONIBLES</h3>
            <br>

            <table class=tablaP border="1">
                <tr>
                    <td>Clave</td>
                    <td>No. Habitación</td>
                    <td>No. Pisos</td>
                    <td>Medidas</td>
                    <td>Precio $</td>
                    <td>Zona</td>
                    <td>Prototipo</td>


                </tr>
                <?php
                if ($arrPrototipo != null) {
                    foreach ($arrPrototipo as $oVivienda) {
                ?>
                        <tr>
                            <td><?php echo $oVivienda->getvidVivienda(); ?></td>
                            <td><?php echo $oVivienda->getvNHabi(); ?></td>
                            <td><?php echo $oVivienda->getvNPisos(); ?></td>
                            <td><?php echo $oVivienda->getvMedidas(); ?></td>
                            <td><?php echo $oVivienda->getvPrecio(); ?></td>
                            <td><?php echo $oVivienda->getvIdZona(); ?></td>
                            <td><?php echo $oVivienda->getvIdProt(); ?></td>
                        </tr>
                    <?php
                    } //foreach
                } else {
                    ?>
                    <tr>
                        <td colspan="2">No hay datos</td>
                    </tr>
                <?php
                }
                ?>
            </table>



            <br>
            <div class="galeria">

                <img src="img/casa1.jpg" width="500px">


                <p><b>DEPARTAMENTO</b></p>
                <p>2 Hab / 1 Piso
Lote de 6 x 14m2</p>
<form action="formulario.php">
        <button type="submit">Obtener Mas Información</button>
    </form>


            </div>
            
            <div class="galeria">
                <div class="foto">
                    <img src="img/casa3.jpg" width="500px">
                </div>
                <div class="pie">
                    <p><b>CASA</b></p>
                    <p>3 Hab / 2 Pisos
                        Lote de 45 x 15m2
                    </p>
                    <form action="formulario.php">
        <button type="submit">Obtener Mas Información</button>
    </form>

                </div>
            </div>
            <div class="galeria">
                <div class="foto">
                    <img src="img/casa4.jpg" width="500px">
                </div>
                <div class="pie">
                    <p><b>RESIDENCIA</b></p>
                    <p>3 Hab / 2 Pisos
Lote de 45 x 20m2</p>
<form action="formulario.php">
        <button type="submit">Obtener Mas Información</button>
    </form>
                </div>
            </div>

        </section>
    </div>
    </main>

    <?php
    include_once("info.html");
    include_once("pie.html");

    ?>


