<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="span-8 last">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'tgl'); ?>
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
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'nosurat'); ?>
		<?php echo $form->textField($model, 'nosurat', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'nama'); ?>
		<?php echo $form->textField($model, 'nama', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'ibu'); ?>
		<?php echo $form->textField($model, 'ibu', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'ayah'); ?>
		<?php echo $form->textField($model, 'ayah', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'alamat1'); ?>
		<?php echo $form->textField($model, 'alamat1', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'alamat2'); ?>
		<?php echo $form->textField($model, 'alamat2', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'tgllahir'); ?>
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
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'jam'); ?>
		<?php echo $form->textField($model, 'jam'); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'berat'); ?>
		<?php echo $form->textField($model, 'berat', array('maxlength' => 10)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'panjang'); ?>
		<?php echo $form->textField($model, 'panjang', array('maxlength' => 10)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'hidupmati'); ?>
		<?php echo $form->textField($model, 'hidupmati', array('maxlength' => 1)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'dokter'); ?>
		<?php echo $form->textField($model, 'dokter'); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'bidan'); ?>
		<?php echo $form->textField($model, 'bidan'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
