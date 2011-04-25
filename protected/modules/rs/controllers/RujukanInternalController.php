<?php

class RujukanInternalController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'RujukanInternal'),
		));
	}

	public function actionCreate() {
		$model = new RujukanInternal;


		if (isset($_POST['RujukanInternal'])) {
			$model->attributes = $_POST['RujukanInternal'];

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
		$model = $this->loadModel($id, 'RujukanInternal');


		if (isset($_POST['RujukanInternal'])) {
			$model->attributes = $_POST['RujukanInternal'];

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
			$this->loadModel($id, 'RujukanInternal')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionAdmin() {
		$dataProvider = new CActiveDataProvider('RujukanInternal');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionIndex() {
		$model = new RujukanInternal('search');
		$model->unsetAttributes();

		if (isset($_GET['RujukanInternal']))
			$model->attributes = $_GET['RujukanInternal'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}