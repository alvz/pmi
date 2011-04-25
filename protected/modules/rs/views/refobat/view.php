<?php
$this->breadcrumbs = array(
	'Refobats' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Refobat', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Refobat', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Refobat', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Refobat', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Refobat', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Refobat #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'kdobat',
'namaobat',
	),
)); ?>

<h2>Obats</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->obats as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('obat/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>