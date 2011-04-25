<?php

class JadwalPraktekController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'JadwalPraktek'),
		));
	}

	public function actionCreate() {
		$model = new JadwalPraktek;


		if (isset($_POST['JadwalPraktek'])) {
			$model->attributes = $_POST['JadwalPraktek'];

			if ($model->save()) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}
                if(isset($_GET['iddokter']))
                {
                    $model->iddokter = $_GET['iddokter'];
                }
		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'JadwalPraktek');


		if (isset($_POST['JadwalPraktek'])) {
			$model->attributes = $_POST['JadwalPraktek'];

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
			$this->loadModel($id, 'JadwalPraktek')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('JadwalPraktek');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new JadwalPraktek('search');
		$model->unsetAttributes();

		if (isset($_GET['JadwalPraktek']))
			$model->attributes = $_GET['JadwalPraktek'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}