<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('parent')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->parent0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kategori')); ?>:
	<?php echo GxHtml::encode($data->kategori); ?>
	<br />

</div>