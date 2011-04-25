<?php
$this->breadcrumbs = array(
	'Refperuntukans' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Refperuntukan', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Refperuntukan', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Refperuntukan', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Refperuntukan', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Refperuntukan', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Refperuntukan #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'peruntukan',
	),
)); ?>

<h2>Kamars</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->kamars as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('kamar/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>