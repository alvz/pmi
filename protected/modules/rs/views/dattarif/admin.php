<?php
$this->breadcrumbs = array(
	'Dattarifs' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' Dattarif',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' Dattarif',
		'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('dattarif-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Dattarifs</h1>

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
	'id' => 'dattarif-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		array(
				'name'=>'idtindakan',
				'value'=>'GxHtml::valueEx($data->idtindakan0)',
				'filter'=>GxHtml::listDataEx(Reftindakan::model()->findAllAttributes(null, true)),
				),
		'tindakan',
		array(
				'name'=>'kdtambah',
				'value'=>'GxHtml::valueEx($data->kdtambah0)',
				'filter'=>GxHtml::listDataEx(RefKodeTambah::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'type',
				'value'=>'GxHtml::valueEx($data->type0)',
				'filter'=>GxHtml::listDataEx(Reftype::model()->findAllAttributes(null, true)),
				),
		'tarif',
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>