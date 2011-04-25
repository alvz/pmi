<?php
$this->breadcrumbs = array(
	'Dattarifs' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Dattarif', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Dattarif', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Dattarif', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Dattarif', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Dattarif', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Dattarif #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'label' => 'Reftindakan',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idtindakan0)), array('reftindakan/view', 'id' => GxActiveRecord::extractPkValue($model->idtindakan0, true))),
			),
'tindakan',
array(
			'label' => 'RefKodeTambah',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->kdtambah0)), array('refKodeTambah/view', 'id' => GxActiveRecord::extractPkValue($model->kdtambah0, true))),
			),
array(
			'label' => 'Reftype',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->type0)), array('reftype/view', 'id' => GxActiveRecord::extractPkValue($model->type0, true))),
			),
'tarif',
	),
)); ?>

<h2>Dattindakans</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->dattindakans as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('dattindakan/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2>Tindakan Igds</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->tindakanIgds as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tindakanIgd/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>