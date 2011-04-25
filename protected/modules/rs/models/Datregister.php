<?php

Yii::import('application.modules.rs.models._base.BaseDatregister');

class Datregister extends BaseDatregister
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
        public function getLastNumber($prefix, $TglReal, $len)
	{

            //$qid ="select ifnull(max(right(nomr," .$len.")), 'dodol".$prefix.$TglReal."0001') nosjp from mspasien2 where nomr like '".$prefix.$TglReal."%'";
            $qid ="select ifnull(max(right(noreg," .$len."))+1, '1') noreg from datregister where noreg like '".$prefix.$TglReal."%'";
            //echo($qid);
            $connection = Yii::app()->db;
            $command=$connection->createCommand($qid);
            //$command->bindParam(':prefix', $prefix, PDO::PARAM_STR);
            //$command->bindParam(':$TglReal', $TglReal, PDO::PARAM_STR);

            $rows=$command->queryAll();
            $temp = $rows[0]['noreg'];
            //if(strlen($temp) == 13){
            //    return $temp = $temp . '000001';
            //} else
		return $prefix.$TglReal.  str_repeat('0', $len -strlen($rows[0]['noreg'])).$rows[0]['noreg'];
	}
}