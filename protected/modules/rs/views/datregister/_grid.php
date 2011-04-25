<?php
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'dattindakan-grid',
	'dataProvider' => $model2->search(),
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
