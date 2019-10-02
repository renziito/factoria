<?php

class DefaultController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionLogin() {
        $this->layout = '//layouts/login';
        $model        = new LoginForm;

        if (!Yii::app()->user->isGuest) {
            $this->redirect(Yii::app()->createUrl('panel'));
        }

        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];

            if ($model->validate() && $model->login()) {
                $next = Yii::app()->request->getParam('next', false);
                if (!$next) {
                    $next = Yii::app()->createUrl('panel');
                } else {
                    $next = (strpos($next, '/') == 0 ? substr($next, 1) : $next);
                }
                $this->redirect($next);
            }
        }
        $this->render('login', array('model' => $model));
    }

}
