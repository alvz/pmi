<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('nosjp')); ?>:
	<?php echo GxHtml::encode($data->nosjp); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tglsjp')); ?>:
	<?php echo GxHtml::encode($data->tglsjp); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nokapst')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->nokapst0)); ?>
	<br />

</div>