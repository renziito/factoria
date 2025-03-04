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
            <!-- end main-content -->
        </div>

        <!-- Footer -->
        <?php $this->renderPartial('//layouts/sections/_footer'); ?>

        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->

    <div class="modal fade" id="mensajeAuto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

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

    <style>
        #instafeed {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            grid-column-gap: 0.5rem;
            grid-row-gap: 0.5rem;
            max-width: 64rem;
            margin: auto;
        }

        #instafeed a {
            display: block;
        }

        #instafeed img {
            display: block;
            max-height: 124px;
        }
    </style>
    <script>
        window.onload = function() {
            setTimeout(function() {
                document.querySelectorAll("a[href='https://elfsight.com/instagram-feed-instashow/?utm_source=websites&utm_medium=clients&utm_content=instashow&utm_term=localhost&utm_campaign=free-widget']").forEach(function(e) {
                    e.parentElement.removeChild(e);
                });
            },  2000);
        }
    </script>
    <script>
        $('.btn-interesa').on('click', function(e) {
            e.preventDefault();
            var text = $(this).data('text');
            $('#mensajeAuto .modal-content .modal-body').html(text);
            $('#mensajeAuto').modal({
                backdrop: 'static',
                keyboard: false
            })
        });
    </script>
</body>

</html>