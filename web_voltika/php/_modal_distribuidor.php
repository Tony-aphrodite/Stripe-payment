<?php
echo
'
<div class="modal-wrap large-modal">
    <div class="modal fade" id="distribuidor" tabindex="-1" role="dialog" aria-labelledby="distribuidor" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-gray-light">
                    <h4 class="modal-title content-title contact-title mb-0" id="exampleModalLongTitle">Quiero ser distribuidor</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-ios-close-empty"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="distribuidor_form" class="waituk_contact-form">
                        <p>Por favor llena el siguiente formulario y uno de nuestros asesores se pondrá en contacto</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Nombre" id="d_nombre" name="nombre" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Empresa" id="d_empresa" name="empresa" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" placeholder="Teléfono" id="d_telefono" name="telefono" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" placeholder="Correo electrónico" id="d_email" name="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Ganancias anuales aproximadas" id="d_ganancias" name="ganancias" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Región" id="d_region" name="region" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Propuesta de plan o capacidad de distribución" id="d_mensaje" name="mensaje"></textarea>
                        </div>
                        <div class="btn-container">
                            <button type="submit" class="btn btn-primary btn-arrow">Enviar mensaje</button>
                            <p id="error_message"> </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
';
?>