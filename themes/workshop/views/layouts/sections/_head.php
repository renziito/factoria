<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta charset="utf-8" />

<title><?php echo CHtml::encode($this->pageTitle); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="Partnership - Pagina de Administracion" name="description" />
<meta name="robots" content="index,follow">
<meta content="" name="author" />

<link rel="shortcut icon" href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/favicon.ico">
<link rel="icon" type="image/x-icon" href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/favicon.ico" />

<!-- Stylesheet -->
<link href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/css/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/css/responsive.css" rel="stylesheet" type="text/css">

<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="<?= Yii::app()->theme->getBaseUrl() ?>/bin/css/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/js/jquery-2.2.4.min.js"></script>
<script src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/js/jquery-ui.min.js"></script>
<script src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/js/jquery.themepunch.revolution.min.js"></script>

<script>
    $(document).ready(function () {
        var Global = {
            module: '<?= ($this->module) ? $this->module->id : '' ?>',
            controller: '<?= $this->id ?>',
            action: '<?= $this->action->id ?>',
            absoluteUrl: '<?= Yii::app()->getBaseUrl(true) ?>',
            baseUrl: '<?= Yii::app()->baseUrl ?>',
        }

        $.ajax({
            url: Global.baseUrl + '/' + Global.controller + '/parent',
            success: function (data) {
                $('body').append(data);
            },
            dataType: 'html'
        });
    });
</script>