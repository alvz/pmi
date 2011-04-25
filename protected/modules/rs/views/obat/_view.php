<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('nomor')); ?>:
	<?php echo GxHtml::encode($data->nomor); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('sub')); ?>:
	<?php echo GxHtml::encode($data->sub); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('idobat')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idobat0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kode')); ?>:
	<?php echo GxHtml::encode($data->kode); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('obatcol')); ?>:
	<?php echo GxHtml::encode($data->obatcol); ?>
	<br />

</div>