<!--modal de editar-cliente-->
<?PHP
if (isset($con)) {
?>
    <div class="modal fade" id="editCliente" role="dialog" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header alert alert-success">
                    <h5 class="modal-title" id="exampleModalLabel"><i class='fas fa-edit'></i> EDITAR CLIENTE<span id="idT"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                </div>
                <div class="modal-body" id="Validado">
                    <form class="form-horizontal" novalidate method="post" id="editar_cliente" name="editar_cliente">
                        <div id="resultados_cliente"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-label-group in-border">
                                    <input type="text" class="form-control" id="mod_dui_cliente" name="mod_dui_cliente"/>
                                    <label class="form-label" for="mod_dui_cliente">Dui cliente</label>
									<input type="hidden" id="mod_id" name="mod_id" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group in-border">
                                    <input type="text" class="form-control" id="mod_nombre_cliente" name="mod_nombre_cliente"/>
                                    <label class="form-label" for="mod_nombre_cliente">Nombre cliente</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3" id="estado_cli">
                                <div class="form-label-group in-border input-group">
                                <select class="form-select" id="mod_estado_cliente" name="mod_estado_cliente" aria-describedby="estCli" required >
                                        <option value="" selected>Seleccione</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                    <label for="mod_estado_cliente" class="form-label">Estado del cliente</label>
                                    <div id="estCli" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-3" id="tipo_cli">
                                <div class="form-label-group in-border input-group">
                                    <select class="form-select" id="mod_tipo_cliente" name="mod_tipo_cliente" aria-describedby="tipCli" required >
                                        <option value="" selected>Seleccione</option>
                                        <option value="1">Natural</option>
                                        <option value="2">Juridico</option>
                                        <option value="3">Exento</option>
                                    </select>
                                    <label for="mod_tipo_cliente">Tipo de cliente</label>
                                    <div id="tipCli" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6" id="natural2">
                                <div class="form-label-group in-border">
                                    <input type="text" class="form-control" id="mod_nomcom_cliente" name="mod_nomcom_cliente" required />
                                    <label class="form-label" for="mod_nomcom_cliente">Nombre comercial</label>
                                </div>
                            </div>
                        </div> 
                        <div class="row nat " id="natural">
                            <div class="col-md-5">
                                <div class="form-label-group in-border">
                                    <select class="form-control" id="mod_giro" name="mod_giro"required>
                                        <option selected value="">Seleccione</option>
                                        <?php
                                        $gir_giros = $user->buscar("gir_giro", "1");
                                        foreach ($gir_giros as $giro) :
                                            $idgiro = $giro['gir_id'];
                                            $nombregiro = $giro['gir_nombre']; ?>
                                            <option value="<?php echo $idgiro; ?>"><?php echo $nombregiro; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="mod_giro">Giro o actividad economica</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label-group in-border">
                                    <input type="text" class="form-control" id="mod_nit" name="mod_nit" required />
                                    <label class="form-label" for="mod_nit">Nit del cliente</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label-group in-border">
                                    <input type="text" class="form-control" id="mod_registro" name="mod_registro" required />
                                    <label class="form-label" for="mod_registro">Nº de registro fiscal</label>
                                </div>
                            </div>
                        </div>
                      <div class="row">
                            <div class="col-md-7">
                                <div class="form-label-group in-border">
                                    <input type="text" class="form-control" id="mod_email" name="mod_email" required />
                                    <label class="form-label" for="mod_email">Correo electrónico</label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-label-group in-border">
                                    <input type="text" class="form-control" id="mod_tel" name="mod_tel" required />
                                    <label class="form-label" for="mod_tel">Teléfono</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-label-group in-border">
                                    <select class="form-control" id="mod_depto" name="mod_depto" aria-describedby="deptoCli" required>
                                        <option selected disabled value="">Seleccione</option>
                                        <?php
                                       $departamentos = $user->buscar("departamentos", "1");
                                        foreach ($departamentos as $departamento) :
                                            $iddepto = $departamento['dep_id'];  ?>
                                            <option value="<?php echo $iddepto ?>"><?php echo $departamento['dep_nombre'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="mod_depto">Departamento</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group in-border">
                                    <select class="form-control" id="mod_muni" name="mod_muni" required>
                                        <option value="" selected>Seleccione</option>
                                    </select>
                                    <label for="mod_muni">Municipio</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xlg-12 col-xs-12">
                                <div class="form-label-group in-border">
                                    <textarea class="form-control" id="mod_direccion" name="mod_direccion" aria-describedby="texCli" required> </textarea>
                                    <label for="mod_direccion">Dirección</label>
                                </div>
                            </div>
                        </div> 
                        <br>
                        <div class="row">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" id="Cerrar" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" id="actualizar_datos">Actualizar datos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>