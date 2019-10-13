<?php

class SiteController extends Controller {

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        $sliders   = Utils::getAllasArray(Slider::model()->findAll('estado= true'));
        $clientes  = Utils::getAllasArray(Clientes::model()->findAll('estado= true'));
        $marcas    = Utils::getAllasArray(Marcas::model()->findAll('estado = true'));
        $servicios = Utils::getAllasArray(Servicios::model()->findAll('estado=true'));
        $nosotros  = Nosotros::model()->find('estado = TRUE');
        $autos     = Utils::getAllasArray(Auto::model()->findAll('estado = TRUE'));
        $this->render('index', compact('sliders', 'clientes', 'autos', 'marcas', 'servicios', 'nosotros'));
    }

    public function actionServicios() {
        $servicios = Utils::getAllasArray(Servicios::model()->findAll('estado=true'));
        $this->render('servicios', compact('servicios'));
    }

    public function actionAutos() {
        $autos = Auto::model()->findAll('estado = TRUE');
        $this->render('autos', compact('autos'));
    }

    public function actionContacto() {
        $this->render('contacto');
    }

    public function actionModal() {
        echo $this->renderPartial('pages/_modal', true);
    }

    public function actionParent() {
        echo $this->renderPartial('pages/_modalParent', true);
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
            } else {
                $this->render('error', $error);
            }
        }
    }

}
