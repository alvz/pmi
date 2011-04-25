<?php
$this->breadcrumbs = array(
	'Jadwal Prakteks' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' JadwalPraktek',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' JadwalPraktek',
		'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('jadwal-praktek-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Jadwal Prakteks</h1>

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
	'id' => 'jadwal-praktek-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		array(
				'name'=>'iddokter',
				'value'=>'GxHtml::valueEx($data->iddokter0)',
				'filter'=>GxHtml::listDataEx(Refdokter::model()->findAllAttributes(null, true)),
				),
		'hari',
		'dari_jam',
		'sampai_jam',
		'psm',
		/*
		array(
				'name'=>'idpoli',
				'value'=>'GxHtml::valueEx($data->idpoli0)',
				'filter'=>GxHtml::listDataEx(Refpoli::model()->findAllAttributes(null, true)),
				),
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>