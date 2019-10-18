<div class="modal-header bg-theme-colored">
    <h4 class="modal-title text-white" id="popup_myModalLabel">Solicitar Repuestos
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </h4>
</div>
<div class="p-40">
    <!-- Reservation Form Start-->
    <form id="popup_reservation_form" name="reservation_form" class="reservation-form" method="post" action="<?= Yii::app()->createUrl('site/repuesto') ?>">
        <div class="row">
            <div class="reservation-first-step">
                <h3 class="text-theme-colored line-bottom ml-15 mb-30 mr-15">Información del Vehiculo</span></h3>
                <div class="col-sm-6">
                    <div class="form-group mb-30">
                        <label>Marca del Vehiculo</label>
                        <?php $pathMarca = Yii::app()->getBaseUrl(true) . '/files/media/marcas/' ?>
                        <div class="styled-select">
                            <select id="popup_car_name_select" name="Marca" class="form-control ddslick" required="">
                                <?php foreach ($marcas as $marca) : ?>
                                    <option data-description="<?= $marca->descripcion ?>" data-imagesrc="<?= $pathMarca ?>/<?= $marca->image ?>" value="<?= $marca->titulo ?>">
                                        <?= $marca->titulo ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-30">
                        <label>Tipo de Carro</label>
                        <div class="styled-select">
                            <select id="popup_car_type_select" name="Tipo" class="form-control ddslick" required="">
                                <option data-description="Vehiculo empleado generalmente para el transporte de mercancías, y que tiene en su parte trasera una zona de carga." data-imagesrc="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/car-logos/c3.png" value="Truck">
                                    Camioneta
                                </option>
                                <option data-description="Vehículos de alta gama dentro de sus mismos grupos, siguen existiendo marcas específicas relacionadas con este tipo de coches de lujo." data-imagesrc="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/car-logos/c1.png" value="Luxury Car">
                                    Carro de Lujo
                                </option>
                                <option data-description="El acrónimo SUV proviene del inglés y significa Sport Utility Vehicle o, traducido al español, Vehículo Utilitario Deportivo." data-imagesrc="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/car-logos/c2.png" value="Suv">
                                    Suv
                                </option>
                                <option data-description="Vehículo familiar, más cuadrado y alto, con tres o cuatro filas de asientos. y con capacidad para seis o más pasajeros." data-imagesrc="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/car-logos/c4.png" value="Van">
                                    Van
                                </option>
                                <option data-description="Vehículo medio, pequeño y grande que puede ser para 2 o 4 pasajeros, con 2 o 4 puertas diseñado para poder circular a altas velocidades." data-imagesrc="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/car-logos/c5.png" value="Sports">
                                    Deportivos
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-30">
                        <label>Modelo del Carro</label>
                        <input placeholder="Escriba el modelo aquí" type="text" id="popup_car_model" name="Modelo" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-30">
                        <label>VIN Code</label>
                        <input placeholder="Escriba el VIN CODE aquí" type="text" id="popup_car_model" name="VIN" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-30">
                        <label>Descripción del repuesto</label>
                        <input placeholder="Escriba la descripción del respuesto" type="text" id="popup_car_model" name="Descripcion" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-30">
                        <label>Código del repuesto</label>
                        <input placeholder="Escriba el código del respuesto" type="text" id="popup_car_model" name="Codigo" class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="reservation-second-step">
                <h3 class="text-theme-colored line-bottom mt-0 mr-15 mb-30 ml-15">
                    Información Personal</h3>
                <div class="col-sm-6">
                    <div class="form-group mb-30">
                        <input placeholder="Escriba su nombre" type="text" id="popup_reservation_name" name="Nombre" required="" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-30">
                        <input placeholder="Escriba su telefono" type="text" id="popup_reservation_phone" name="Telefono" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <textarea placeholder="Escriba algun mensaje adcional" rows="5" class="form-control required" name="Mensaje" aria-required="true"></textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group text-center mb-0 mt-20">
                        <button type="submit" class="btn btn-colored btn-theme-colored btn-lg 
                                btn-flat border-right-theme-workshop-6px" data-loading-text="Enviando...">Solicitar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Reservation Form End-->

    <!-- Reservation Form Validation Start-->
    <script type="text/javascript">
        $("#popup_reservation_form").validate({
            submitHandler: function(form) {
                var form_btn = $(form).find('button[type="submit"]');
                var form_result_div = '#popup_form-result';
                $(form_result_div).remove();
                form_btn.before('<div id="popup_form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                var form_btn_old_msg = form_btn.html();
                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                $(form).ajaxSubmit({
                    dataType: 'json',
                    success: function(data) {
                        if (data.status == 'true') {
                            $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function() {
                            $(form_result_div).fadeOut('slow')
                        }, 6000);
                    }
                });
            }
        });
    </script>
    <!-- Reservation Form Validation Start -->
</div>
<!-- Footer Scripts -->
<script>
    //reload date and time picker
    THEMEMASCOT.initialize.TM_datePicker();
    THEMEMASCOT.initialize.TM_sliderRange();
    THEMEMASCOT.initialize.TM_ddslick();
</script>