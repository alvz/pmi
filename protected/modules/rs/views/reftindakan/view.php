<?php
$this->breadcrumbs = array(
	'Reftindakans' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Reftindakan', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Reftindakan', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Reftindakan', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Reftindakan', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Reftindakan', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Reftindakan #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'label' => 'KategoriTindakan',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idkategori0)), array('kategoriTindakan/view', 'id' => GxActiveRecord::extractPkValue($model->idkategori0, true))),
			),
'tindakan',
'harga_dasar',
	),
)); ?>

<h2>Dattarifs</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->dattarifs as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('dattarif/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>