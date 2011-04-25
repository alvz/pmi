<?php
$this->breadcrumbs = array(
	'Refdatis' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Refdati', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Refdati', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Refdati', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Refdati', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Refdati', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Refdati #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'KDPROP',
'KDDATI2',
'NMDATI2',
	),
)); ?>

<h2>Mspasien2s</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->mspasien2s as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('mspasien2/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>