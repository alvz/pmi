<?php
$this->breadcrumbs = array(
	'Jadwal Prakteks' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' JadwalPraktek', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' JadwalPraktek', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' JadwalPraktek', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' JadwalPraktek', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' JadwalPraktek', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> JadwalPraktek #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'label' => 'Refdokter',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->iddokter0)), array('refdokter/view', 'id' => GxActiveRecord::extractPkValue($model->iddokter0, true))),
			),
'hari',
'dari_jam',
'sampai_jam',
'psm',
array(
			'label' => 'Refpoli',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idpoli0)), array('refpoli/view', 'id' => GxActiveRecord::extractPkValue($model->idpoli0, true))),
			),
	),
)); ?>

