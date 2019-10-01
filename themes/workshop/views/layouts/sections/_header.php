<style>
    .default {
        border-color: #57585a;
        color: white;
    }

    .default:hover {
        background: #e7e7e7;
    }
</style>

<div class="row">
    <div style="    float: left;padding-right: 0px;background: rgba(0,53,88,1);
         background: -moz-linear-gradient(top, rgba(0,53,88,1) 0%, rgba(0,53,88,1) 47%, rgba(87,88,90,1) 49%, rgba(87,88,90,1) 100%);
         background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(0,53,88,1)), color-stop(47%, rgba(0,53,88,1)), color-stop(49%, rgba(87,88,90,1)), color-stop(100%, rgba(87,88,90,1)));
         background: -webkit-linear-gradient(top, rgba(0,53,88,1) 0%, rgba(0,53,88,1) 47%, rgba(87,88,90,1) 49%, rgba(87,88,90,1) 100%);
         background: -o-linear-gradient(top, rgba(0,53,88,1) 0%, rgba(0,53,88,1) 47%, rgba(87,88,90,1) 49%, rgba(87,88,90,1) 100%);
         background: -ms-linear-gradient(top, rgba(0,53,88,1) 0%, rgba(0,53,88,1) 47%, rgba(87,88,90,1) 49%, rgba(87,88,90,1) 100%);
         background: linear-gradient(to bottom, rgba(0,53,88,1) 0%, rgba(0,53,88,1) 47%, rgba(87,88,90,1) 49%, rgba(87,88,90,1) 100%);
         filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#003558', endColorstr='#57585a', GradientType=0 );">
        <img src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/left.png"/>
    </div>
    <div style="display: inline">
        <div class="row text-center" style="height: 21px; background-color: #003558">
            <div style="margin: auto;width: 50%; color: white">
                <span><i class="fa fa-whatsapp"></i> 993 616 759</span>
                <span style="margin-left: 15px;"><i class="fa fa-envelope"></i> bpenaranda@factoriapenaranda.com</span>
                <a class="btn btn-colored  bg-theme-color-2
                   text-white bs-modal-ajax-load mt-0 btn-xs"
                   style="margin-left: 20px; padding: 0px 14px;"
                   data-toggle="modal" data-target="#BSParentModal"
                   href="<?= $this->createUrl('modal') ?>">Solicitar Repuestos
                </a>
            </div>
        </div>
        <div class="row text-center" style="height: 111px; background-color: white">
            <div style="margin: auto;width: 70%;color: #57585a;font-size: 1.5em;
                 line-height: 1.5;display: inline-block;vertical-align: middle;text-align: center">
                <div class="col-md-4"><i class="fa fa-map-marker"></i> SAN CARLOS 660,<br> SURQUILLO</div>
                <div class="col-md-4"><i class="fa fa-clock-o"></i> LUNES A VIERNES,<br> 8:15AM A 5:45PM</div>
                <div class="col-md-4">SÁBADOS,<br> 8:00AM A 12:00PM</div>
            </div>
        </div>
        <div class="row text-center" style="height: 30px; background-color: #57585a">
            <div style="margin: auto;width: 50%;">
                <a class="btn default btn-xs" href="<?= Yii::app()->getBaseUrl(true) ?>/#home">Inicio</a>
                <a class="btn default btn-xs" href="<?= Yii::app()->getBaseUrl(true) ?>/#us">Nosotros</a>
                <a class="btn default btn-xs" href="<?= Yii::app()->getBaseUrl(true) ?>/#services">Servicios</a>
                <a class="btn default btn-xs" href="<?= Yii::app()->getBaseUrl(true) ?>/#clients">Clientes</a>
                <a class="btn default btn-xs" href="<?= Yii::app()->getBaseUrl(true) ?>/blog">Blog</a>
                <a class="btn default btn-xs" href="<?= Yii::app()->getBaseUrl(true) ?>/#contact">Contacto</a>
            </div>
        </div>
    </div>
    <div style="top: 0px;right: 0px;position: absolute;padding-left: 0px;background: rgba(0,53,88,1);
         background: -moz-linear-gradient(top, rgba(0,53,88,1) 0%, rgba(0,53,88,1) 47%, rgba(87,88,90,1) 49%, rgba(87,88,90,1) 100%);
         background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(0,53,88,1)), color-stop(47%, rgba(0,53,88,1)), color-stop(49%, rgba(87,88,90,1)), color-stop(100%, rgba(87,88,90,1)));
         background: -webkit-linear-gradient(top, rgba(0,53,88,1) 0%, rgba(0,53,88,1) 47%, rgba(87,88,90,1) 49%, rgba(87,88,90,1) 100%);
         background: -o-linear-gradient(top, rgba(0,53,88,1) 0%, rgba(0,53,88,1) 47%, rgba(87,88,90,1) 49%, rgba(87,88,90,1) 100%);
         background: -ms-linear-gradient(top, rgba(0,53,88,1) 0%, rgba(0,53,88,1) 47%, rgba(87,88,90,1) 49%, rgba(87,88,90,1) 100%);
         background: linear-gradient(to bottom, rgba(0,53,88,1) 0%, rgba(0,53,88,1) 47%, rgba(87,88,90,1) 49%, rgba(87,88,90,1) 100%);
         filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#003558', endColorstr='#57585a', GradientType=0 );">
        <img src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/right.png" style="transform: scaleX(-1);"/>
    </div>
</div>

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