<?php

Yii::import('application.models._base.BaseMspasien2');

class Mspasien2 extends BaseMspasien2
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
        public function getLastNumber($prefix, $TglReal, $len)
	{

            $qid ="select ifnull(max(right(nomr,4)),'0001') from mspasien2 where nomr like'MR'.$TglReal.'%'";

            $connection = Yii::app()->db;
            $command=$connection->createCommand($qid);
            //$command->bindParam(':prefix', $prefix, PDO::PARAM_STR);
            //$command->bindParam(':$TglReal', $TglReal, PDO::PARAM_STR);

            $rows=$command->queryAll();
            //$temp = $rows[0]['nosjp'];
            //if(strlen($temp) == 13){
            //    return $temp = $temp . '000001';
            //} else
		return $rows[0]['nosjp'];
	}        
}