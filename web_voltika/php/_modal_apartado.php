<?php
echo '
<div class="modal-wrap large-modal">
    <div class="modal fade" id="apartar" tabindex="-1" role="dialog" aria-labelledby="apartar" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-gray-light">
                    <h4 class="modal-title content-title contact-title mb-0" id="exampleModalLongTitle" style="text-transform: none; letter-spacing: normal;">¡Aparta tu Voltika con solo $1,800!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-ios-close-empty"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <p style="font-size:1.2em">Entregas comienzan en agosto 2025. Asegura la tuya hoy. Cupo limitado.</p>
                        </div>
                        <div class="col-12 text-center">
                            <img id="apartado_img" src="" style="width:100%; max-width:500px;">
                        </div>
                        <div class="col-md-11">
                            <p>Lo esencial:</p>
                            <ul style="list-style-type: decimal;">
                                <li>Anticipo de $1 800 MXN. Completa tus datos y realiza el pago para apartar tu motocicleta antes de que se agote.</li>
                                <li>El anticipo se descuenta del precio final al liquidar de contado o a meses sin intereses con tarjetas participantes. (No aplica para Crédito Voltika).</li>
                                <li>El anticipo no es reembolsable.</li>
                                <li>Vigencia del anticipo: 7 – 31 de agosto 2025. Dentro de ese periodo deberás completar la compra.</li>
                                <li>Asignación de unidades por orden de anticipos confirmados.</li>
                                <li>Entrega sin costo en punto de venta CDMX o envío a toda la República con tarifa calculada al cerrar tu pedido.</li>
                                <li>Recibirás un correo con tu folio de anticipo. Si no lo ves en 24 h, contáctanos: 557 944 0928 / ventas@voltika.mx.</li>
                            </ul>
                            <br>
                            <form id="apartado_form">
                                <div class="waituk_select-box-primary">
                                    <input type="checkbox" name="checkbox" required style="width:50px; transform: scale(1.5); padding:10px;"/>
                                    <label for="checkbox2"><strong>Al continuar declaras haber leído y aceptado los <a href="docs/tyc_apartado.pdf" target="_blank"><b>Términos y Condiciones</b></a> aplicables a esta promoción.</strong></label>
                                </div>
                                <button type="submit" class="btn btn-small-font btn-ciudad has-radius-huge btn-arrow mt-4 mb-4">Quiero apartarla<span class="c-ripple js-ripple"><span class="c-ripple__circle"></span></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
';

?>