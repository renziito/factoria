<nav class="page-sidebar bg-partnership" data-pages="sidebar">
    <div class="sidebar-header bg-partnership" style="height: 60px;">
        <img src="<?= Yii::app()->theme->getBaseUrl() ?>/assets/images/logo-wide.png" alt="logo"
             class="brand  hidden-lg hidden-md"  width="200px" 
             data-src="<?= Yii::app()->theme->getBaseUrl() ?>/assets/images/logo-wide.png" 
             data-src-retina="<?= Yii::app()->theme->getBaseUrl() ?>/assets/images/logo-wide.png" />
    </div>
    <div class="sidebar-menu">
        <ul class="menu-items">
            <li class="m-t-30 ">
                <a href="<?= Yii::app()->createUrl('panel') ?>" class="detailed">
                    <span class="title">Inicio</span>
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
                <a href="<?= Yii::app()->createUrl('panel/auto') ?>" class="detailed"
                   style="width: 100%">
                    <span class="title">Venta de Autos</span>
                </a>
            </li>
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