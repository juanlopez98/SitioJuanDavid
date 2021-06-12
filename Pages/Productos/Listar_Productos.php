
<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>CODIGO PRODUCTO</th>
                <th>NOMBRE PRODUCTO </th>
                <th>DESCRIPCION PRODUCTO</th>
                <th>UNIDAD DE MEDIDA</th>
                <th>MARCA PRODUCTO</th>
                <th>PRECIO ACTUAL </th>
                <th>CANTIDAD ACTUAL </th>
                
            </tr>
        </thead>
        <tbody>
            <?php
                require_once("../../Dataacces/Conexion.php");

                $consulta=mysqli_query($conexion, "SELECT * FROM productos");
                while($fila=mysqli_fetch_array($consulta)){
                    printf('
                    <tr>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        
                    </tr>
                    ', $fila["codigoProducto"], $fila["nombreProducto"], $fila["descripcionProducto"],$fila["unidadMedida"], $fila["marcaProducto"], $fila["precioActual"], $fila["cantidadActual"]);
                }


            ?>


        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>