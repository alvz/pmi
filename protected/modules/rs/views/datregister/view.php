<?php
Yii::app()->clientScript->registerScript('gridclick', "
$('#dattindakan-grid table tbody tr').live('click', function(){
	location.href = '".$this->createUrl('/rs/dattindakan/view/id')."/'+$(this).children(':nth-child(1)').text();
});
");

$this->breadcrumbs = array(
	'Datregisters' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Datregister', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Datregister', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Datregister', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Datregister', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Datregister', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Datregister #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'noreg',
array(
			'label' => 'Mspasien2',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idmr0)), array('mspasien2/view', 'id' => GxActiveRecord::extractPkValue($model->idmr0, true))),
			),
'tgl',
array(
			'label' => 'Reftanggungan',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->jenisTanggungan0)), array('reftanggungan/view', 'id' => GxActiveRecord::extractPkValue($model->jenisTanggungan0, true))),
			),
'no_rujuk',
'ref_rujuk',
'asuransi',
array(
			'label' => 'Refpoli',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->poli0)), array('refpoli/view', 'id' => GxActiveRecord::extractPkValue($model->poli0, true))),
			),
'nosjp',
'biaya_admin',
array(
			'label' => 'Refdokter',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->dokter0)), array('refdokter/view', 'id' => GxActiveRecord::extractPkValue($model->dokter0, true))),
			),
array(
			'label' => 'Reftype',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->type0)), array('reftype/view', 'id' => GxActiveRecord::extractPkValue($model->type0, true))),
			),
	),
)); ?>



<h2>Dattindakans</h2>

<?php
	echo GxHtml::openTag('ul');
	foreach($model->dattindakans as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('dattindakan/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>
<?$tindakanDataProvider=new CActiveDataProvider('Dattindakan', array(
            'criteria'=>array(
                'condition'=>'idreg='.$model->id,
            ),
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'dattindakan-grid',
	'dataProvider' => $tindakanDataProvider,
	'columns' => array(
                'id',
		array(
				'name'=>'idreg',
				'value'=>'GxHtml::valueEx($data->idreg0)',
				'filter'=>GxHtml::listDataEx(Datregister::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'kdtindakan',
				'value'=>'GxHtml::valueEx($data->kdtindakan0)',
				'filter'=>GxHtml::listDataEx(Dattarif::model()->findAllAttributes(null, true)),
				),
		'harga_satuan',
                array(
                        'class'=>'CButtonColumn',
                        'buttons'=>array(
                            'update'=>array(
                                'url'=>'Yii::app()->createUrl("rs/dattindakan/update",array("id"=>$data->id))',
                            ),
                            'delete'=>array(
                                'url'=>'Yii::app()->createUrl("rs/dattindakan/delete",array("id"=>$data->id))',
                            ),
                        ),
                    ),
	),
));

?>
