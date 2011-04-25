<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'bed-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'idkamar'); ?>
		<?php echo $form->dropDownList($model, 'idkamar', GxHtml::listDataEx(Kamar::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idkamar'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nomor'); ?>
		<?php echo $form->textField($model, 'nomor'); ?>
		<?php echo $form->error($model,'nomor'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'terisi'); ?>
		<?php echo $form->textField($model, 'terisi'); ?>
		<?php echo $form->error($model,'terisi'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('bed/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->