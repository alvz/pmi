<?php

/**
 * This is the model base class for the table "refpoli".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Refpoli".
 *
 * Columns in table "refpoli" available as properties of the model,
 * followed by relations of table "refpoli" available as properties of the model.
 *
 * @property integer $id
 * @property string $poli
 *
 * @property Datregister[] $datregisters
 */
abstract class BaseRefpoli extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'refpoli';
	}

	public static function representingColumn() {
		return 'poli';
	}

	public function rules() {
		return array(
			array('poli', 'required'),
			array('poli', 'length', 'max'=>45),
			array('id, poli', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'datregisters' => array(self::HAS_MANY, 'Datregister', 'poli'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'poli' => Yii::t('app', 'Poli'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('poli', $this->poli, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria' => $criteria,
		));
	}
}