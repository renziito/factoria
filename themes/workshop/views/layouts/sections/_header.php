<header id="header" class="header">
    <div class="header-middle p-0 bg-lightest xs-text-center">
        <div class="container pt-0 pb-0">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-6">
                    <div class="widget no-border m-0">
                        <a href="<?= Yii::app()->getBaseUrl(true) ?>" class="menuzord-brand pull-left flip xs-pull-center mt-10 mb-10">
                            <img alt="" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/logo-wide.png"></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
                        <ul class="list-inline">
                            <li><i class="fa fa-phone-square text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                            <li>
                                <a href="#" class="font-12 text-gray text-uppercase">Llamanos</a>
                                <h5 class="font-14 m-0"> 987654321 </h5>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
                        <ul class="list-inline">
                            <li><i class="fa fa-clock-o text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                            <li>
                                <a href="#" class="font-12 text-gray text-uppercase">Horarios</a>
                                <h5 class="font-13 text-black m-0"> Lun-Vier 8:00-16:00</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
            <div class="container">
                <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
                    <ul class="menuzord-menu">
                        <li class="active"><a href="<?= Yii::app()->getBaseUrl(true) ?>/#home">Inicio</a></li>
                        <li><a href="<?= Yii::app()->getBaseUrl(true) ?>/#us">Nosotros</a></li>
                        <li><a href="<?= Yii::app()->getBaseUrl(true) ?>/#services">Servicios</a></li>
                        <li><a href="<?= Yii::app()->getBaseUrl(true) ?>/#clients">Clientes</a></li>
                        <li><a href="<?= Yii::app()->getBaseUrl(true) ?>/blog">Blog</a></li>
                        <li><a href="<?= Yii::app()->getBaseUrl(true) ?>/#contact">Contacto</a></li>
                    </ul>
                    <ul class="pull-right flip hidden-sm hidden-xs">
                        <li>
                            <!-- Modal: Book Now Starts -->
                            <a class="btn btn-colored btn-flat bg-theme-color-2
                               text-white font-14 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15"
                               data-toggle="modal" data-target="#BSParentModal"
                               href="<?= $this->createUrl('modal') ?>">Book Now</a>
                            <!-- Modal: Book Now End -->
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>