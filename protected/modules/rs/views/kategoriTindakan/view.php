<?php
$this->breadcrumbs = array(
	'Kategori Tindakans' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' KategoriTindakan', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' KategoriTindakan', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' KategoriTindakan', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' KategoriTindakan', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' KategoriTindakan', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> KategoriTindakan #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'label' => 'KategoriTindakan',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->parent0)), array('kategoriTindakan/view', 'id' => GxActiveRecord::extractPkValue($model->parent0, true))),
			),
'kategori',
	),
)); ?>

<h2>Kategori Tindakans</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->kategoriTindakans as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('kategoriTindakan/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2>Reftindakans</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->reftindakans as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('reftindakan/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>