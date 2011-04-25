<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'obat-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'nomor'); ?>
		<?php echo $form->textField($model, 'nomor', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nomor'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'sub'); ?>
		<?php echo $form->textField($model, 'sub', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'sub'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'idobat'); ?>
		<?php echo $form->dropDownList($model, 'idobat', GxHtml::listDataEx(Refobat::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idobat'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'kode'); ?>
		<?php echo $form->textField($model, 'kode', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'kode'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'obatcol'); ?>
		<?php echo $form->textField($model, 'obatcol', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'obatcol'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('obat/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->