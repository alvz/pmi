<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('idreg')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idreg0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('idrwt')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idrwt0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kdtindakan')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->kdtindakan0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('qty')); ?>:
	<?php echo GxHtml::encode($data->qty); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('harga_satuan')); ?>:
	<?php echo GxHtml::encode($data->harga_satuan); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('jns_bayar')); ?>:
	<?php echo GxHtml::encode($data->jns_bayar); ?>
	<br />

</div>