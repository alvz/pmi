<?php

class RefkeluarController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Refkeluar'),
		));
	}

	public function actionCreate() {
		$model = new Refkeluar;


		if (isset($_POST['Refkeluar'])) {
			$model->attributes = $_POST['Refkeluar'];

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
		$model = $this->loadModel($id, 'Refkeluar');


		if (isset($_POST['Refkeluar'])) {
			$model->attributes = $_POST['Refkeluar'];

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
			$this->loadModel($id, 'Refkeluar')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Refkeluar');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Refkeluar('search');
		$model->unsetAttributes();

		if (isset($_GET['Refkeluar']))
			$model->attributes = $_GET['Refkeluar'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}