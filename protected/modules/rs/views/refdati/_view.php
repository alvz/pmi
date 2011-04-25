<div class="view">

	<span class="span-8">
        <?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:</span><span class="span-9 last">
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?></span>
	

	<?php echo GxHtml::encode($data->getAttributeLabel('KDPROP')); ?>:
	<?php echo GxHtml::encode($data->KDPROP); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('KDDATI2')); ?>:
	<?php echo GxHtml::encode($data->KDDATI2); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('NMDATI2')); ?>:
	<?php echo GxHtml::encode($data->NMDATI2); ?>
	<br />

</div>