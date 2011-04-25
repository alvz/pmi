<?php

class Icd10EnController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Icd10En'),
		));
	}

	public function actionCreate() {
		$model = new Icd10En;


		if (isset($_POST['Icd10En'])) {
			$model->attributes = $_POST['Icd10En'];

			if ($model->save()) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->diagnosis_code));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Icd10En');


		if (isset($_POST['Icd10En'])) {
			$model->attributes = $_POST['Icd10En'];

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->diagnosis_code));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->request->isPostRequest) {
			$this->loadModel($id, 'Icd10En')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Icd10En');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Icd10En('search');
		$model->unsetAttributes();

		if (isset($_GET['Icd10En']))
			$model->attributes = $_GET['Icd10En'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}