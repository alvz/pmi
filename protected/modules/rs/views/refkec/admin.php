<?php
$this->breadcrumbs = array(
	'Refkecs' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' Refkec',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' Refkec',
		'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('refkec-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Refkecs</h1>

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
	'id' => 'refkec-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'KDPROP',
		'KDKEC',
		array(
				'name'=>'iddati',
				'value'=>'GxHtml::valueEx($data->iddati0)',
				'filter'=>GxHtml::listDataEx(Refdati::model()->findAllAttributes(null, true)),
				),
		'KDDATI2',
		'NMKEC',
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>