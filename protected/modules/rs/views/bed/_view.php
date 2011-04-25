<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('idkamar')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idkamar0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nomor')); ?>:
	<?php echo GxHtml::encode($data->nomor); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('terisi')); ?>:
	<?php echo GxHtml::encode($data->terisi); ?>
	<br />

</div>