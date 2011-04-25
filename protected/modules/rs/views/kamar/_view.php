<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('idruang')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idruang0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nomor')); ?>:
	<?php echo GxHtml::encode($data->nomor); ?>
	<br />

</div>