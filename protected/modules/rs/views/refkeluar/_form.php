<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'refkeluar-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'refkeluarcol'); ?>
		<?php echo $form->textField($model, 'refkeluarcol', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'refkeluarcol'); ?>
		</div><!-- row -->

		<label>Register Igds</label>
		<?php echo $form->checkBoxList($model, 'registerIgds', GxHtml::encodeEx(GxHtml::listDataEx(RegisterIgd::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('refkeluar/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->