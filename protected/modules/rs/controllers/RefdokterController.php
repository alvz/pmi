<?php

class RefdokterController extends GxController {

      public function actions()
  {
    return array(
      'aclist'=>array(
        'class'=>'application.extensions.EAutoCompleteAction',
        'model'=>'Refdokter', //My model's class name
        'label'=>'dokter', //The attribute of the model i will search
        'value'=>'dokter',
        'id'=>'id'
      ),
    );
  }
	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Refdokter'),
		));
	}

	public function actionCreate() {
		$model = new Refdokter;


		if (isset($_POST['Refdokter'])) {
			$model->attributes = $_POST['Refdokter'];

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
		$model = $this->loadModel($id, 'Refdokter');


		if (isset($_POST['Refdokter'])) {
			$model->attributes = $_POST['Refdokter'];

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
			$this->loadModel($id, 'Refdokter')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Refdokter');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Refdokter('search');
		$model->unsetAttributes();

		if (isset($_GET['Refdokter']))
			$model->attributes = $_GET['Refdokter'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}