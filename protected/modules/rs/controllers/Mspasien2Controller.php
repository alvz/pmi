<?php

class Mspasien2Controller extends GxController {


      public function actions()
  {
    return array(
      'aclist'=>array(
        'class'=>'application.extensions.EAutoCompleteAction',
        'model'=>'Mspasien2', //My model's class name
        'label'=>'nama', //The attribute of the model i will search
        'value'=>'nama',
        'id'=>'id'
      ),
    );
  }
	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Mspasien2'),
		));
	}

	public function actionCreate() {
		$model = new Mspasien2;


		if (isset($_POST['Mspasien2'])) {
			
                        //$tempdate = $model->getLastNumber('MR', date('Ymd'), 4) ;
                        $_POST['Mspasien2']['nomr']= $model->getLastNumber('MR', date('Ymd'), 4);
                        $model->attributes = $_POST['Mspasien2'];
                        //print_r($_POST);

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
		$model = $this->loadModel($id, 'Mspasien2');


		if (isset($_POST['Mspasien2'])) {
			$model->attributes = $_POST['Mspasien2'];

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
			$this->loadModel($id, 'Mspasien2')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionAdmin() {
		$dataProvider = new CActiveDataProvider('Mspasien2');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionIndex() {
		$model = new Mspasien2('search');
		$model->unsetAttributes();

                $model2 = new Datregister('search');
		$model2->unsetAttributes();

                

		if (isset($_GET['Mspasien2']))
			$model->attributes = $_GET['Mspasien2'];

                if (isset($_GET['Datregister']))
			$model2->attributes = $_GET['Datregister'];

                $model3 = new RegisterIgd('search');
		$model3->unsetAttributes();

                if (isset($_GET['RegisterIgd']))
			$model3->attributes = $_GET['RegisterIgd'];

		$this->render('admin', array(
			'model' => $model,
                        'model2'=> $model2,
                        'model3'=> $model3,
		));
	}

}