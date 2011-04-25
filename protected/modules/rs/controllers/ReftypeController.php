<?php

class ReftypeController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Reftype'),
		));
	}

	public function actionCreate() {
		$model = new Reftype;


		if (isset($_POST['Reftype'])) {
			$model->attributes = $_POST['Reftype'];

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
		$model = $this->loadModel($id, 'Reftype');


		if (isset($_POST['Reftype'])) {
			$model->attributes = $_POST['Reftype'];

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
			$this->loadModel($id, 'Reftype')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Reftype');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Reftype('search');
		$model->unsetAttributes();

		if (isset($_GET['Reftype']))
			$model->attributes = $_GET['Reftype'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}