<?php
$this->breadcrumbs = array(
	'Reftindakans' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' Reftindakan',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' Reftindakan',
		'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('reftindakan-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Reftindakans</h1>

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
	'id' => 'reftindakan-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		array(
				'name'=>'idkategori',
				'value'=>'GxHtml::valueEx($data->idkategori0)',
				'filter'=>GxHtml::listDataEx(KategoriTindakan::model()->findAllAttributes(null, true)),
				),
		'tindakan',
		'harga_dasar',
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>