<?php
$this->breadcrumbs = array(
	'Register Igds' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' RegisterIgd', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' RegisterIgd', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' RegisterIgd', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' RegisterIgd', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' RegisterIgd', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> RegisterIgd #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

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
'jam_masuk',
array(
			'label' => 'Reftanggungan',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->jenisTanggungan0)), array('reftanggungan/view', 'id' => GxActiveRecord::extractPkValue($model->jenisTanggungan0, true))),
			),
'asuransi',
	),
)); ?>
<?
$tindakanDataProvider=new CActiveDataProvider('Datrrwt', array(
            'criteria'=>array(
                'condition'=>'idreg='.$model->id,
            ),
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$tindakanDataProvider,
	'itemView'=>'_viewrwt',
));

$tindakanProvider=new CActiveDataProvider('TindakanIgd', array(
            'criteria'=>array(
                'condition'=>'idreg='.$model->id,
            ),
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$tindakanProvider,
	'itemView'=>'_viewtindakan',
));

?>

