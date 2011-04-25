<?php

class ReftindakanController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Reftindakan'),
		));
	}

	public function actionCreate() {
		$model = new Reftindakan;


		if (isset($_POST['Reftindakan'])) {
			$model->attributes = $_POST['Reftindakan'];

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
		$model = $this->loadModel($id, 'Reftindakan');


		if (isset($_POST['Reftindakan'])) {
			$model->attributes = $_POST['Reftindakan'];

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
			$this->loadModel($id, 'Reftindakan')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Reftindakan');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Reftindakan('search');
		$model->unsetAttributes();

		if (isset($_GET['Reftindakan']))
			$model->attributes = $_GET['Reftindakan'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}