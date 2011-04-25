<?php
$this->breadcrumbs = array(
	'Rujukan Internals' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' RujukanInternal', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' RujukanInternal', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' RujukanInternal', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' RujukanInternal', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' RujukanInternal', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> RujukanInternal #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'label' => 'Mspasien2',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idpasien0)), array('mspasien2/view', 'id' => GxActiveRecord::extractPkValue($model->idpasien0, true))),
			),
array(
			'label' => 'Datregister',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idreg0)), array('datregister/view', 'id' => GxActiveRecord::extractPkValue($model->idreg0, true))),
			),
array(
			'label' => 'Reftanggungan',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->jenisTanggungan0)), array('reftanggungan/view', 'id' => GxActiveRecord::extractPkValue($model->jenisTanggungan0, true))),
			),
array(
			'label' => 'Refpoli',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->poliPengirim0)), array('refpoli/view', 'id' => GxActiveRecord::extractPkValue($model->poliPengirim0, true))),
			),
array(
			'label' => 'Refdokter',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->dokterPengirim0)), array('refdokter/view', 'id' => GxActiveRecord::extractPkValue($model->dokterPengirim0, true))),
			),
array(
			'label' => 'Refpoli',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->poliTujuan0)), array('refpoli/view', 'id' => GxActiveRecord::extractPkValue($model->poliTujuan0, true))),
			),
array(
			'label' => 'Refdokter',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->dokterTujuan0)), array('refdokter/view', 'id' => GxActiveRecord::extractPkValue($model->dokterTujuan0, true))),
			),
'asuransi',
'no_rujuk',
'catatan_khusus',
	),
)); ?>

