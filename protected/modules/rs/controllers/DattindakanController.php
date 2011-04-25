<?php

class DattindakanController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Dattindakan'),
		));
	}

	public function actionCreate() {
		$model = new Dattindakan;


		if (isset($_POST['Dattindakan'])) {
			$model->attributes = $_POST['Dattindakan'];

			if ($model->save()) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect(array('datregister/update', 'id' => $model->idreg));
			}
		}

                if(isset($_GET['idregister']))
                {
                    $model->idreg = $_GET['idregister'];
                }
		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Dattindakan');


		if (isset($_POST['Dattindakan'])) {
			$model->attributes = $_POST['Dattindakan'];

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
			$this->loadModel($id, 'Dattindakan')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Dattindakan');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Dattindakan('search');
		$model->unsetAttributes();

		if (isset($_GET['Dattindakan']))
			$model->attributes = $_GET['Dattindakan'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}