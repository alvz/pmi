<?php
$this->breadcrumbs = array(
	'Mspasien2s' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' Mspasien2',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' Mspasien2',
		'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('mspasien2-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Mspasien2s</h1>

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
	'id' => 'mspasien2-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'nomr',
		'nama',
		'sex',
		'tempat_lahir',
		'tgl_lahir',
		/*
		'alamat',
		array(
				'name'=>'agama',
				'value'=>'GxHtml::valueEx($data->agama0)',
				'filter'=>GxHtml::listDataEx(Refagama::model()->findAllAttributes(null, true)),
				),
		'hp',
		'pekerjaan',
		'pendidikan',
		'status',
		'penanggung_jawab',
		'hub_dgn_pasien',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>