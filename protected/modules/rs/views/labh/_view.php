<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('kd_labh2')); ?>:
	<?php echo GxHtml::encode($data->kd_labh2); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ur_labh')); ?>:
	<?php echo GxHtml::encode($data->ur_labh); ?>
	<br />

</div>