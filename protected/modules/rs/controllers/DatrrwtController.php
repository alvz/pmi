<?php

class DatrrwtController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Datrrwt'),
		));
	}

	public function actionCreate() {
		$model = new Datrrwt;


		if (isset($_POST['Datrrwt'])) {
			$model->attributes = $_POST['Datrrwt'];

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
		$model = $this->loadModel($id, 'Datrrwt');


		if (isset($_POST['Datrrwt'])) {
			$model->attributes = $_POST['Datrrwt'];

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
			$this->loadModel($id, 'Datrrwt')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionAdmin() {
		$dataProvider = new CActiveDataProvider('Datrrwt');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionIndex() {
		$model = new Datrrwt('search');
		$model->unsetAttributes();

		if (isset($_GET['Datrrwt']))
			$model->attributes = $_GET['Datrrwt'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}