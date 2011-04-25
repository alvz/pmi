<?php
$this->breadcrumbs = array(
	'Layanpolis' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' Layanpoli',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' Layanpoli',
		'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('layanpoli-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Layanpolis</h1>

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
	'id' => 'layanpoli-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'noreg',
		'diag',
		'tekanandarahl',
		'tekanandarahh',
		'denyutnadil',
		/*
		'denyutnadih',
		'suhu',
		'tb',
		'bb',
		'kesadaran',
		'respirasi',
		'bab',
		'bak',
		'vomitting',
		'ivfd',
		'diagdokterp',
		'diagdokters1',
		'diagdokters2',
		'diagdokters3',
		'diagdokters4',
		'cat_khusus',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>