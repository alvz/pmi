<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('iddokter')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->iddokter0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('hari')); ?>:
	<?php echo GxHtml::encode($data->hari); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('dari_jam')); ?>:
	<?php echo GxHtml::encode($data->dari_jam); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('sampai_jam')); ?>:
	<?php echo GxHtml::encode($data->sampai_jam); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('psm')); ?>:
	<?php echo GxHtml::encode($data->psm); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('idpoli')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idpoli0)); ?>
	<br />

</div>