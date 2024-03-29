<?php

/**
 * This is the model base class for the table "register_igd".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "RegisterIgd".
 *
 * Columns in table "register_igd" available as properties of the model,
 * followed by relations of table "register_igd" available as properties of the model.
 *
 * @property integer $id
 * @property string $noreg
 * @property integer $idmr
 * @property string $tgl
 * @property string $jam_masuk
 * @property integer $jenis_tanggungan
 * @property string $tglplg
 * @property string $jamplg
 * @property integer $alasan_keluar
 * @property string $asuransi
 *
 * @property Refkeluar $alasanKeluar0
 * @property Reftanggungan $jenisTanggungan0
 * @property Mspasien2 $idmr0
 * @property TindakanIgd[] $tindakanIgds
 */
abstract class BaseRegisterIgd extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'register_igd';
	}

	public static function representingColumn() {
		return 'noreg';
	}

	public function rules() {
		return array(
			array('noreg, idmr, tgl, jam_masuk, jenis_tanggungan', 'required'),
			array('idmr, jenis_tanggungan, alasan_keluar', 'numerical', 'integerOnly'=>true),
			array('noreg', 'length', 'max'=>45),
			array('asuransi', 'length', 'max'=>45),
			array('tglplg, jamplg', 'safe'),
			array('tglplg, jamplg, alasan_keluar, asuransi', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, noreg, idmr, tgl, jam_masuk, jenis_tanggungan, tglplg, jamplg, alasan_keluar, asuransi', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'alasanKeluar0' => array(self::BELONGS_TO, 'Refkeluar', 'alasan_keluar'),
			'jenisTanggungan0' => array(self::BELONGS_TO, 'Reftanggungan', 'jenis_tanggungan'),
			'idmr0' => array(self::BELONGS_TO, 'Mspasien2', 'idmr'),
			'tindakanIgds' => array(self::HAS_MANY, 'TindakanIgd', 'idreg'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'noreg' => Yii::t('app', 'Noreg'),
			'idmr' => Yii::t('app', 'Idmr'),
			'tgl' => Yii::t('app', 'Tgl'),
			'jam_masuk' => Yii::t('app', 'Jam Masuk'),
			'jenis_tanggungan' => Yii::t('app', 'Jenis Tanggungan'),
			'tglplg' => Yii::t('app', 'Tglplg'),
			'jamplg' => Yii::t('app', 'Jamplg'),
			'alasan_keluar' => Yii::t('app', 'Alasan Keluar'),
			'asuransi' => Yii::t('app', 'Asuransi'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('noreg', $this->noreg, true);
		$criteria->compare('idmr', $this->idmr);
		$criteria->compare('tgl', $this->tgl, true);
		$criteria->compare('jam_masuk', $this->jam_masuk, true);
		$criteria->compare('jenis_tanggungan', $this->jenis_tanggungan);
		$criteria->compare('tglplg', $this->tglplg, true);
		$criteria->compare('jamplg', $this->jamplg, true);
		$criteria->compare('alasan_keluar', $this->alasan_keluar);
		$criteria->compare('asuransi', $this->asuransi, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria' => $criteria,
		));
	}
}