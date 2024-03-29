<?php

/**
 * This is the model base class for the table "reftanggungan".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Reftanggungan".
 *
 * Columns in table "reftanggungan" available as properties of the model,
 * followed by relations of table "reftanggungan" available as properties of the model.
 *
 * @property integer $id
 * @property string $tanggungan
 *
 * @property Datregister[] $datregisters
 * @property RegisterIgd[] $registerIgds
 * @property RujukanInternal[] $rujukanInternals
 */
abstract class BaseReftanggungan extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'reftanggungan';
	}

	public static function representingColumn() {
		return 'tanggungan';
	}

	public function rules() {
		return array(
			array('tanggungan', 'required'),
			array('tanggungan', 'length', 'max'=>45),
			array('id, tanggungan', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'datregisters' => array(self::HAS_MANY, 'Datregister', 'jenis_tanggungan'),
			'registerIgds' => array(self::HAS_MANY, 'RegisterIgd', 'jenis_tanggungan'),
			'rujukanInternals' => array(self::HAS_MANY, 'RujukanInternal', 'jenis_tanggungan'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'tanggungan' => Yii::t('app', 'Tanggungan'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('tanggungan', $this->tanggungan, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria' => $criteria,
		));
	}
}