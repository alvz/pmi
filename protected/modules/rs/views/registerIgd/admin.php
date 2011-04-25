<?php
$this->breadcrumbs = array(
	'Register Igds' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' RegisterIgd',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' RegisterIgd',
		'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('register-igd-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Register Igds</h1>

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
	'id' => 'register-igd-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'noreg',
		array(
				'name'=>'idmr',
				'value'=>'GxHtml::valueEx($data->idmr0)',
				'filter'=>GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true)),
				),
		'tgl',
		'jam_masuk',
		array(
				'name'=>'jenis_tanggungan',
				'value'=>'GxHtml::valueEx($data->jenisTanggungan0)',
				'filter'=>GxHtml::listDataEx(Reftanggungan::model()->findAllAttributes(null, true)),
				),
		/*
		'asuransi',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>