<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'register-igd-grid',
	'dataProvider' => $model3->search(),
	'columns' => array(
		'id',
		'noreg',
		array(
				'name'=>'idmr',
				'value'=>'GxHtml::valueEx($data->idmr0)',
				'filter'=>GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true)),
				),
		'tgl',
		'jam_masuk',
		array(
				'name'=>'jenis_tanggungan',
				'value'=>'GxHtml::valueEx($data->jenisTanggungan0)',
				'filter'=>GxHtml::listDataEx(Reftanggungan::model()->findAllAttributes(null, true)),
				),
		/*
		'asuransi',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>