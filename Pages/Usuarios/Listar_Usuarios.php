<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>NOMBRE USUARIO</th>
                <th>PRIMER NOMBRE</th>
                <th>SEGUNDO NOMBRE</th>
                <th>PRIMER APELLIDO</th>
                <th>SEGUNDO APELLIDO</th>
                <th>EMAIL</th>
                <th>CELULAR</th>
                <th>DIRECCION</th>
                <th>PERFIL USUARIO</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once("../../Dataacces/Conexion.php");

            $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE estadoUsuario = 1");
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
                        <td>%s</td>
                    </tr>
                    ', $fila["nombreUsuario"], $fila["primerNombre"], $fila["segundoNombre"], $fila["primerApellido"], $fila["segundoApellido"], $fila["email"], $fila["celular"], $fila["direccion"], $fila["perfilUsuario"]);
            }


            ?>


        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>