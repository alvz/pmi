<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'deposit-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'tgldp'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tgldp',
			'value' => $model->tgldp,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'tgldp'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nokwitansi'); ?>
		<?php echo $form->textField($model, 'nokwitansi', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nokwitansi'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nilai'); ?>
		<?php echo $form->textField($model, 'nilai', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'nilai'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'via'); ?>
		<?php echo $form->dropDownList($model, 'via', GxHtml::listDataEx(Refpembayaran::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'via'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'bank'); ?>
		<?php echo $form->textField($model, 'bank', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'bank'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nokartu'); ?>
		<?php echo $form->textField($model, 'nokartu', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nokartu'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'pcharge'); ?>
		<?php echo $form->textField($model, 'pcharge', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'pcharge'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'rpcharge'); ?>
		<?php echo $form->textField($model, 'rpcharge', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'rpcharge'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'jumlah'); ?>
		<?php echo $form->textField($model, 'jumlah', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'jumlah'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'pasien'); ?>
		<?php echo $form->dropDownList($model, 'pasien', GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'pasien'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'uraian1'); ?>
		<?php echo $form->textField($model, 'uraian1', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'uraian1'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'uraian2'); ?>
		<?php echo $form->textField($model, 'uraian2', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'uraian2'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'atasnama'); ?>
		<?php echo $form->textField($model, 'atasnama', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'atasnama'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'penerima'); ?>
		<?php echo $form->textField($model, 'penerima', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'penerima'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('deposit/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->