<?php

class DatregisterController extends GxController {

 public function actionKeluarIgd($id) {
		$model = $this->loadModel($id, 'Datregister');


		if (isset($_POST['Datregister'])) {
			$model->attributes = $_POST['Datregister'];

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('keluarIgd', array(
				'model' => $model,
				));
	}

         public function actionBilling($id) {
		$model = $this->loadModel($id, 'Datregister');


		if (isset($_POST['Datregister'])) {
			$model->attributes = $_POST['Datregister'];

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('keluarIgd', array(
				'model' => $model,
				));
	}

        public function actionSearchmr()
            {
                // Param
                $searchText = $_POST['search'];
                
                // Query
                $criteria=new CDbCriteria;
                $criteria->condition="nama LIKE '%$searchText%'";
                $criteria->order='nama';

                $model = Mspasien2::model()->findAll($criteria);

                //echo $string;
                //echo count($model);
                //echo $model->nama_provider;
                //print_r($model);

                $data = CHtml::listData($model, 'id', 'nama');
                        foreach($data as $value=>$name) {
                    echo CHtml::tag('option',
                               array('value'=>$value),CHtml::encode($name),true);
                }
                        /*foreach($model as $provider) {
                    echo CHtml::tag('option',
                               array('value'=>$provider->id_provider),CHtml::encode($provider->nama_provider),true);
                }*/
            }
        

        public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Datregister'),
		));
	}

	public function actionCreate() {
		$model = new Datregister;


		if (isset($_POST['Datregister'])) {
                        $_POST['Datregister']['noreg']= $model->getLastNumber('RJ', date('Ymd'), 4);
			$model->attributes = $_POST['Datregister'];

			if ($model->save()) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect(array('update', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Datregister');


		if (isset($_POST['Datregister'])) {
			$model->attributes = $_POST['Datregister'];

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

                $criteria=new CDbCriteria;
                $criteria->condition="idreg = '%$id%'";
                //$criteria->order='nama';

                $modelt = Dattindakan::model()->findAll($criteria);

                //$modelt = new Dattindakan('search');
		//$modelt->unsetAttributes();

		//if (isset($_GET['Dattindakan']))
		//	$modelt->attributes = $_GET['Dattindakan'];


		$this->render('update', array(
				'model' => $model,
                                'modelt' => $modelt,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->request->isPostRequest) {
			$this->loadModel($id, 'Datregister')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('index'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionAdmin() {
		$dataProvider = new CActiveDataProvider('Datregister');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionIndex() {
		$model = new Datregister('search');
		$model->unsetAttributes();

		if (isset($_GET['Datregister']))
			$model->attributes = $_GET['Datregister'];

                $model2 = new Dattindakan('search');
		$model2->unsetAttributes();

                if (isset($_GET['Dattindakan']))
			$model2->attributes = $_GET['Dattindakan'];

		$this->render('admin', array(
			'model' => $model,
                        'model2' => $model2,
		));
	}

}