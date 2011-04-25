<?php
$this->breadcrumbs = array(
	'Reftanggungans' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Reftanggungan', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Reftanggungan', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Reftanggungan', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Reftanggungan', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Reftanggungan', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Reftanggungan #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'tanggungan',
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