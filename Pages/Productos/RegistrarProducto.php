<div class="card-body register-card-body">
                            <div class="row" >
                                <div class="col-2">
                                </div>
                                <div class="col-8">
                                    <p class="login-box-msg"> <b> REGISTRAR PRODUCTOS</b> </p>
                                    <form action="../../Business/Productos.php" method="POST">
                                        <div class="input-group mb-3">
                                            <input  type="number" class="form-control" placeholder="Codigo Producto" id="txtcodigoProducto" name="txtcodigoProducto" maxlength="15" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas  fa-barcode"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nombre Producto" id="txtnombreProducto" name="txtnombreProducto" maxlength="255" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <textarea class="form-control" row="3" placeholder="Descripcion Producto" id="txtdescripcionProducto" name="txtdescripcionProducto" maxlength="255" required></textarea>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas  fa-info"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" placeholder="Unidad de Medida" id="txtunidadMedida" name="txtunidadMedida" maxlength="45" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas  fa-flask"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" placeholder="Marca Producto" id="txtmarcaProducto" name="txtmarcaProducto" maxlength="45" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-edit"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" placeholder="Precio Actual" id="txtprecioActual" name="txtprecioActual" float required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas     fa-usd"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" placeholder="Cantidad Actual" id="txtcantidadActual" name="txtcantidadActual" float required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas   fa-plus"></span>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-3">

                                            </div>
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-warning btn-block">Registrar</button>
                                                <input type="hidden" id="txtOperacion" name="txtOperacion" value="Registrar">
                                            </div>
                                            <div class="col-3">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-2">
                                </div>
                            </div>
                        </div>