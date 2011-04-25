<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idregister')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idregister), array('view', 'id'=>$data->idregister)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmr')); ?>:</b>
	<?php echo CHtml::encode($data->idmr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl')); ?>:</b>
	<?php echo CHtml::encode($data->tgl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_tanggungan')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_tanggungan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_rujuk')); ?>:</b>
	<?php echo CHtml::encode($data->no_rujuk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ref_rujuk')); ?>:</b>
	<?php echo CHtml::encode($data->ref_rujuk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hak_kls_rwt')); ?>:</b>
	<?php echo CHtml::encode($data->hak_kls_rwt); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('poli')); ?>:</b>
	<?php echo CHtml::encode($data->poli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nosjp')); ?>:</b>
	<?php echo CHtml::encode($data->nosjp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biaya_admin')); ?>:</b>
	<?php echo CHtml::encode($data->biaya_admin); ?>
	<br />

	*/ ?>

</div>