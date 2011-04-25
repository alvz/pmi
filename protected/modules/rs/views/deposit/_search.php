<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="span-8 ">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'tgldp'); ?>
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
	</div>

	<div class="span-8 ">
		<?php echo $form->label($model, 'nokwitansi'); ?>
		<?php echo $form->textField($model, 'nokwitansi', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'nilai'); ?>
		<?php echo $form->textField($model, 'nilai', array('maxlength' => 10)); ?>
	</div>

	<div class="span-8 ">
		<?php echo $form->label($model, 'via'); ?>
		<?php echo $form->dropDownList($model, 'via', GxHtml::listDataEx(Refpembayaran::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'bank'); ?>
		<?php echo $form->textField($model, 'bank', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 ">
		<?php echo $form->label($model, 'nokartu'); ?>
		<?php echo $form->textField($model, 'nokartu', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'pcharge'); ?>
		<?php echo $form->textField($model, 'pcharge', array('maxlength' => 10)); ?>
	</div>

	<div class="span-8 ">
		<?php echo $form->label($model, 'rpcharge'); ?>
		<?php echo $form->textField($model, 'rpcharge', array('maxlength' => 10)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'jumlah'); ?>
		<?php echo $form->textField($model, 'jumlah', array('maxlength' => 10)); ?>
	</div>

	<div class="span-8 ">
		<?php echo $form->label($model, 'pasien'); ?>
		<?php echo $form->dropDownList($model, 'pasien', GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'uraian1'); ?>
		<?php echo $form->textField($model, 'uraian1', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 ">
		<?php echo $form->label($model, 'uraian2'); ?>
		<?php echo $form->textField($model, 'uraian2', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'atasnama'); ?>
		<?php echo $form->textField($model, 'atasnama', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'penerima'); ?>
		<?php echo $form->textField($model, 'penerima', array('maxlength' => 45)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
