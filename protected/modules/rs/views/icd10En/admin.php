<?php
$this->breadcrumbs = array(
	'Icd10 Ens' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' Icd10En',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' Icd10En',
		'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('icd10-en-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Icd10 Ens</h1>

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
	'id' => 'icd10-en-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'diagnosis_code',
		'description',
		'class_sub',
		'type',
		'inclusive',
		'exclusive',
		/*
		'notes',
		'std_code',
		'sub_level',
		'remarks',
		'extra_codes',
		'extra_subclass',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>