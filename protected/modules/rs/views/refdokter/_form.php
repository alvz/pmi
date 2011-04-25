<div class="wide form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'refdokter-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="span-9 ">
		<?php echo $form->labelEx($model,'dokter'); ?>
		<?php echo $form->textField($model, 'dokter', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'dokter'); ?>
		</div><!-- row -->
		<div class="span-9 last">
		<?php echo $form->labelEx($model,'spesialis'); ?>
		<?php echo $form->textField($model, 'spesialis', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'spesialis'); ?>
		</div><!-- row -->
		<div class="span-9 ">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model, 'alamat', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'alamat'); ?>
		</div><!-- row -->
		<div class="span-9 last">
		<?php echo $form->labelEx($model,'nohp'); ?>
		<?php echo $form->textField($model, 'nohp', array('maxlength' => 15)); ?>
		<?php echo $form->error($model,'nohp'); ?>
		</div><!-- row -->
		
<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('refdokter/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->