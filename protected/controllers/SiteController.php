<?php

class SiteController extends \Controller {

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        $sliders = [
            [
                'image'    => Yii::app()->theme->getBaseUrl() . '/bin/images/bg/bg23.jpg',
                'title'    => 'Haz tu Carro <br> Revivir',
                'button'   => 'Mira Como',
                'position' => 'right',
                'link'     => '#',
            ],
            [
                'image'    => Yii::app()->theme->getBaseUrl() . '/bin/images/bg/bg22.jpg',
                'title'    => 'El mejor <br> servicio de carros',
                'button'   => 'Saber más',
                'position' => 'left',
                'link'     => '#',
            ],
            [
                'image'    => Yii::app()->theme->getBaseUrl() . '/bin/images/bg/bg21.jpg',
                'title'    => 'El mejor taller <br> que existe',
                'button'   => 'Ver Detalles',
                'position' => 'center',
                'link'     => '#',
            ],
        ];
        $this->render('index', compact('sliders'));
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
