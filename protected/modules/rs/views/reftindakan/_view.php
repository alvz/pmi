<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('idkategori')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idkategori0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tindakan')); ?>:
	<?php echo GxHtml::encode($data->tindakan); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('harga_dasar')); ?>:
	<?php echo GxHtml::encode($data->harga_dasar); ?>
	<br />

</div>