<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('nama')); ?>:
	<?php echo GxHtml::encode($data->nama); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('agama')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->agama0)); ?>
	<br />

</div>