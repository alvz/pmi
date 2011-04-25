<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('kd_pasien')); ?>:
	<?php echo GxHtml::encode($data->kd_pasien); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kd_lab')); ?>:
	<?php echo GxHtml::encode($data->kd_lab); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tgl_masuk')); ?>:
	<?php echo GxHtml::encode($data->tgl_masuk); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tgl_lab')); ?>:
	<?php echo GxHtml::encode($data->tgl_lab); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('hasil')); ?>:
	<?php echo GxHtml::encode($data->hasil); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kd_labh')); ?>:
	<?php echo GxHtml::encode($data->kd_labh); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('kd_labd')); ?>:
	<?php echo GxHtml::encode($data->kd_labd); ?>
	<br />
	*/ ?>

</div>