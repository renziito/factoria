<?php

class FotoController extends Controller {

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'index' page.
     */
    public function actionCreate($id) {
        $model          = new AutoFoto;
        $model->auto_id = $id;
        $post           = Yii::app()->request->getPost('AutoFoto', false);

        if ($post) {
            $model->attributes = $post;
            if ($model->save()) {
                if ($model->save()) {
                    $file = CUploadedFile::getInstance($model, 'image');

                    if (trim($file) != "") {
                        $data = Files::getNombreExtensionFile($file->name);
                        $name = $model->id . '_' . date('dHis');
                        $ext  = $data['extension'];

                        $urlFile = Yii::getPathofAlias('webroot.files.media.autos');
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
                    $route = Yii::app()->createUrl('panel/foto/index/id/' . $model->auto_id);
                    $this->redirect($route);
                }
            }
        }

        $this->render('create', ['model' => $model]);
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'index' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $post  = Yii::app()->request->getPost('AutoFoto', false);

        if ($post) {
            $file = CUploadedFile::getInstance($model, 'image');
            if (trim($file) == "") {
                $post['image'] = $model->image;
            }
            $model->attributes = $post;
            if ($model->save()) {
                if (trim($file) != "") {
                    $data = Files::getNombreExtensionFile($file->name);
                    $name = $model->id . '_' . date('dHis');
                    $ext  = $data['extension'];

                    $urlFile = Yii::getPathofAlias('webroot.files.media.autos');
                    $ruta    = $urlFile . "/" . $name . "." . $ext;
                    Files::createDir($urlFile);
                    if ($file->saveAs($ruta)) {
                        $model->image = $name . "." . $ext;
                        $model->update();
                    }
                }
                $route = Yii::app()->createUrl('panel/foto/index/id/' . $model->auto_id);
                $this->redirect($route);
            }
        }

        $this->render('update', ['model' => $model]);
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $model         = $this->loadModel($id);
        $model->estado = 0;

        if ($model->save()) {
            $route = Yii::app()->createUrl('panel/foto/index/id/' . $model->auto_id);
            $this->redirect($route);
        }
    }

    /**
     * Manages all models.
     */
    public function actionIndex($id) {
        $model      = new AutoFoto('search');
        $model->unsetAttributes();  // clear any default values
        $attributes = Yii::app()->request->getQuery('AutoFoto', false);
        if ($attributes) {
            $model->attributes = $attributes;
        }
        $model->auto_id = $id;
        $this->render('index', ['model' => $model]);
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return AutoFoto the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = AutoFoto::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'La página solicitada no existe.');
        }
        return $model;
    }

}
