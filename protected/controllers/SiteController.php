<?php

class SiteController extends Controller
{

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        $sliders= Utils::getAllasArray(Slider::model()->findAll('estado= true'));
        $clientes= Utils::getAllasArray(Clientes::model()->findAll('estado= true'));
        $autos = [
            [
                'image'  => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-lg5.jpg',
                'titulo' => 'KIA ROJO MODELO 2018',
                'anio'   => '2018',
                'color'  => 'rojo',
                'km'     => '2000'
            ],
            [
                'image'  => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-lg6.jpg',
                'titulo' => 'KIA ROJO MODELO 2018',
                'anio'   => '2018',
                'color'  => 'rojo',
                'km'     => '2000'
            ]
        ];


        $this->render('index', compact('sliders', 'clientes', 'autos'));
    }

    public function actionModal()
    {
        echo $this->renderPartial('pages/_modal', true);
    }

    public function actionParent()
    {
        echo '<div class="modal fade" id="BSParentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog  modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                    </div>
                  </div>
                </div>
              </div>';
    }

    public function actionContacto()
    {
        $this->render('contacto');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
            } else {
                $this->render('error', $error);
            }
        }
    }
}
