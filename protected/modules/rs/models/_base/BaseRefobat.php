<?php

/**
 * This is the model base class for the table "refobat".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Refobat".
 *
 * Columns in table "refobat" available as properties of the model,
 * followed by relations of table "refobat" available as properties of the model.
 *
 * @property integer $id
 * @property string $kdobat
 * @property string $namaobat
 *
 * @property Obat[] $obats
 */
abstract class BaseRefobat extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'refobat';
	}

	public static function representingColumn() {
		return 'kdobat';
	}

	public function rules() {
		return array(
			array('id, kdobat, namaobat', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('kdobat, namaobat', 'length', 'max'=>45),
			array('id, kdobat, namaobat', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'obats' => array(self::HAS_MANY, 'Obat', 'idobat'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'kdobat' => Yii::t('app', 'Kdobat'),
			'namaobat' => Yii::t('app', 'Namaobat'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('kdobat', $this->kdobat, true);
		$criteria->compare('namaobat', $this->namaobat, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria' => $criteria,
		));
	}
}