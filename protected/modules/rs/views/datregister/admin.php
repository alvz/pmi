<?PHP
$this->menuz = array(
		array('label'=>Yii::t('app', 'List') . ' Datregister',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' Datregister',
		'url'=>array('create')),
	);

$this->menu = array(
		array('label'=>Yii::t('app', 'list') . ' Datregister',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'create') . ' Datregister',
		'url'=>array('create')),
	);
?>
<?php
/*
$this->breadcrumbs = array(
	'Datregisters' => array('index'),
	Yii::t('app', 'Manage'),
);
*/


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('datregister-grid', {
		data: $(this).serialize()
	});
	return false;
});
$('#datregister-grid table tbody tr').live('click',function() {
	$.fn.yiiGridView.update('dattindakan-grid', {
		type:'POST',
                url:'?Dattindakan[idreg]='+$(this).children(':nth-child(1)').text(),
	});
        return false;
});
$('#datregister-grid a.update').live('click',function() {
	location.href='".$this->createUrl('/rs/datregister/update/id')."/'+$.fn.yiiGridView.getSelection(id);
	return false;
});
$('#datregister-grid a.view').live('click',function() {
	location.href='".$this->createUrl('/rs/datregister/view/id')."/'+$.fn.yiiGridView.getSelection(id);
	return false;
});
");

$this->pageTitle=Yii::app()->name . ' - RS';
$this->breadcrumbs=array(
	'RS',
);
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Datregisters</h1>

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
	'id' => 'datregister-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
        //'selectableRows'=>1,
        //'selectionChanged'=>"function(id){
        //    $.fn.yiiGridView.update('dattindakan-grid', {
	//	type:'POST',
        //        url:'?Dattindakan[idreg]='+$.fn.yiiGridView.getSelection(id),
        //    });
        //}",
	'columns' => array(
		'id',
		'noreg',
		array(
				'name'=>'idmr',
				'value'=>'GxHtml::valueEx($data->idmr0)',
				'filter'=>GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true)),
				),
		'tgl',
		array(
				'name'=>'jenis_tanggungan',
				'value'=>'GxHtml::valueEx($data->jenisTanggungan0)',
				'filter'=>GxHtml::listDataEx(Reftanggungan::model()->findAllAttributes(null, true)),
				),
		'no_rujuk',
		/*
		'ref_rujuk',
		'hak_kls_rwt',
		array(
				'name'=>'poli',
				'value'=>'GxHtml::valueEx($data->poli0)',
				'filter'=>GxHtml::listDataEx(Refpoli::model()->findAllAttributes(null, true)),
				),
		'nosjp',
		'biaya_admin',
		array(
				'name'=>'dokter',
				'value'=>'GxHtml::valueEx($data->dokter0)',
				'filter'=>GxHtml::listDataEx(Refdokter::model()->findAllAttributes(null, true)),
				),
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>

        <?php $this->renderPartial('_grid', array(
            'model2' => $model2,
        )); ?>