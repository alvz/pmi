<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'jadwal-praktek-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'iddokter'); ?>
		<?php echo $form->dropDownList($model, 'iddokter', GxHtml::listDataEx(Refdokter::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'iddokter'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'hari'); ?>
		<?php echo $form->textField($model, 'hari', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'hari'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'dari_jam'); ?>
		<?php echo $form->textField($model, 'dari_jam'); ?>
		<?php echo $form->error($model,'dari_jam'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'sampai_jam'); ?>
		<?php echo $form->textField($model, 'sampai_jam'); ?>
		<?php echo $form->error($model,'sampai_jam'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'psm'); ?>
		<?php echo $form->textField($model, 'psm', array('maxlength' => 1)); ?>
		<?php echo $form->error($model,'psm'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'idpoli'); ?>
		<?php echo $form->dropDownList($model, 'idpoli', GxHtml::listDataEx(Refpoli::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idpoli'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('jadwalpraktek/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->