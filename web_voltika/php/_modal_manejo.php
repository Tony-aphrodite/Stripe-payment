<?php

echo
'
<div class="modal-wrap large-modal">
    <div class="modal fade" id="prueba" tabindex="-1" role="dialog" aria-labelledby="prueba" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-gray-light">
                    <h4 class="modal-title content-title contact-title mb-0" id="exampleModalLongTitle">Agenda una prueba de manejo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-ios-close-empty"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="manejo_form" class="waituk_contact-form">
                        <p>Por favor llena el siguiente formulario y uno de nuestros asesores se pondrá en contacto</p>
                        <div class="row mb-4 justify-content-center ">
                            <div class="col-2 d-none d-md-block" style="cursor:pointer;">
                                <img src="img/menu_btn1.png" style="width: 100%;" class="prueba_modelo" data-modelo="M03">
                                <img src="img/menu_m03_tx.svg" style="width: 80%;" class="prueba_modelo" data-modelo="M03">
                            </div>
                            <div class="col-2 d-none d-md-block" style="cursor:pointer;">
                                <img src="img/menu_btn2.png" style="width: 100%;" class="prueba_modelo" data-modelo="M05">
                                <img src="img/menu_m05_tx.svg" style="width: 80%;" class="prueba_modelo" data-modelo="M05">
                            </div>
                            <div class="col-2 d-none d-md-block" style="cursor:pointer;">
                                <img src="img/menu_btn3.png" style="width: 100%;" class="prueba_modelo" data-modelo="MC10">
                                <img src="img/menu_mc10_tx.svg" style="width: 80%;" class="prueba_modelo" data-modelo="MC10">
                            </div>
                            <div class="col-2 d-none d-md-block" style="cursor:pointer;">
                                <img src="img/menu_btn5.png" style="width: 100%;" class="prueba_modelo" data-modelo="Mino">
                                <img src="img/menu_mino_tx.svg" style="width: 80%;" class="prueba_modelo" data-modelo="Mino">
                            </div>
                            <div class="col-2 d-none d-md-block" style="cursor:pointer;">
                                <img src="img/menu_btn4.png" style="width: 100%;" class="prueba_modelo" data-modelo="Pesgo">
                                <img src="img/menu_pesgo_tx.svg" style="width: 80%;" class="prueba_modelo" data-modelo="Pesgo">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="m_nombre"><strong>Nombre</strong></label>
                                    <input type="text" placeholder="Nombre" id="m_nombre" name="nombre" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="m_modelo"><strong>Modelo</strong></label>
                                    <select class="form-control" id="m_modelo" name="modelo" required>
                                        <option>--- Selecciona un modelo ---</option>
                                        <option value="M03">M03</option>
                                        <option value="M05">M05</option>
                                        <option value="MC10">MC10</option>
                                        <option value="Mino">Mino B</option>
                                        <option value="Pesgo">Pesgo One</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="m_telefono"><strong>Teléfono o Whatsapp</strong></label>
                                    <input type="tel" placeholder="Teléfono" id="m_telefono" name="telefono" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="m_email"><strong>Email</strong></label>
                                    <input type="email" placeholder="Correo electrónico" id="m_email" name="email" class="form-control" requied>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="m_cp"><strong>Código Postal</strong></label>
                                    <input type="number" placeholder="Código Postal" id="m_cp" name="cp" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="m_fecha"><strong>Fecha de prueba</strong></label>
                                    <input type="date" placeholder="Fecha" id="m_fecha" name="fecha" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="m_ubicacion"><strong>Ubicación de la prueba</strong></label>
                                    <select class="form-control" id="m_ubicacion" name="ubicacion" required>
                                        <option>--- Ubicación ---</option>
                                        <option value="Santa Fe">Santa Fe Flagshipstore (CDMX)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="btn-container">
                            <button type="submit" class="btn btn-primary btn-arrow">Solicitar prueba de manejo</button>
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