<?php
$this->breadcrumbs = array(
	'Tindakan Igds' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' TindakanIgd',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' TindakanIgd',
		'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tindakan-igd-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Tindakan Igds</h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'tindakan-igd-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		array(
				'name'=>'idreg',
				'value'=>'GxHtml::valueEx($data->idreg0)',
				'filter'=>GxHtml::listDataEx(RegisterIgd::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'idrwt',
				'value'=>'GxHtml::valueEx($data->idrwt0)',
				'filter'=>GxHtml::listDataEx(Datrrwt::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'kdtindakan',
				'value'=>'GxHtml::valueEx($data->kdtindakan0)',
				'filter'=>GxHtml::listDataEx(Dattarif::model()->findAllAttributes(null, true)),
				),
		'qty',
		'harga_satuan',
		/*
		'jns_bayar',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>