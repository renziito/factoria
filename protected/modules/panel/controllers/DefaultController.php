<?php

class DefaultController extends Controller {

    public function actionIndex() {
        $model = Nosotros::model()->find('estado=TRUE');
        $post  = Yii::app()->request->getPost('Nosotros');
        if ($post) {
            $model->estado = false;
            $model->update();

            $file = CUploadedFile::getInstance($model, 'image');
            if (trim($file) == "") {
                $post['image'] = $model->image;
            }
            
            $model = new Nosotros();
            $model->attributes = $post;

            if ($model->save()) {
                if (trim($file) != "") {
                    $data = Files::getNombreExtensionFile($file->name);
                    $name = $model->id . '_' . date('dHis');
                    $ext  = $data['extension'];

                    $urlFile = Yii::getPathofAlias('webroot.files.media.nosotros');
                    $ruta    = $urlFile . "/" . $name . "." . $ext;
                    Files::createDir($urlFile);
                    if ($file->saveAs($ruta)) {
                        $model->image = $name . "." . $ext;
                        if (!$model->update()) {
                            throw new Exception("No se puede guardar la foto [logicamente]");
                        }
                    } else {
                        throw new Exception("No se puede guardar la foto [fisicamente]");
                    }
                }
            }
        }

        $this->render('index', ['model' => $model]);
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
