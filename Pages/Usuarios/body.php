<div class="card-body register-card-body">


                            <div class="row">
                                <div class="col-2">
                                </div>
                                <div class="col-8">
                                    <p class="login-box-msg"><b>REGISTRAR USUARIO </b></p>
                                    <form action="../Business/Configuracion.php" method="POST">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nombre de Usuario" id="txtNombreUsuario" name="txtNombreUsuario" maxlength="20" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user-secret"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Primer Nombre" id="txtPrimerNombre" name="txtPrimerNombre" maxlength="30" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Segundo Nombre" id="txtSegundoNombre" name="txtSegundoNombre" maxlength="30" >
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Primer Apellido " id="txtPrimerApellido" name="txtPrimerApellido" maxlength="30" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Segundo Apellido" id="txtSegundoApellido" name="txtSegundoApellido" maxlength="30" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="email" id="txtEmail" name="txtEmail" maxlength="70" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" placeholder="Celular" id="txtCelular" name="txtCelular" maxlength="15" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas  fa-mobile"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" placeholder="Identificacion" id="txtIdentificacion" name="txtIdentificacion" maxlength="15" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-credit-card"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <textarea class="form-control" row="3" placeholder="Direccion" id="txtDireccion" name="txtDireccion" maxlength="250" required></textarea>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas  fa-building"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Perfil Usuario" id="txtPerfilUsuario" name="txtPerfilUsuario" maxlength="11" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas  fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Password" id="txtPassword" name="txtPassword" maxlength="15" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas  fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Perfil</label>
                                            <select class="form-control select2" style="width: 100%;" name="cmbPerfil" id="cmbPerfil">
                                                <option value="0">Seleccione</option>
                                                <option value="1">Inventario</option>
                                                <option value="2">Vendedor</option>
                                                <option value="3">Admin</option>
                                                <option value="4">Super Usuario</option>
                                            </select>
                                        </div>

                                        <div class="row">
                                            <div class="col-3">

                                            </div>
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-warning btn-block">Registrar</button>
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