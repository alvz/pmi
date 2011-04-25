<?php
$this->breadcrumbs = array(
	'Ruang Rawats' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' RuangRawat',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' RuangRawat',
		'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('ruang-rawat-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Ruang Rawats</h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'ruang-rawat-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'ruangan',
		'kdruang',
		array(
				'name'=>'peruntukan',
				'value'=>'GxHtml::valueEx($data->peruntukan0)',
				'filter'=>GxHtml::listDataEx(Refperuntukan::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'kelas',
				'value'=>'GxHtml::valueEx($data->kelas0)',
				'filter'=>GxHtml::listDataEx(Refkelasrawat::model()->findAllAttributes(null, true)),
				),
		'tarif',
		/*
		'foto',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>