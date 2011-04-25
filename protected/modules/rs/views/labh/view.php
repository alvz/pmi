<?php
$this->breadcrumbs = array(
	'Labhs' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Labh', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Labh', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Labh', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Labh', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Labh', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Labh #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'kd_labh2',
'ur_labh',
	),
)); ?>

<h2>Labds</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->labds as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('labd/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>