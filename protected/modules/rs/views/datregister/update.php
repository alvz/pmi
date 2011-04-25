<?php
$this->breadcrumbs = array(
	'Datregisters' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Register', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Register', 'url'=>array('create')),
	array('label' => Yii::t('app', 'Delete') . ' Register', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label' => Yii::t('app', 'Manage') . ' Register', 'url'=>array('admin')),
        array('label' => Yii::t('app', 'Create') . ' Tindakan', 'url'=>array('dattindakan/create', 'idregister'=>$model->id)),
);

Yii::app()->clientScript->registerScript('delTindakan', "

    
    $('#SubmitButton').click(function(){
        if ($(\"[name='id[]']:checked\").length < 1){
            alert('dodol');return false;
        }
    });
    
    $(\"#addButton\").click(function(){
        if ($(\"[name='id[]']:checked\").length < 1){
                alert(\"dodol\");
                return false;
        }
        $.ajax({
            type    : 'POST',
            cache   : false,
            url     : '/dattindakan/create/',
            data    : $('#albumForm').serializeArray(),
            success: function(data){ $.fancybox(data);}
        });
        return false;
    });
    
    $('#checkAll').click(function(){
        $(\"[name='id[]']\").attr('checked','true');//全选
    });
    $('#checkXor').click(function(){
        $(\"[name='id[]']\").each(function(){
            if($(this).attr('checked')){
                $(this).removeAttr('checked');
            }
            else{
                $(this).attr('checked','true');
            }
        });
    });

");
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Datregister #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>
<form id="tindakanForm" action="<?php echo Yii::app()->createUrl("rs/dattindakan/delete",array("id"=>$data->id))?>"
 method="get">

<?
$tindakanDataProvider=new CActiveDataProvider('Dattindakan', array(
            'criteria'=>array(
                'condition'=>'idreg='.$model->id,                
            ),
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
//$tindakanDataProvider=new CActiveDataProvider('Dattindakan');

$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'dattindakan-grid',
	'dataProvider' => $tindakanDataProvider,
	'columns' => array(
                array(
                            'name'=>'id',
                            'type'=>'raw',
                            'value'=>'CHtml::checkBox("id[]",false,array("value"=>"$data->id"))'
                    ),		
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

<?php
$ids=array();
foreach($model->dattindakans as $tindakan)
{
	$ids[]=$model->id;
}
$ids=implode('_',$ids);
?>
<input id="checkAll" type="button"  value="Check All" /><input type="button" id="checkXor"  value="Inverse" />
<input id="SubmitButton" type="submit"  value="Hapus" />
<?php
if(!Yii::app()->user->isGuest)
{
	echo '<input id="addButton" type="button"  value="tambah" />';
}
?>
</form>