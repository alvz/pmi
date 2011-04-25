<?php
/**
 * AjaxController
 *
 * Controller to manage ajax process
 *
 * @package Admin Controller
 * @copyright Copyright (c) 2010 Budi Irawan - InHealth
 * @author Budi Irawan <www.deerawan.com>
 */
class AjaxController extends Controller
{
    public function actionDati2()
    {
        $idDati = $_POST['Mspasien2']['dati'];

        $model = Refkec::model()->findAll(
            'iddati=:id_dati2', array(':id_dati2' => $idDati));

        $data = CHtml::listData($model, 'id', 'NMKEC');
		foreach($data as $value=>$name) {
            echo CHtml::tag('option',
                       array('value'=>$value),CHtml::encode($name),true);
        }	
    }
}