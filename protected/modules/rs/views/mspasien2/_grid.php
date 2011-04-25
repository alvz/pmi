<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'datregister-grid',
	'dataProvider' => $model2->search(),
	//'filter' => $model2,
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

		array(
			'class' => 'CButtonColumn',
		),*/
	),
)); ?>