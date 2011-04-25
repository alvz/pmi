<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('idlabh')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idlabh0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kd_labh')); ?>:
	<?php echo GxHtml::encode($data->kd_labh); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kd_labd')); ?>:
	<?php echo GxHtml::encode($data->kd_labd); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ur_labd')); ?>:
	<?php echo GxHtml::encode($data->ur_labd); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('norm_value')); ?>:
	<?php echo GxHtml::encode($data->norm_value); ?>
	<br />

</div>