<?php

class PendaftaranController extends GxController
{
	public function actionIndex()
	{
            	$model = new Datregister('search');
		$model->unsetAttributes();

		if (isset($_GET['Datregister']))
			$model->attributes = $_GET['Datregister'];

		$this->render('index', array(
			'model' => $model,
		));		
	}


	public function actionAutocompleteTest() {
		$res =array();
                /*
		if (isset($_GET['term'])) {
			// http://www.yiiframework.com/doc/guide/database.dao
			$qtxt ="SELECT nama label, id value FROM mspasien2 WHERE nama LIKE :username";
			$command =Yii::app()->db->createCommand($qtxt);
			$command->bindValue(":username", '%'.$_GET['term'].'%', PDO::PARAM_STR);
			$res =$command->query();
		}*/

                if (isset($_GET['term'])) {
                    $name = $_GET['term'];
                    $criteria = new CDbCriteria();
                    //$criteria->select = array('nama as label', 'id as value');
                    $criteria->addSearchCondition('nama', $name);
                    //$criteria->params = array(":sterm"=>"%$name%");
                    $results = array();
                    $model = new Mspasien2();
                    foreach($model->findAll($criteria) as $m)
                    {
                        //$results[] = $m->getAttribute('id').' | '.$m->getAttribute('nama');
                        $results[] = array(
                            'label'=>$m->nama,
                            'value'=>$m->nama,
                            'id'=>$m->id
                        );
                    }

                }
                echo CJSON::encode($results);


		//echo CJSON::encode($res);
		Yii::app()->end();
	} /* end of actionAutocompleteTest */

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}