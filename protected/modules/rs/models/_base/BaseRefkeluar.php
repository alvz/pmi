<?php

/**
 * This is the model base class for the table "refkeluar".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Refkeluar".
 *
 * Columns in table "refkeluar" available as properties of the model,
 * followed by relations of table "refkeluar" available as properties of the model.
 *
 * @property integer $id
 * @property string $refkeluarcol
 *
 * @property RegisterIgd[] $registerIgds
 */
abstract class BaseRefkeluar extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'refkeluar';
	}

	public static function representingColumn() {
		return 'refkeluarcol';
	}

	public function rules() {
		return array(
			array('refkeluarcol', 'required'),
			array('refkeluarcol', 'length', 'max'=>45),
			array('id, refkeluarcol', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'registerIgds' => array(self::HAS_MANY, 'RegisterIgd', 'alasan_keluar'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'refkeluarcol' => Yii::t('app', 'Refkeluarcol'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('refkeluarcol', $this->refkeluarcol, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria' => $criteria,
		));
	}
}