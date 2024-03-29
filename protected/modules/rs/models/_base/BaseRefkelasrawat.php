<?php

/**
 * This is the model base class for the table "refkelasrawat".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Refkelasrawat".
 *
 * Columns in table "refkelasrawat" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $idkelas
 * @property string $kelas
 * @property string $lokasi
 * @property string $tarif
 *
 */
abstract class BaseRefkelasrawat extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'refkelasrawat';
	}

	public static function representingColumn() {
		return 'idkelas';
	}

	public function rules() {
		return array(
			array('idkelas, kelas, tarif', 'required'),
			array('idkelas, kelas, lokasi', 'length', 'max'=>45),
			array('tarif', 'length', 'max'=>10),
			array('lokasi', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, idkelas, kelas, lokasi, tarif', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'idkelas' => Yii::t('app', 'Idkelas'),
			'kelas' => Yii::t('app', 'Kelas'),
			'lokasi' => Yii::t('app', 'Lokasi'),
			'tarif' => Yii::t('app', 'Tarif'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('idkelas', $this->idkelas, true);
		$criteria->compare('kelas', $this->kelas, true);
		$criteria->compare('lokasi', $this->lokasi, true);
		$criteria->compare('tarif', $this->tarif, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria' => $criteria,
		));
	}
}