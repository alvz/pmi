<div class="wide form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'suratkelahiran-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="span-8 last">
		<?php echo $form->labelEx($model,'tgl'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tgl',
			'value' => $model->tgl,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'tgl'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'nosurat'); ?>
		<?php echo $form->textField($model, 'nosurat', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nosurat'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model, 'nama', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nama'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'ibu'); ?>
		<?php echo $form->textField($model, 'ibu', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ibu'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'ayah'); ?>
		<?php echo $form->textField($model, 'ayah', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ayah'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'alamat1'); ?>
		<?php echo $form->textField($model, 'alamat1', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'alamat1'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'alamat2'); ?>
		<?php echo $form->textField($model, 'alamat2', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'alamat2'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'tgllahir'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tgllahir',
			'value' => $model->tgllahir,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'tgllahir'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'jam'); ?>
		<?php echo $form->textField($model, 'jam'); ?>
		<?php echo $form->error($model,'jam'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'berat'); ?>
		<?php echo $form->textField($model, 'berat', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'berat'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'panjang'); ?>
		<?php echo $form->textField($model, 'panjang', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'panjang'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'hidupmati'); ?>
		<?php echo $form->textField($model, 'hidupmati', array('maxlength' => 1)); ?>
		<?php echo $form->error($model,'hidupmati'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'dokter'); ?>
		<?php echo $form->textField($model, 'dokter'); ?>
		<?php echo $form->error($model,'dokter'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'bidan'); ?>
		<?php echo $form->textField($model, 'bidan'); ?>
		<?php echo $form->error($model,'bidan'); ?>
		</div><!-- row -->

                <div class="row"></div>
<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('suratkelahiran/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->