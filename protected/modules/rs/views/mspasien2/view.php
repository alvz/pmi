<?php
$this->breadcrumbs = array(
	'Mspasien2s' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Mspasien2', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Mspasien2', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Mspasien2', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Mspasien2', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Mspasien2', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Mspasien2 #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'nomr',
'nama',
array(
			'label' => 'Refsex',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->sex0)), array('refsex/view', 'id' => GxActiveRecord::extractPkValue($model->sex0, true))),
			),
'tempat_lahir',
'tgl_lahir',
'alamat',
array(
			'label' => 'Refagama',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->agama0)), array('refagama/view', 'id' => GxActiveRecord::extractPkValue($model->agama0, true))),
			),
'hp',
'pekerjaan',
'pendidikan',
array(
			'label' => 'Refstatusnikah',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->status0)), array('refstatusnikah/view', 'id' => GxActiveRecord::extractPkValue($model->status0, true))),
			),
'penanggung_jawab',
'hub_dgn_pasien',
array(
			'label' => 'Refdati',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->dati0)), array('refdati/view', 'id' => GxActiveRecord::extractPkValue($model->dati0, true))),
			),
array(
			'label' => 'Refkec',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->kec0)), array('refkec/view', 'id' => GxActiveRecord::extractPkValue($model->kec0, true))),
			),
array(
			'label' => 'RefKodeTambah',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->tarif0)), array('refKodeTambah/view', 'id' => GxActiveRecord::extractPkValue($model->tarif0, true))),
			),
	),
)); ?>

<h2>Datregisters</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->datregisters as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('datregister/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>