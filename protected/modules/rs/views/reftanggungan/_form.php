<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'reftanggungan-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'tanggungan'); ?>
		<?php echo $form->textField($model, 'tanggungan', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tanggungan'); ?>
		</div><!-- row -->

		<label>Datregisters</label>
		<?php echo $form->checkBoxList($model, 'datregisters', GxHtml::encodeEx(GxHtml::listDataEx(Datregister::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('reftanggungan/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->