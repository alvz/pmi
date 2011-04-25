<?php

class ReftanggunganController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Reftanggungan'),
		));
	}

	public function actionCreate() {
		$model = new Reftanggungan;


		if (isset($_POST['Reftanggungan'])) {
			$model->attributes = $_POST['Reftanggungan'];

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
		$model = $this->loadModel($id, 'Reftanggungan');


		if (isset($_POST['Reftanggungan'])) {
			$model->attributes = $_POST['Reftanggungan'];

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
			$this->loadModel($id, 'Reftanggungan')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Reftanggungan');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Reftanggungan('search');
		$model->unsetAttributes();

		if (isset($_GET['Reftanggungan']))
			$model->attributes = $_GET['Reftanggungan'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}