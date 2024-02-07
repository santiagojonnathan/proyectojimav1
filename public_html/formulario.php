<?php
include_once("cabecera.html");
include_once("banner.html");
?>

<body>

    <section id="blog">
        <h3 style="text-align: justify;">
            Gracias por visitarnos si desea obtener mas información sobre alguno de nuestros prototipos o tiene alguno en mente no dude en ponerse en contacto con nosotros en el apartado de abajo siga los pasos para establecer contacto con alguno de nuestros ejecutivos.
        </h3>
    </section>

    <section id="blog">
        <h3>RELLENE LOS CAMPOS A CONTINUACION SI DESEA OBTENER MAS INFORMACION O TIENE ALGUN PROYECTO DIFERENTE EN ESPECIFICO</h3>
        <br>
        <h3>DATOS DEL SOLICITANTE</h3>
        <br>
        <div class="contenedor">


            <div class="contenido">

                <form name="formD" class="formularioD" action="resFormularioD.php" method="post">

                    <div class="informacion">

                        <div class="campo">
                            <label for="nombre">Nombre(s)
                                <input type="text" name="fNombre" id="nombre" placeholder="Escriba su nombre o nombre(s)">
                            </label>
                        </div>
                        <div class="campo">
                            <label for="apellido">Apellido Paterno
                                <input type="text" name="fApePat" id="apellidoP" placeholder="Escriba su Apellido Paterno">
                            </label>
                        </div>
                        <div class="campo">
                            <label for="apellido">Apellido Materno
                                <input type="text" name="fApeMat" id="apellidoM" placeholder="Escriba su Apellido Materno">
                            </label>
                        </div>
                        <div class="campo">
                            <label for="apellido">Correo electronico
                                <input type="text" name="fEmail" id="email" placeholder="Escriba su direccion de correo electronico example@gmail.com">
                            </label>
                        </div>
                        <div class="campo">
                            <label for="apellido">Numero de Telefono
                                <input type="text" name="fTel" id="tel1" maxlength="10" minlength="10" placeholder="Inserte su numero de contacto">
                            </label>
                        </div>

                        <div class="campo">
                            <label for="apellido">Numero de Telefono 2
                                <input type="text" name="fTel2" id="tel1" maxlength="10" placeholder="Ingrese su numero fijo (opcional)">
                            </label>
                        </div>
                        <!-- Desde un checkbox-->

                    </div>
                    <!--.informacion-->

                    <div class="especializacion">
                        <h3>Tipo de Proyecto</h3>

                        <select name="fIdProyecto" value="">
                            <option value="">- Selecciona una area -</option>
                            <option value="1">DEPARTAMENTO</option>
                            <option value="2">RESIDENCIA</option>
                            <option value="3">OTRO</option>
                        </select>
                    </div>

                    <div class="textarea">
                        <div class="campo">
                            <h3>Comentario/Mensaje</h3>
                            <label for="mensaje"> Escriba Debajo <br />
                                <textarea name="fComentario" rows="8" cols="40" id="mensaje" placeholder="Si desea especificar mas algún proyecto deje sus comentarios en esta caja de comentarios dando click"></textarea>
                            </label>


                        </div>
                    </div>

                    <input type="submit" value="Enviar" onClick="return evaluaD(fNombre, fApePat, fEmail, fTel, fIdProyecto);" />
                    <input type="submit" name="Submit" value="Cancelar" onClick="formD.action='formulario.php';">
                </form>


            </div>

        </div>
    </section>


    <?php
    include_once("info.html");
    ?>

    </main>

    <?php
    include_once("pie.html");
    ?>