<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('idpasien')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idpasien0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('idreg')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idreg0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('jenis_tanggungan')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->jenisTanggungan0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('poli_pengirim')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->poliPengirim0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('dokter_pengirim')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->dokterPengirim0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('poli_tujuan')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->poliTujuan0)); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('dokter_tujuan')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->dokterTujuan0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('asuransi')); ?>:
	<?php echo GxHtml::encode($data->asuransi); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('no_rujuk')); ?>:
	<?php echo GxHtml::encode($data->no_rujuk); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('catatan_khusus')); ?>:
	<?php echo GxHtml::encode($data->catatan_khusus); ?>
	<br />
	*/ ?>

</div>