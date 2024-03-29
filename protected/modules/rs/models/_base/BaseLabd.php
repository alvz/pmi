<?php

/**
 * This is the model base class for the table "labd".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Labd".
 *
 * Columns in table "labd" available as properties of the model,
 * followed by relations of table "labd" available as properties of the model.
 *
 * @property integer $id
 * @property integer $idlabh
 * @property string $kd_labh
 * @property string $kd_labd
 * @property string $ur_labd
 * @property string $norm_value
 *
 * @property Labh $idlabh0
 */
abstract class BaseLabd extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'labd';
	}

	public static function representingColumn() {
		return 'kd_labh';
	}

	public function rules() {
		return array(
			array('kd_labh, kd_labd', 'required'),
			array('idlabh', 'numerical', 'integerOnly'=>true),
			array('kd_labh, kd_labd', 'length', 'max'=>3),
			array('ur_labd, norm_value', 'length', 'max'=>30),
			array('idlabh, ur_labd, norm_value', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, idlabh, kd_labh, kd_labd, ur_labd, norm_value', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'idlabh0' => array(self::BELONGS_TO, 'Labh', 'idlabh'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'idlabh' => Yii::t('app', 'Idlabh'),
			'kd_labh' => Yii::t('app', 'Kd Labh'),
			'kd_labd' => Yii::t('app', 'Kd Labd'),
			'ur_labd' => Yii::t('app', 'Ur Labd'),
			'norm_value' => Yii::t('app', 'Norm Value'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('idlabh', $this->idlabh);
		$criteria->compare('kd_labh', $this->kd_labh, true);
		$criteria->compare('kd_labd', $this->kd_labd, true);
		$criteria->compare('ur_labd', $this->ur_labd, true);
		$criteria->compare('norm_value', $this->norm_value, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria' => $criteria,
		));
	}
}