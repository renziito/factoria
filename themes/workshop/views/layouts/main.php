<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <?php $this->renderPartial('//layouts/sections/_head'); ?>
    </head>
    <body class="">
        <div id="wrapper" class="clearfix">
            <!-- preloader -->
            <?php $this->renderPartial('//layouts/sections/_preloader'); ?>

            <!-- Header -->
            <?php $this->renderPartial('//layouts/sections/_header'); ?>


            <!-- Start main-content -->
            <div class="main-content">
                <?= $content ?>

                <!-- Gallery  -->
                <section>
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-7 pb-sm-20">
                                    <h3 class="line-bottom font-20 text-theme-colored text-uppercase mt-0">Work Gallery</h3>

                                    <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item">
                                            <div class="thumb">
                                                <img alt="project" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-sm1.jpg" class="img-fullwidth">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-lg1.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item">
                                            <div class="thumb">
                                                <img alt="project" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-sm2.jpg" class="img-fullwidth">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-lg2.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item">
                                            <div class="thumb">
                                                <img alt="project" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-sm3.jpg" class="img-fullwidth">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-lg3.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item">
                                            <div class="thumb">
                                                <img alt="project" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-sm4.jpg" class="img-fullwidth">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-lg4.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item">
                                            <div class="thumb">
                                                <img alt="project" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-sm5.jpg" class="img-fullwidth">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-lg5.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item">
                                            <div class="thumb">
                                                <img alt="project" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-sm6.jpg" class="img-fullwidth">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-lg6.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item">
                                            <div class="thumb">
                                                <img alt="project" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-sm7.jpg" class="img-fullwidth">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-lg7.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item">
                                            <div class="thumb">
                                                <img alt="project" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-sm8.jpg" class="img-fullwidth">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-lg8.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item">
                                            <div class="thumb">
                                                <img alt="project" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-sm9.jpg" class="img-fullwidth">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-lg9.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item">
                                            <div class="thumb">
                                                <img alt="project" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-sm10.jpg" class="img-fullwidth">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-lg10.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item">
                                            <div class="thumb">
                                                <img alt="project" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-sm11.jpg" class="img-fullwidth">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-lg11.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item">
                                            <div class="thumb">
                                                <img alt="project" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-sm12.jpg" class="img-fullwidth">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/gallery/gallery-lg12.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-5 pb-sm-20">
                                    <h3 class="line-bottom font-20 text-theme-colored text-uppercase mt-0">Find Our Location</h3>
                                    <!-- Google Map HTML Codes --><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5456.163483134849!2d144.95177475051227!3d-37.81589041361766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121+King+St%2C+Melbourne+VIC+3000%2C+Australia!5e0!3m2!1sen!2sbd!4v1556130803137!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- end main-content -->
            </div>

            <!-- Footer -->
            <?php $this->renderPartial('//layouts/sections/_footer'); ?>

            <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- end wrapper -->

        <!-- Footer Scripts -->
        <!-- JS | Custom script for all pages -->
        <script src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/js/custom.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/js/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/js/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/js/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/js/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/js/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/js/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/js/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/js/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/js/revolution.extension.video.min.js"></script>
    </body>
</html>