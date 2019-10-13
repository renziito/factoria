<section id="contact">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-7 pb-sm-20">
                    <h3 class="line-bottom font-20 text-theme-colored text-uppercase mt-0">Formulario de Contacto</h3>

                    <div class="form">
                        <form method="POST" id="frm-contact"> 
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-30">
                                        <input placeholder="Escriba su nombre" type="text"
                                               id="popup_reservation_name" name="Nombre"
                                               required="" class="form-control" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-30">
                                        <input placeholder="Escriba su telefono" type="text"
                                               id="popup_reservation_phone" name="Telefono"
                                               class="form-control" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-30">
                                        <input placeholder="Escriba su correo" type="text"
                                               id="popup_reservation_phone" name="Correo"
                                               class="form-control" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea placeholder="Escriba algun mensaje adcional" 
                                                  rows="5" class="form-control required" name="Mensaje"
                                                  aria-required="true"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group text-center mb-0 mt-20">
                                        <button type="button" class="btn btn-colored btn-theme-colored btn-lg 
                                                btn-flat border-left-theme-color-2-4px" id="btn-send"
                                                data-keyboard="false"  data-backdrop="static" 
                                                data-toggle="modal" data-target=".bs-example-modal-sm">
                                            Enviar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5 pb-sm-20">
                    <h3 class="line-bottom font-20 text-theme-colored text-uppercase mt-0">¿Donde estamos?</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.9700034621987!2d-77.02162448457463!3d-12.11420494645848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c80e6725a547%3A0x756561dee90f58e0!2sSan%20Carlos%20660%2C%20Surquillo%2015047!5e0!3m2!1sen!2spe!4v1569903995477!5m2!1sen!2spe"
                            width="333" height="333" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade bs-example-modal-sm"  role="dialog"
     aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="p-10 text-center">
                <br><h4>Correo enviado!</h4><br>
                <button id="send-botton" class="btn btn-sm btn-success">
                    Aceptar
                </button><br><br>
            </div>
        </div>
    </div>
</div>

<script>
    $('#send-botton').on('click', function () {
        $('#frm-contact').submit();
    });
</script>