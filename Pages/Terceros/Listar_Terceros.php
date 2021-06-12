<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>IDENTIFICACION C.L</th>
                <th>NOMBRE CLIENTE</th>
                <th>EMAIL</th>
                <th>CELULAR</th>
                <th>TELEFONO</th>
                <th>DIRECCION</th>
                <th>DESCRIPCION</th>
                <th>ESTADO</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
            require_once("../../Dataacces/Conexion.php");

            $consulta = mysqli_query($conexion, "SELECT * FROM terceros");
            while ($fila = mysqli_fetch_array($consulta)) {
                printf('
                    <tr>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        
                    </tr>
                    ', $fila["identificacionTercero"], $fila["nombreTercero"], $fila["emailTercero"], $fila["celularTercero"], $fila["telefonoTercero"], $fila["direccionTercero"], $fila["descripcionTercero"], $fila["estadoTercero"]);
            }


            ?>


        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>