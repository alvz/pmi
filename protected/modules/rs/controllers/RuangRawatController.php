<?php

class RuangRawatController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'RuangRawat'),
		));
	}

	public function actionCreate() {
		$model = new RuangRawat;


		if (isset($_POST['RuangRawat'])) {
			$model->attributes = $_POST['RuangRawat'];

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
		$model = $this->loadModel($id, 'RuangRawat');


		if (isset($_POST['RuangRawat'])) {
			$model->attributes = $_POST['RuangRawat'];

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
			$this->loadModel($id, 'RuangRawat')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionAdmin() {
		$dataProvider = new CActiveDataProvider('RuangRawat');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionIndex() {
		$model = new RuangRawat('search');
		$model->unsetAttributes();

		if (isset($_GET['RuangRawat']))
			$model->attributes = $_GET['RuangRawat'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}