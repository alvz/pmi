<?php

class RefruangController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Refruang'),
		));
	}

	public function actionCreate() {
		$model = new Refruang;


		if (isset($_POST['Refruang'])) {
			$model->attributes = $_POST['Refruang'];

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
		$model = $this->loadModel($id, 'Refruang');


		if (isset($_POST['Refruang'])) {
			$model->attributes = $_POST['Refruang'];

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
			$this->loadModel($id, 'Refruang')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Refruang');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Refruang('search');
		$model->unsetAttributes();

		if (isset($_GET['Refruang']))
			$model->attributes = $_GET['Refruang'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}