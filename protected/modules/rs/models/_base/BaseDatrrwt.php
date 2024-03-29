<?php

/**
 * This is the model base class for the table "datrrwt".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Datrrwt".
 *
 * Columns in table "datrrwt" available as properties of the model,
 * followed by relations of table "datrrwt" available as properties of the model.
 *
 * @property integer $id
 * @property integer $idreg
 * @property string $tglmasuk
 * @property string $jammasuk
 * @property integer $ruang
 * @property integer $kamar
 * @property integer $bed
 * @property string $byhari
 * @property string $tglklr
 * @property string $jamklr
 *
 * @property RuangRawat $ruang0
 * @property Bed $bed0
 * @property Kamar $kamar0
 * @property RegisterIgd $idreg0
 * @property TindakanIgd[] $tindakanIgds
 */
abstract class BaseDatrrwt extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'datrrwt';
	}

	public static function representingColumn() {
		return 'tglmasuk';
	}

	public function rules() {
		return array(
			array('idreg, tglmasuk, jammasuk, ruang, kamar, bed, byhari', 'required'),
			array('idreg, ruang, kamar, bed', 'numerical', 'integerOnly'=>true),
			array('byhari', 'length', 'max'=>10),
			array('tglklr, jamklr', 'safe'),
			array('tglklr, jamklr', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, idreg, tglmasuk, jammasuk, ruang, kamar, bed, byhari, tglklr, jamklr', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'ruang0' => array(self::BELONGS_TO, 'RuangRawat', 'ruang'),
			'bed0' => array(self::BELONGS_TO, 'Bed', 'bed'),
			'kamar0' => array(self::BELONGS_TO, 'Kamar', 'kamar'),
			'idreg0' => array(self::BELONGS_TO, 'RegisterIgd', 'idreg'),
			'tindakanIgds' => array(self::HAS_MANY, 'TindakanIgd', 'idrwt'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'idreg' => Yii::t('app', 'Idreg'),
			'tglmasuk' => Yii::t('app', 'Tglmasuk'),
			'jammasuk' => Yii::t('app', 'Jammasuk'),
			'ruang' => Yii::t('app', 'Ruang'),
			'kamar' => Yii::t('app', 'Kamar'),
			'bed' => Yii::t('app', 'Bed'),
			'byhari' => Yii::t('app', 'Byhari'),
			'tglklr' => Yii::t('app', 'Tglklr'),
			'jamklr' => Yii::t('app', 'Jamklr'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('idreg', $this->idreg);
		$criteria->compare('tglmasuk', $this->tglmasuk, true);
		$criteria->compare('jammasuk', $this->jammasuk, true);
		$criteria->compare('ruang', $this->ruang);
		$criteria->compare('kamar', $this->kamar);
		$criteria->compare('bed', $this->bed);
		$criteria->compare('byhari', $this->byhari, true);
		$criteria->compare('tglklr', $this->tglklr, true);
		$criteria->compare('jamklr', $this->jamklr, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria' => $criteria,
		));
	}
}