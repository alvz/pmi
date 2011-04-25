<?php

class KategoriTindakanController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'KategoriTindakan'),
		));
	}

	public function actionCreate() {
		$model = new KategoriTindakan;


		if (isset($_POST['KategoriTindakan'])) {
			$model->attributes = $_POST['KategoriTindakan'];

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
		$model = $this->loadModel($id, 'KategoriTindakan');


		if (isset($_POST['KategoriTindakan'])) {
			$model->attributes = $_POST['KategoriTindakan'];

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
			$this->loadModel($id, 'KategoriTindakan')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('KategoriTindakan');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new KategoriTindakan('search');
		$model->unsetAttributes();

		if (isset($_GET['KategoriTindakan']))
			$model->attributes = $_GET['KategoriTindakan'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}