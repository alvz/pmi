<?php

class RefpembayaranController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Refpembayaran'),
		));
	}

	public function actionCreate() {
		$model = new Refpembayaran;


		if (isset($_POST['Refpembayaran'])) {
			$model->attributes = $_POST['Refpembayaran'];

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
		$model = $this->loadModel($id, 'Refpembayaran');


		if (isset($_POST['Refpembayaran'])) {
			$model->attributes = $_POST['Refpembayaran'];

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
			$this->loadModel($id, 'Refpembayaran')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Refpembayaran');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Refpembayaran('search');
		$model->unsetAttributes();

		if (isset($_GET['Refpembayaran']))
			$model->attributes = $_GET['Refpembayaran'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}