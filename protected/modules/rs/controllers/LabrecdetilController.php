<?php

class LabrecdetilController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Labrecdetil'),
		));
	}

	public function actionCreate() {
		$model = new Labrecdetil;


		if (isset($_POST['Labrecdetil'])) {
			$model->attributes = $_POST['Labrecdetil'];

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
		$model = $this->loadModel($id, 'Labrecdetil');


		if (isset($_POST['Labrecdetil'])) {
			$model->attributes = $_POST['Labrecdetil'];

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
			$this->loadModel($id, 'Labrecdetil')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Labrecdetil');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Labrecdetil('search');
		$model->unsetAttributes();

		if (isset($_GET['Labrecdetil']))
			$model->attributes = $_GET['Labrecdetil'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}