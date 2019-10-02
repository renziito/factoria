<style>
    .default {
        border-color: #57585a;
        color: white;
    }

    .default:hover {
        background: #e7e7e7;
    }
    @media only screen and (max-width: 767px){
        .main-header .header-lower {
            background-color: #005e9c;
        }
    }

    @media only screen and (max-width: 767px){ 
        .main-menu .navbar-collapse > .navigation > li > a, 
        .main-menu .navbar-collapse > .navigation > li > ul > li > a,
        .main-menu .navbar-collapse > .navigation > li > ul > li > ul > li > a {
            background: #57585a;
        }
    }
    @media only screen and (max-width: 767px){
        .main-menu .navbar-header .navbar-toggler {
            background-color: #57585a;
        }
    }

    .main-menu .navigation > li:hover {
        background-color: #005e9c;
    }
</style>

<header class="main-header">

    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="top-left">
                    <ul class="clearfix">
                        <li><i class="fa fa-whatsapp"></i> 993 616 759</li>
                        <li><i class="fa fa-envelope"></i> bpenaranda@factoriapenaranda.com</li>
                    </ul>
                </div>
                <div class="top-right clearfix">
                    <ul class="social-icon-one clearfix">
                        <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                    <div class="call-btn">
                        <a class="btn btn-dark btn-flat bg-theme-color-2
                           text-white font-14 bs-modal-ajax-load mt-0"
                           style="padding: 14px 30px;"
                           data-toggle="modal" data-target="#BSParentModal"
                           href="<?= $this->createUrl('modal') ?>">Solicita Presupuesto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left logo-outer">
                    <div class="logo">
                        <a href="<?= Yii::app()->getBaseUrl(true) ?>">
                            <img src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/logo.jpg" 
                                 style="height: 120px"
                                 alt="" title="">
                        </a>
                    </div>
                </div>
                <div class="pull-right upper-right clearfix">
                    <!--Info Box-->
                    <div class="upper-column info-box" style="margin-top: 1.5%;">
                        <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                        <ul>
                            <li><strong>SAN CARLOS 660,</strong></li>
                            <li>SURQUILLO</li>
                        </ul>

                    </div>
                    <!--Info Box-->
                    <div class="upper-column info-box" style="margin-top: 1.5%;">
                        <div class="icon-box"><i class="fa fa-clock-o"></i></div>
                        <ul>
                            <li><strong>LUNES A VIERNES</strong></li>
                            <li>8:15AM A 5:45PM</li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box" style="margin-top: 1.5%;">
                        <div class="icon-box"></div>
                        <ul>
                            <li><strong>SÁBADOS</strong></li>
                            <li>8:00AM A 12:00PM</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Header Lower-->
    <div class="header-lower">

        <div class="auto-container">
            <div class="nav-outer clearfix">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" 
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="active"><a href="<?= Yii::app()->getBaseUrl(true) ?>/#home">Inicio</a></li>
                            <li><a href="<?= Yii::app()->getBaseUrl(true) ?>/#us">Nosotros</a></li>
                            <li><a href="<?= Yii::app()->getBaseUrl(true) ?>/#services">Servicios</a></li>
                            <li><a href="<?= Yii::app()->getBaseUrl(true) ?>/#clients">Clientes</a></li>
                            <li><a href="<?= Yii::app()->getBaseUrl(true) ?>/autos">Venta de Autos</a></li>
                            <li><a href="<?= Yii::app()->controller->createUrl('contacto') ?>">Contacto</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->
            </div>
        </div>
    </div>
    <!--End Header Lower-->
</header>