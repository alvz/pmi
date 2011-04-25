<?php

class RefperuntukanController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Refperuntukan'),
		));
	}

	public function actionCreate() {
		$model = new Refperuntukan;


		if (isset($_POST['Refperuntukan'])) {
			$model->attributes = $_POST['Refperuntukan'];

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
		$model = $this->loadModel($id, 'Refperuntukan');


		if (isset($_POST['Refperuntukan'])) {
			$model->attributes = $_POST['Refperuntukan'];

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
			$this->loadModel($id, 'Refperuntukan')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Refperuntukan');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Refperuntukan('search');
		$model->unsetAttributes();

		if (isset($_GET['Refperuntukan']))
			$model->attributes = $_GET['Refperuntukan'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}