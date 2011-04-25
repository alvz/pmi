<?php

class DattarifController extends GxController {

      public function actions()
  {
    return array(
      'aclist'=>array(
        'class'=>'application.extensions.EAutoCompleteAction',
        'model'=>'Dattarif', //My model's class name
        'label'=>'tindakan', //The attribute of the model i will search
        'value'=>'tindakan',
        'id'=>'id'
      ),
    );
  }
	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Dattarif'),
		));
	}

	public function actionCreate() {
		$model = new Dattarif;


		if (isset($_POST['Dattarif'])) {
			$model->attributes = $_POST['Dattarif'];

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
		$model = $this->loadModel($id, 'Dattarif');


		if (isset($_POST['Dattarif'])) {
			$model->attributes = $_POST['Dattarif'];

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
			$this->loadModel($id, 'Dattarif')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Dattarif');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Dattarif('search');
		$model->unsetAttributes();

		if (isset($_GET['Dattarif']))
			$model->attributes = $_GET['Dattarif'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}