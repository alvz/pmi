<?php

class LabrecController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Labrec'),
		));
	}

	public function actionCreate() {
		$model = new Labrec;


		if (isset($_POST['Labrec'])) {
			$model->attributes = $_POST['Labrec'];

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
		$model = $this->loadModel($id, 'Labrec');


		if (isset($_POST['Labrec'])) {
			$model->attributes = $_POST['Labrec'];

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
			$this->loadModel($id, 'Labrec')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Labrec');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Labrec('search');
		$model->unsetAttributes();

		if (isset($_GET['Labrec']))
			$model->attributes = $_GET['Labrec'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}