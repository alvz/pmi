<?php
$this->breadcrumbs = array(
	'Datrrwts' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' Datrrwt',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' Datrrwt',
		'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('datrrwt-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Datrrwts</h1>

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
	'id' => 'datrrwt-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		array(
				'name'=>'idreg',
				'value'=>'GxHtml::valueEx($data->idreg0)',
				'filter'=>GxHtml::listDataEx(RegisterIgd::model()->findAllAttributes(null, true)),
				),
		'tglmasuk',
		'jammasuk',
		array(
				'name'=>'ruang',
				'value'=>'GxHtml::valueEx($data->ruang0)',
				'filter'=>GxHtml::listDataEx(RuangRawat::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'kamar',
				'value'=>'GxHtml::valueEx($data->kamar0)',
				'filter'=>GxHtml::listDataEx(Kamar::model()->findAllAttributes(null, true)),
				),
		/*
		array(
				'name'=>'bed',
				'value'=>'GxHtml::valueEx($data->bed0)',
				'filter'=>GxHtml::listDataEx(Bed::model()->findAllAttributes(null, true)),
				),
		'byhari',
		'tglklr',
		'jamklr',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>