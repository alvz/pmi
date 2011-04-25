<?php
$this->breadcrumbs = array(
	'Ruang Rawats' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' RuangRawat', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' RuangRawat', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' RuangRawat', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' RuangRawat', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' RuangRawat', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> RuangRawat #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'ruangan',
'kdruang',
array(
			'label' => 'Refperuntukan',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->peruntukan0)), array('refperuntukan/view', 'id' => GxActiveRecord::extractPkValue($model->peruntukan0, true))),
			),
array(
			'label' => 'Refkelasrawat',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->kelas0)), array('refkelasrawat/view', 'id' => GxActiveRecord::extractPkValue($model->kelas0, true))),
			),
'tarif',
'foto',
	),
)); ?>

<h2>Datrrwts</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->datrrwts as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('datrrwt/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2>Kamars</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->kamars as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('kamar/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>