<?php

class SiteController extends Controller {

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        $sliders = [
            [
                'image'    => Yii::app()->theme->getBaseUrl() . '/bin/images/bg/bg23.jpg',
                'title'    => 'ADQUIERE REPUESTOS <br> originales o de segunda',
                'button'   => '',
                'position' => 'right',
                'link'     => '#',
            ],
            [
                'image'    => Yii::app()->theme->getBaseUrl() . '/bin/images/bg/bg22.jpg',
                'title'    => 'Una opción segura <br> PARA TU VEHÍCULO',
                'button'   => '',
                'position' => 'left',
                'link'     => '#',
            ],
            [
                'image'    => Yii::app()->theme->getBaseUrl() . '/bin/images/bg/bg21.jpg',
                'title'    => 'Haz tu carro REVIVIR',
                'button'   => '',
                'position' => 'center',
                'link'     => '#',
            ],
        ];

        $pictures = [
            [
                'thumb' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm1.jpg',
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-lg1.jpg'
            ],
            [
                'thumb' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm2.jpg',
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-lg2.jpg'
            ],
            [
                'thumb' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm3.jpg',
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-lg3.jpg'
            ],
            [
                'thumb' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm4.jpg',
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-lg4.jpg'
            ],
            [
                'thumb' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm5.jpg',
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-lg5.jpg'
            ],
            [
                'thumb' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm6.jpg',
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-lg6.jpg'
            ],
            [
                'thumb' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm7.jpg',
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-lg7.jpg'
            ],
            [
                'thumb' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm8.jpg',
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-lg8.jpg'
            ],
            [
                'thumb' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm9.jpg',
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-lg9.jpg'
            ],
            [
                'thumb' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm10.jpg',
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-lg10.jpg'
            ],
            [
                'thumb' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm11.jpg',
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-lg11.jpg'
            ],
            [
                'thumb' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm12.jpg',
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-lg12.jpg'
            ],
        ];

        $clientes = [
            [
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm12.jpg',
                'link'  => 'http://www.google.com.pe'
            ],
            [
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm11.jpg',
                'link'  => ''
            ],
            [
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm10.jpg',
                'link'  => 'http://www.google.com.pe'
            ],
            [
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm9.jpg',
                'link'  => ''
            ],
            [
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm1.jpg',
                'link'  => 'http://www.google.com.pe'
            ],
            [
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm12.jpg',
                'link'  => 'http://www.google.com.pe'
            ],
            [
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm11.jpg',
                'link'  => ''
            ],
            [
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm10.jpg',
                'link'  => 'http://www.google.com.pe'
            ],
            [
                'image' => Yii::app()->theme->getBaseUrl() . '/bin/images/gallery/gallery-sm9.jpg',
                'link'  => ''
            ]
        ];

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


        $this->render('index', compact('sliders', 'pictures', 'clientes', 'autos'));
    }

    public function actionModal() {
        echo $this->renderPartial('pages/_modal', true);
    }

    public function actionParent() {
        echo '<div class="modal fade" id="BSParentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog  modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                    </div>
                  </div>
                </div>
              </div>';
    }

    public function actionContacto() {
        $this->render('contacto');
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
