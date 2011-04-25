<?php
$this->breadcrumbs = array(
	'Kamars' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Kamar', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Kamar', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Kamar', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Kamar', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Kamar', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Kamar #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'label' => 'RuangRawat',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idruang0)), array('ruangRawat/view', 'id' => GxActiveRecord::extractPkValue($model->idruang0, true))),
			),
'nomor',
	),
)); ?>

<h2>Beds</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->beds as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('bed/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2>Datrrwts</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->datrrwts as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('datrrwt/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>