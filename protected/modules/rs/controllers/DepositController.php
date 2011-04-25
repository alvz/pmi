<?php

class DepositController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Deposit'),
		));
	}

	public function actionCreate() {
		$model = new Deposit;


		if (isset($_POST['Deposit'])) {
			$model->attributes = $_POST['Deposit'];

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
		$model = $this->loadModel($id, 'Deposit');


		if (isset($_POST['Deposit'])) {
			$model->attributes = $_POST['Deposit'];

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
			$this->loadModel($id, 'Deposit')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Deposit');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Deposit('search');
		$model->unsetAttributes();

		if (isset($_GET['Deposit']))
			$model->attributes = $_GET['Deposit'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}