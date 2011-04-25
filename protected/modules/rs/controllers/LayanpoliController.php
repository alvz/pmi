<?php

class LayanpoliController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Layanpoli'),
		));
	}

	public function actionCreate() {
		$model = new Layanpoli;


		if (isset($_POST['Layanpoli'])) {
			$model->attributes = $_POST['Layanpoli'];

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
		$model = $this->loadModel($id, 'Layanpoli');


		if (isset($_POST['Layanpoli'])) {
			$model->attributes = $_POST['Layanpoli'];

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
			$this->loadModel($id, 'Layanpoli')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionAdmin() {
		$dataProvider = new CActiveDataProvider('Layanpoli');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionIndex() {
		$model = new Layanpoli('search');
		$model->unsetAttributes();

		if (isset($_GET['Layanpoli']))
			$model->attributes = $_GET['Layanpoli'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}