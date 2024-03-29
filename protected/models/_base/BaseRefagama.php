<?php

/**
 * This is the model base class for the table "refagama".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Refagama".
 *
 * Columns in table "refagama" available as properties of the model,
 * followed by relations of table "refagama" available as properties of the model.
 *
 * @property integer $id
 * @property string $agama
 *
 * @property Mspasien3[] $mspasien3s
 * @property Mspasien4[] $mspasien4s
 */
abstract class BaseRefagama extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'refagama';
	}

	public static function representingColumn() {
		return 'agama';
	}

	public function rules() {
		return array(
			array('agama', 'required'),
			array('agama', 'length', 'max'=>45),
			array('id, agama', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'mspasien3s' => array(self::HAS_MANY, 'Mspasien3', 'agama'),
			'mspasien4s' => array(self::HAS_MANY, 'Mspasien4', 'agama'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'agama' => Yii::t('app', 'Agama'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('agama', $this->agama, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria' => $criteria,
		));
	}
}