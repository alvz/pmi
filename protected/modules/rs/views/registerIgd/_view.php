<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('noreg')); ?>:
	<?php echo GxHtml::encode($data->noreg); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('idmr')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idmr0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tgl')); ?>:
	<?php echo GxHtml::encode($data->tgl); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('jam_masuk')); ?>:
	<?php echo GxHtml::encode($data->jam_masuk); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('jenis_tanggungan')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->jenisTanggungan0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('asuransi')); ?>:
	<?php echo GxHtml::encode($data->asuransi); ?>
	<br />

</div>