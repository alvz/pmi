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
	<?php echo GxHtml::encode($data->getAttributeLabel('jenis_tanggungan')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->jenisTanggungan0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('no_rujuk')); ?>:
	<?php echo GxHtml::encode($data->no_rujuk); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ref_rujuk')); ?>:
	<?php echo GxHtml::encode($data->ref_rujuk); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('asuransi')); ?>:
	<?php echo GxHtml::encode($data->asuransi); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('poli')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->poli0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nosjp')); ?>:
	<?php echo GxHtml::encode($data->nosjp); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('biaya_admin')); ?>:
	<?php echo GxHtml::encode($data->biaya_admin); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('dokter')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->dokter0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('type')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->type0)); ?>
	<br />
	*/ ?>

</div>