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
		<?php echo $form->label($model, 'idreg'); ?>
		<?php echo $form->dropDownList($model, 'idreg', GxHtml::listDataEx(RegisterIgd::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'tglmasuk'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tglmasuk',
			'value' => $model->tglmasuk,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'jammasuk'); ?>
		<?php echo $form->textField($model, 'jammasuk'); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'ruang'); ?>
		<?php echo $form->dropDownList($model, 'ruang', GxHtml::listDataEx(RuangRawat::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'kamar'); ?>
		<?php echo $form->dropDownList($model, 'kamar', GxHtml::listDataEx(Kamar::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'bed'); ?>
		<?php echo $form->dropDownList($model, 'bed', GxHtml::listDataEx(Bed::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'byhari'); ?>
		<?php echo $form->textField($model, 'byhari', array('maxlength' => 10)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'tglklr'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tglklr',
			'value' => $model->tglklr,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'jamklr'); ?>
		<?php echo $form->textField($model, 'jamklr'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
