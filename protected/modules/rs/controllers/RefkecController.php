<?php

class RefkecController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Refkec'),
		));
	}

	public function actionCreate() {
		$model = new Refkec;


		if (isset($_POST['Refkec'])) {
			$model->attributes = $_POST['Refkec'];

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
		$model = $this->loadModel($id, 'Refkec');


		if (isset($_POST['Refkec'])) {
			$model->attributes = $_POST['Refkec'];

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
			$this->loadModel($id, 'Refkec')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Refkec');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Refkec('search');
		$model->unsetAttributes();

		if (isset($_GET['Refkec']))
			$model->attributes = $_GET['Refkec'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}