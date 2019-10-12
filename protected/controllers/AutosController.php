<?php

class AutosController extends Controller {

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        $autos = Auto::model()->findAll('estado = TRUE');
        $this->render('index', compact('autos'));
    }

}
