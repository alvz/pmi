<?php

/**
 * This is the model base class for the table "reftindakan".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Reftindakan".
 *
 * Columns in table "reftindakan" available as properties of the model,
 * followed by relations of table "reftindakan" available as properties of the model.
 *
 * @property integer $id
 * @property integer $idkategori
 * @property string $tindakan
 * @property string $harga_dasar
 *
 * @property Dattarif[] $dattarifs
 * @property KategoriTindakan $idkategori0
 */
abstract class BaseReftindakan extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'reftindakan';
	}

	public static function representingColumn() {
		return 'tindakan';
	}

	public function rules() {
		return array(
			array('tindakan, harga_dasar', 'required'),
			array('idkategori', 'numerical', 'integerOnly'=>true),
			array('tindakan', 'length', 'max'=>45),
			array('harga_dasar', 'length', 'max'=>10),
			array('idkategori', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, idkategori, tindakan, harga_dasar', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'dattarifs' => array(self::HAS_MANY, 'Dattarif', 'idtindakan'),
			'idkategori0' => array(self::BELONGS_TO, 'KategoriTindakan', 'idkategori'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'idkategori' => Yii::t('app', 'Idkategori'),
			'tindakan' => Yii::t('app', 'Tindakan'),
			'harga_dasar' => Yii::t('app', 'Harga Dasar'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('idkategori', $this->idkategori);
		$criteria->compare('tindakan', $this->tindakan, true);
		$criteria->compare('harga_dasar', $this->harga_dasar, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria' => $criteria,
		));
	}
}