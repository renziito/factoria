<nav class="page-sidebar bg-partnership" data-pages="sidebar">
    <div class="sidebar-header bg-partnership m-b-30" style="height: 60px;">
        <img src="<?= Yii::app()->theme->getBaseUrl() ?>/assets/images/logo-factoria-blancotransparente.png" alt="logo"
             class="brand  hidden-lg hidden-md"  width="125px" 
             data-src="<?= Yii::app()->theme->getBaseUrl() ?>/assets/images/logo-factoria-blancotransparente.png" 
             data-src-retina="<?= Yii::app()->theme->getBaseUrl() ?>/assets/images/logo-factoria-blancotransparente.png" />
    </div>
    <div class="sidebar-menu">
        <ul class="menu-items">
            <li class="m-t-50 ">
                <a href="<?= Yii::app()->createUrl('panel') ?>" class="detailed">
                    <span class="title">Nosotros</span>
                </a>
            </li>
            <li>
                <a href="<?= Yii::app()->createUrl('panel/usuario') ?>" class="detailed"
                   style="width: 100%">
                    <span class="title">Usuarios</span>
                </a>
            </li>
            <li>
                <a href="<?= Yii::app()->createUrl('panel/slider') ?>" class="detailed"
                   style="width: 100%">
                    <span class="title">Sliders</span>
                </a>
            </li>
            <li>
                <a href="<?= Yii::app()->createUrl('panel/servicios') ?>" class="detailed"
                   style="width: 100%">
                    <span class="title">Servicios</span>
                </a>
            </li>
            <li>
                <a href="<?= Yii::app()->createUrl('panel/clientes') ?>" class="detailed"
                   style="width: 100%">
                    <span class="title">Clientes</span>
                </a>
            </li>
            <li>
                <a href="<?= Yii::app()->createUrl('panel/marcas') ?>" class="detailed"
                   style="width: 100%">
                    <span class="title">Marcas</span>
                </a>
            </li>
            <li>
                <a href="<?= Yii::app()->createUrl('panel/auto') ?>" class="detailed"
                   style="width: 100%">
                    <span class="title">Venta de Autos</span>
                </a>
            </li><br><br>
            <li>
                <a href="<?= Yii::app()->createUrl('logout') ?>" class="detailed"
                   style="width: 100%">
                    <span class="title">Cerrar Sesión</span>
                </a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</nav>