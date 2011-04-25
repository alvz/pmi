<?php

/**
 * This is the model class for table "datregister".
 *
 * The followings are the available columns in table 'datregister':
 * @property integer $id
 * @property string $noreg
 * @property integer $idmr
 * @property string $tgl
 * @property string $jam_masuk
 * @property integer $jenis_tanggungan
 * @property string $no_rujuk
 * @property string $ref_rujuk
 * @property string $asuransi
 * @property integer $poli
 * @property string $nosjp
 * @property string $biaya_admin
 * @property integer $dokter
 * @property integer $type
 * @property string $tglplg
 * @property string $jamplg
 * @property integer $alasankeluar
 *
 * The followings are the available model relations:
 * @property Reftanggungan $jenisTanggungan0
 * @property Mspasien2 $idmr0
 * @property Refpoli $poli0
 * @property Refdokter $dokter0
 * @property Reftype $type0
 * @property Refkeluar $alasankeluar0
 * @property Dattindakan[] $dattindakans
 * @property RujukanInternal[] $rujukanInternals
 */
class Datregister extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Datregister the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'datregister';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('noreg, idmr, tgl, jam_masuk, jenis_tanggungan, poli, dokter, type', 'required'),
			array('idmr, jenis_tanggungan, poli, dokter, type, alasankeluar', 'numerical', 'integerOnly'=>true),
			array('noreg, no_rujuk, ref_rujuk, asuransi, nosjp', 'length', 'max'=>45),
			array('biaya_admin', 'length', 'max'=>10),
			array('tglplg, jamplg', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, noreg, idmr, tgl, jam_masuk, jenis_tanggungan, no_rujuk, ref_rujuk, asuransi, poli, nosjp, biaya_admin, dokter, type, tglplg, jamplg, alasankeluar', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'jenisTanggungan0' => array(self::BELONGS_TO, 'Reftanggungan', 'jenis_tanggungan'),
			'idmr0' => array(self::BELONGS_TO, 'Mspasien2', 'idmr'),
			'poli0' => array(self::BELONGS_TO, 'Refpoli', 'poli'),
			'dokter0' => array(self::BELONGS_TO, 'Refdokter', 'dokter'),
			'type0' => array(self::BELONGS_TO, 'Reftype', 'type'),
			'alasankeluar0' => array(self::BELONGS_TO, 'Refkeluar', 'alasankeluar'),
			'dattindakans' => array(self::HAS_MANY, 'Dattindakan', 'idreg'),
			'rujukanInternals' => array(self::HAS_MANY, 'RujukanInternal', 'idreg'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'noreg' => 'Noreg',
			'idmr' => 'Idmr',
			'tgl' => 'Tgl',
			'jam_masuk' => 'Jam Masuk',
			'jenis_tanggungan' => 'Jenis Tanggungan',
			'no_rujuk' => 'No Rujuk',
			'ref_rujuk' => 'Ref Rujuk',
			'asuransi' => 'Asuransi',
			'poli' => 'Poli',
			'nosjp' => 'Nosjp',
			'biaya_admin' => 'Biaya Admin',
			'dokter' => 'Dokter',
			'type' => 'Type',
			'tglplg' => 'Tglplg',
			'jamplg' => 'Jamplg',
			'alasankeluar' => 'Alasankeluar',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('noreg',$this->noreg,true);
		$criteria->compare('idmr',$this->idmr);
		$criteria->compare('tgl',$this->tgl,true);
		$criteria->compare('jam_masuk',$this->jam_masuk,true);
		$criteria->compare('jenis_tanggungan',$this->jenis_tanggungan);
		$criteria->compare('no_rujuk',$this->no_rujuk,true);
		$criteria->compare('ref_rujuk',$this->ref_rujuk,true);
		$criteria->compare('asuransi',$this->asuransi,true);
		$criteria->compare('poli',$this->poli);
		$criteria->compare('nosjp',$this->nosjp,true);
		$criteria->compare('biaya_admin',$this->biaya_admin,true);
		$criteria->compare('dokter',$this->dokter);
		$criteria->compare('type',$this->type);
		$criteria->compare('tglplg',$this->tglplg,true);
		$criteria->compare('jamplg',$this->jamplg,true);
		$criteria->compare('alasankeluar',$this->alasankeluar);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}