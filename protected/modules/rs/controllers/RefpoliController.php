<?php

class RefpoliController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Refpoli'),
		));
	}

	public function actionCreate() {
		$model = new Refpoli;


		if (isset($_POST['Refpoli'])) {
			$model->attributes = $_POST['Refpoli'];

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
		$model = $this->loadModel($id, 'Refpoli');


		if (isset($_POST['Refpoli'])) {
			$model->attributes = $_POST['Refpoli'];

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
			$this->loadModel($id, 'Refpoli')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Refpoli');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Refpoli('search');
		$model->unsetAttributes();

		if (isset($_GET['Refpoli']))
			$model->attributes = $_GET['Refpoli'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}