<?php

class RefkelasrawatController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Refkelasrawat'),
		));
	}

	public function actionCreate() {
		$model = new Refkelasrawat;


		if (isset($_POST['Refkelasrawat'])) {
			$model->attributes = $_POST['Refkelasrawat'];

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
		$model = $this->loadModel($id, 'Refkelasrawat');


		if (isset($_POST['Refkelasrawat'])) {
			$model->attributes = $_POST['Refkelasrawat'];

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
			$this->loadModel($id, 'Refkelasrawat')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Refkelasrawat');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Refkelasrawat('search');
		$model->unsetAttributes();

		if (isset($_GET['Refkelasrawat']))
			$model->attributes = $_GET['Refkelasrawat'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}