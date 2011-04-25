<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="span-8 ">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'dokter'); ?>
		<?php echo $form->textField($model, 'dokter', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 ">
		<?php echo $form->label($model, 'spesialis'); ?>
		<?php echo $form->textField($model, 'spesialis', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'alamat'); ?>
		<?php echo $form->textField($model, 'alamat', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nohp'); ?>
		<?php echo $form->textField($model, 'nohp', array('maxlength' => 15)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
