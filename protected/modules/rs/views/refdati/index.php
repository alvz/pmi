<?php
$this->breadcrumbs = array(
	'Refdatis',
	Yii::t('app', 'Index'),
);

$this->menuz = array(
	array('label'=>Yii::t('app', 'Kabupaten') , 'url'=>array('/rs/refdati')),
	array('label'=>Yii::t('app', 'Kecamatan') , 'url'=>array('/rs/refkec')),
        array('label'=>Yii::t('app', 'Kode Tambah') , 'url'=>array('/rs/refKodeTambah')),
	array('label'=>Yii::t('app', 'Dokter') , 'url'=>array('/rs/refdokter')),
        array('label'=>Yii::t('app', 'Poli') , 'url'=>array('/rs/refpoli')),
	array('label'=>Yii::t('app', 'Tanggungan') , 'url'=>array('/rs/reftanggungan')),
        array('label'=>Yii::t('app', 'Kategori Tindakan') , 'url'=>array('/rs/KategoriTindakan')),
        array('label'=>Yii::t('app', 'Tindakan') , 'url'=>array('/rs/reftindakan')),
	array('label'=>Yii::t('app', 'Type') , 'url'=>array('/rs/reftype')),
        array('label'=>Yii::t('app', 'Tarif') , 'url'=>array('/rs/dattarif')),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Refdati', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Refdati', 'url' => array('admin')),
);
?>

<h1>Refdatis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 