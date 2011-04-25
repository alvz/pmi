<?php
$this->breadcrumbs = array(
	'Refdokters' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Refdokter', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Refdokter', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Refdokter', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Refdokter', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Refdokter', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Refdokter #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'dokter',
'spesialis',
'alamat',
'nohp',
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
?><h2>Jadwal Prakteks</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->jadwalPrakteks as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('jadwalPraktek/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>