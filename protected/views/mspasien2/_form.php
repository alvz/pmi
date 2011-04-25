<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'mspasien2-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'nomr'); ?>
		<?php echo $form->textField($model, 'nomr'); ?>
		<?php echo $form->error($model,'nomr'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model, 'nama', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'nama'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model, 'sex', array('maxlength' => 1)); ?>
		<?php echo $form->error($model,'sex'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tempat_lahir'); ?>
		<?php echo $form->textField($model, 'tempat_lahir', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'tempat_lahir'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tgl_lahir'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tgl_lahir',
			'value' => $model->tgl_lahir,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'tgl_lahir'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model, 'alamat', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'alamat'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'agama'); ?>
		<?php echo $form->dropDownList($model, 'agama', GxHtml::listDataEx(Refagama::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'agama'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'hp'); ?>
		<?php echo $form->textField($model, 'hp', array('maxlength' => 15)); ?>
		<?php echo $form->error($model,'hp'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'pekerjaan'); ?>
		<?php echo $form->textField($model, 'pekerjaan', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'pekerjaan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'pendidikan'); ?>
		<?php echo $form->textField($model, 'pendidikan', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'pendidikan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model, 'status', array('maxlength' => 1)); ?>
		<?php echo $form->error($model,'status'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'penanggung_jawab'); ?>
		<?php echo $form->textField($model, 'penanggung_jawab', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'penanggung_jawab'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'hub_dgn_pasien'); ?>
		<?php echo $form->textField($model, 'hub_dgn_pasien', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'hub_dgn_pasien'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('mspasien2/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->