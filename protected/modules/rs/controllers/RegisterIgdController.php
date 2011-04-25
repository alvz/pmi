<?php

class RegisterIgdController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'RegisterIgd'),
		));
	}

	public function actionCreate() {
		$model = new RegisterIgd;


		if (isset($_POST['RegisterIgd'])) {
			$model->attributes = $_POST['RegisterIgd'];

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
		$model = $this->loadModel($id, 'RegisterIgd');


		if (isset($_POST['RegisterIgd'])) {
			$model->attributes = $_POST['RegisterIgd'];

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

        public function actionKeluarIgd($id) {
		$model = $this->loadModel($id, 'RegisterIgd');


		if (isset($_POST['RegisterIgd'])) {
			$model->attributes = $_POST['RegisterIgd'];

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('keluarIgd', array(
				'model' => $model,
				));
	}
	public function actionDelete($id) {
		if (Yii::app()->request->isPostRequest) {
			$this->loadModel($id, 'RegisterIgd')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionAdmin() {
		$dataProvider = new CActiveDataProvider('RegisterIgd');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionIndex() {
		$model = new RegisterIgd('search');
		$model->unsetAttributes();

		if (isset($_GET['RegisterIgd']))
			$model->attributes = $_GET['RegisterIgd'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

        public function actionBilling($id) {
	$this->render('viewbilling', array(
			'model' => $this->loadModel($id, 'RegisterIgd'),
		));
	}

}