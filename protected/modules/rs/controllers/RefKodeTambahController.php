<?php

class RefKodeTambahController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'RefKodeTambah'),
		));
	}

	public function actionCreate() {
		$model = new RefKodeTambah;


		if (isset($_POST['RefKodeTambah'])) {
			$model->attributes = $_POST['RefKodeTambah'];

			if ($model->save()) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'RefKodeTambah');


		if (isset($_POST['RefKodeTambah'])) {
			$model->attributes = $_POST['RefKodeTambah'];

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->request->isPostRequest) {
			$this->loadModel($id, 'RefKodeTambah')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('RefKodeTambah');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new RefKodeTambah('search');
		$model->unsetAttributes();

		if (isset($_GET['RefKodeTambah']))
			$model->attributes = $_GET['RefKodeTambah'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}