<?php

/**
 * This is the model base class for the table "refperuntukan".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Refperuntukan".
 *
 * Columns in table "refperuntukan" available as properties of the model,
 * followed by relations of table "refperuntukan" available as properties of the model.
 *
 * @property integer $id
 * @property string $peruntukan
 *
 * @property Kamar[] $kamars
 */
abstract class BaseRefperuntukan extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'refperuntukan';
	}

	public static function representingColumn() {
		return 'peruntukan';
	}

	public function rules() {
		return array(
			array('peruntukan', 'required'),
			array('peruntukan', 'length', 'max'=>45),
			array('id, peruntukan', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'kamars' => array(self::HAS_MANY, 'Kamar', 'peruntukan'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'peruntukan' => Yii::t('app', 'Peruntukan'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('peruntukan', $this->peruntukan, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria' => $criteria,
		));
	}
}