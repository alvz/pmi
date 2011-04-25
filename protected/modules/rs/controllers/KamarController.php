<?php

class KamarController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Kamar'),
		));
	}

	public function actionCreate() {
		$model = new Kamar;


		if (isset($_POST['Kamar'])) {
			$model->attributes = $_POST['Kamar'];

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
		$model = $this->loadModel($id, 'Kamar');


		if (isset($_POST['Kamar'])) {
			$model->attributes = $_POST['Kamar'];

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
			$this->loadModel($id, 'Kamar')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Kamar');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Kamar('search');
		$model->unsetAttributes();

		if (isset($_GET['Kamar']))
			$model->attributes = $_GET['Kamar'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}