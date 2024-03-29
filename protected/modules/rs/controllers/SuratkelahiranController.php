<?php

class SuratkelahiranController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Suratkelahiran'),
		));
	}

	public function actionCreate() {
		$model = new Suratkelahiran;


		if (isset($_POST['Suratkelahiran'])) {
			$model->attributes = $_POST['Suratkelahiran'];

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
		$model = $this->loadModel($id, 'Suratkelahiran');


		if (isset($_POST['Suratkelahiran'])) {
			$model->attributes = $_POST['Suratkelahiran'];

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
			$this->loadModel($id, 'Suratkelahiran')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionAdmin() {
		$dataProvider = new CActiveDataProvider('Suratkelahiran');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionIndex() {
		$model = new Suratkelahiran('search');
		$model->unsetAttributes();

		if (isset($_GET['Suratkelahiran']))
			$model->attributes = $_GET['Suratkelahiran'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}