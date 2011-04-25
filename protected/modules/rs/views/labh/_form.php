<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'labh-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'kd_labh2'); ?>
		<?php echo $form->textField($model, 'kd_labh2', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'kd_labh2'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ur_labh'); ?>
		<?php echo $form->textField($model, 'ur_labh', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'ur_labh'); ?>
		</div><!-- row -->

		<label>Labds</label>
		<?php echo $form->checkBoxList($model, 'labds', GxHtml::encodeEx(GxHtml::listDataEx(Labd::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('labh/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->