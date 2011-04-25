<?php

Yii::import('application.modules.rs.models._base.BaseDeposit');

class Deposit extends BaseDeposit
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}