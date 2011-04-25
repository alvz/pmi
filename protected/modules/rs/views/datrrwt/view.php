<?php
$this->breadcrumbs = array(
	'Datrrwts' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Datrrwt', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Datrrwt', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Datrrwt', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Datrrwt', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Datrrwt', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Datrrwt #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'label' => 'RegisterIgd',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idreg0)), array('registerIgd/view', 'id' => GxActiveRecord::extractPkValue($model->idreg0, true))),
			),
'tglmasuk',
'jammasuk',
array(
			'label' => 'RuangRawat',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->ruang0)), array('ruangRawat/view', 'id' => GxActiveRecord::extractPkValue($model->ruang0, true))),
			),
array(
			'label' => 'Kamar',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->kamar0)), array('kamar/view', 'id' => GxActiveRecord::extractPkValue($model->kamar0, true))),
			),
array(
			'label' => 'Bed',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->bed0)), array('bed/view', 'id' => GxActiveRecord::extractPkValue($model->bed0, true))),
			),
'byhari',
'tglklr',
'jamklr',
	),
)); ?>

<h2>Tindakan Igds</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->tindakanIgds as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tindakanIgd/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>