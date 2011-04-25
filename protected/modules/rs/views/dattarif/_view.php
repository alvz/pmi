<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('idtindakan')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idtindakan0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tindakan')); ?>:
	<?php echo GxHtml::encode($data->tindakan); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kdtambah')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->kdtambah0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('type')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->type0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tarif')); ?>:
	<?php echo GxHtml::encode($data->tarif); ?>
	<br />

</div>