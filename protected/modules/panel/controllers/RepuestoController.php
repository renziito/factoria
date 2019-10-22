<?php

class RepuestoController extends Controller {

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'index' page.
     */
    public function actionCreate() {
        $model = new Repuesto;
        $post  = Yii::app()->request->getPost('Repuesto', false);

        if ($post) {
            $model->attributes = $post;
            if ($model->save()) {
                $file = CUploadedFile::getInstance($model, 'image');

                if (trim($file) != "") {
                    $data = Files::getNombreExtensionFile($file->name);
                    $name = $model->id . '_' . date('dHis');
                    $ext  = $data['extension'];

                    $urlFile = Yii::getPathofAlias('webroot.files.media.repuestos');
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
                $this->redirect(['index']);
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
        $post  = Yii::app()->request->getPost('Repuesto', false);

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

                    $urlFile = Yii::getPathofAlias('webroot.files.media.repuestos');
                    $ruta    = $urlFile . "/" . $name . "." . $ext;
                    Files::createDir($urlFile);
                    if ($file->saveAs($ruta)) {
                        $model->image = $name . "." . $ext;
                        $model->update();
                    }
                }
                $this->redirect(['index']);
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
            $this->redirect(['index']);
        }
    }

    /**
     * Manages all models.
     */
    public function actionIndex() {
        $model      = new Repuesto('search');
        $model->unsetAttributes();  // clear any default values
        $attributes = Yii::app()->request->getQuery('Repuesto', false);
        if ($attributes) {
            $model->attributes = $attributes;
        }
        $this->render('index', ['model' => $model]);
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Repuesto the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Repuesto::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'La página solicitada no existe.');
        }
        return $model;
    }

}
