<?php

class PanelModule extends CWebModule {

    public function init() {
        $this->setImport(array(
            'panel.models.*',
            'panel.components.*',
        ));
    }

    public function beforeControllerAction($controller, $action) {
        if (parent::beforeControllerAction($controller, $action)) {
            Yii::app()->theme = "site";
            if (Yii::app()->user->isGuest && $action->id != 'login') {
                $url   = str_replace(Yii::app()->baseUrl, '', Yii::app()->request->url);
                $route = Yii::app()->createUrl('login?next=' . $url);
                Yii::app()->controller->redirect($route);
            }

            return true;
        } else
            return false;
    }

}
