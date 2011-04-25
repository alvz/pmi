<?php

class RefobatController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Refobat'),
		));
	}

	public function actionCreate() {
		$model = new Refobat;


		if (isset($_POST['Refobat'])) {
			$model->attributes = $_POST['Refobat'];

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
		$model = $this->loadModel($id, 'Refobat');


		if (isset($_POST['Refobat'])) {
			$model->attributes = $_POST['Refobat'];

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
			$this->loadModel($id, 'Refobat')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionAdmin() {
		$dataProvider = new CActiveDataProvider('Refobat');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionIndex() {
		$model = new Refobat('search');
		$model->unsetAttributes();

		if (isset($_GET['Refobat']))
			$model->attributes = $_GET['Refobat'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}