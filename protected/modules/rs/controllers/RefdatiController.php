<?php

class RefdatiController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Refdati'),
		));
	}

	public function actionCreate() {
		$model = new Refdati;

		$this->performAjaxValidation($model, 'refdati-form');

		if (isset($_POST['Refdati'])) {
			$model->attributes = $_POST['Refdati'];

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
		$model = $this->loadModel($id, 'Refdati');

		$this->performAjaxValidation($model, 'refdati-form');

		if (isset($_POST['Refdati'])) {
			$model->attributes = $_POST['Refdati'];

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
			$this->loadModel($id, 'Refdati')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Refdati');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Refdati('search');
		$model->unsetAttributes();

		if (isset($_GET['Refdati']))
			$model->attributes = $_GET['Refdati'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}