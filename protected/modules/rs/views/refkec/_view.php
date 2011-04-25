<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('KDPROP')); ?>:
	<?php echo GxHtml::encode($data->KDPROP); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('KDKEC')); ?>:
	<?php echo GxHtml::encode($data->KDKEC); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('iddati')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->iddati0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('KDDATI2')); ?>:
	<?php echo GxHtml::encode($data->KDDATI2); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('NMKEC')); ?>:
	<?php echo GxHtml::encode($data->NMKEC); ?>
	<br />

</div>