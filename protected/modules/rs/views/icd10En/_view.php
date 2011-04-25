<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('diagnosis_code')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->diagnosis_code), array('view', 'id' => $data->diagnosis_code)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('description')); ?>:
	<?php echo GxHtml::encode($data->description); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('class_sub')); ?>:
	<?php echo GxHtml::encode($data->class_sub); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('type')); ?>:
	<?php echo GxHtml::encode($data->type); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('inclusive')); ?>:
	<?php echo GxHtml::encode($data->inclusive); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('exclusive')); ?>:
	<?php echo GxHtml::encode($data->exclusive); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('notes')); ?>:
	<?php echo GxHtml::encode($data->notes); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('std_code')); ?>:
	<?php echo GxHtml::encode($data->std_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('sub_level')); ?>:
	<?php echo GxHtml::encode($data->sub_level); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('remarks')); ?>:
	<?php echo GxHtml::encode($data->remarks); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('extra_codes')); ?>:
	<?php echo GxHtml::encode($data->extra_codes); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('extra_subclass')); ?>:
	<?php echo GxHtml::encode($data->extra_subclass); ?>
	<br />
	*/ ?>

</div>