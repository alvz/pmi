<?php
$this->breadcrumbs = array(
	'Refdokters' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Refdokter', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Refdokter', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Refdokter', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Refdokter', 'url'=>array('admin')),
    array('label' => Yii::t('app', 'Create') . ' Tindakan', 'url'=>array('jadwalPraktek/create', 'iddokter'=>$model->id)),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Refdokter #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>
<?php
$jadwalDataProvider=new CActiveDataProvider('JadwalPraktek', array(
            'criteria'=>array(
                'condition'=>'iddokter='.$model->id,
            ),
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'jadwal-praktek-grid',
	'dataProvider' => $jadwalDataProvider,	
	'columns' => array(
		'id',
		array(
				'name'=>'iddokter',
				'value'=>'GxHtml::valueEx($data->iddokter0)',
				'filter'=>GxHtml::listDataEx(Refdokter::model()->findAllAttributes(null, true)),
				),
		'hari',
		'dari_jam',
		'sampai_jam',
		'psm',
		/*
		array(
				'name'=>'idpoli',
				'value'=>'GxHtml::valueEx($data->idpoli0)',
				'filter'=>GxHtml::listDataEx(Refpoli::model()->findAllAttributes(null, true)),
				),
		*/
		array(
                    'class'=>'CButtonColumn',
                    'buttons'=>array(
                        'update'=>array(
                            'url'=>'Yii::app()->createUrl("rs/jadwalPraktek/update",array("id"=>$data->id))',
                        ),
                        'delete'=>array(
                            'url'=>'Yii::app()->createUrl("rs/jadwalPraktek/delete",array("id"=>$data->id))',
                        ),
                    ),
                ),
	),
)); ?>