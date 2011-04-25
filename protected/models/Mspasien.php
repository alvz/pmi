<?php

/**
 * This is the model class for table "mspasien".
 *
 * The followings are the available columns in table 'mspasien':
 * @property integer $id
 * @property string $nama
 * @property string $tgl_lahir
 * @property string $tempat_lahir
 * @property integer $agama
 * @property string $sex
 * @property string $alamat
 * @property string $pekerjaan
 * @property string $pendidikan
 * @property string $status
 * @property string $penanggung_jawab
 * @property string $hub_dgn_pasien
 */
class Mspasien extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Mspasien the static model class
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
		return 'mspasien';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, tgl_lahir, sex, penanggung_jawab', 'required'),
			array('agama', 'numerical', 'integerOnly'=>true),
			array('nama, tempat_lahir, pekerjaan, penanggung_jawab', 'length', 'max'=>100),
			array('sex, status', 'length', 'max'=>1),
			array('alamat', 'length', 'max'=>200),
			array('pendidikan, hub_dgn_pasien', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama, tgl_lahir, tempat_lahir, agama, sex, alamat, pekerjaan, pendidikan, status, penanggung_jawab, hub_dgn_pasien', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama',
			'tgl_lahir' => 'Tgl Lahir',
			'tempat_lahir' => 'Tempat Lahir',
			'agama' => 'Agama',
			'sex' => 'Sex',
			'alamat' => 'Alamat',
			'pekerjaan' => 'Pekerjaan',
			'pendidikan' => 'Pendidikan',
			'status' => 'Status',
			'penanggung_jawab' => 'Penanggung Jawab',
			'hub_dgn_pasien' => 'Hub Dgn Pasien',
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
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('agama',$this->agama);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('pekerjaan',$this->pekerjaan,true);
		$criteria->compare('pendidikan',$this->pendidikan,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('penanggung_jawab',$this->penanggung_jawab,true);
		$criteria->compare('hub_dgn_pasien',$this->hub_dgn_pasien,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}