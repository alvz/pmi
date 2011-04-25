<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idregister'); ?>
		<?php echo $form->textField($model,'idregister'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idmr'); ?>
		<?php echo $form->textField($model,'idmr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl'); ?>
		<?php echo $form->textField($model,'tgl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_tanggungan'); ?>
		<?php echo $form->textField($model,'jenis_tanggungan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_rujuk'); ?>
		<?php echo $form->textField($model,'no_rujuk',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ref_rujuk'); ?>
		<?php echo $form->textField($model,'ref_rujuk',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hak_kls_rwt'); ?>
		<?php echo $form->textField($model,'hak_kls_rwt',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'poli'); ?>
		<?php echo $form->textField($model,'poli'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nosjp'); ?>
		<?php echo $form->textField($model,'nosjp',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biaya_admin'); ?>
		<?php echo $form->textField($model,'biaya_admin',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->