<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'datregister-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idmr'); ?>
		<?php echo $form->textField($model,'idmr'); ?>
		<?php echo $form->error($model,'idmr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl'); ?>
		<?php echo $form->textField($model,'tgl'); ?>
		<?php echo $form->error($model,'tgl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_tanggungan'); ?>
		<?php echo $form->textField($model,'jenis_tanggungan'); ?>
		<?php echo $form->error($model,'jenis_tanggungan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_rujuk'); ?>
		<?php echo $form->textField($model,'no_rujuk',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'no_rujuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ref_rujuk'); ?>
		<?php echo $form->textField($model,'ref_rujuk',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ref_rujuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hak_kls_rwt'); ?>
		<?php echo $form->textField($model,'hak_kls_rwt',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'hak_kls_rwt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'poli'); ?>
		<?php echo $form->textField($model,'poli'); ?>
		<?php echo $form->error($model,'poli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nosjp'); ?>
		<?php echo $form->textField($model,'nosjp',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nosjp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'biaya_admin'); ?>
		<?php echo $form->textField($model,'biaya_admin',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'biaya_admin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->