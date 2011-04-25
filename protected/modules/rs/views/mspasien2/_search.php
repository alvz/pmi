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
		<?php echo $form->label($model, 'nomr'); ?>
		<?php echo $form->textField($model, 'nomr', array('maxlength' => 16)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'nama'); ?>
		<?php echo $form->textField($model, 'nama', array('maxlength' => 100)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'sex'); ?>
		<?php echo $form->dropDownList($model, 'sex', GxHtml::listDataEx(Refsex::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'tempat_lahir'); ?>
		<?php echo $form->textField($model, 'tempat_lahir', array('maxlength' => 100)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'tgl_lahir'); ?>
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
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'alamat'); ?>
		<?php echo $form->textField($model, 'alamat', array('maxlength' => 200)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'agama'); ?>
		<?php echo $form->dropDownList($model, 'agama', GxHtml::listDataEx(Refagama::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'hp'); ?>
		<?php echo $form->textField($model, 'hp', array('maxlength' => 15)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'pekerjaan'); ?>
		<?php echo $form->textField($model, 'pekerjaan', array('maxlength' => 100)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'pendidikan'); ?>
		<?php echo $form->textField($model, 'pendidikan', array('maxlength' => 50)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'status'); ?>
		<?php echo $form->dropDownList($model, 'status', GxHtml::listDataEx(Refstatusnikah::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'penanggung_jawab'); ?>
		<?php echo $form->textField($model, 'penanggung_jawab', array('maxlength' => 100)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'hub_dgn_pasien'); ?>
		<?php echo $form->textField($model, 'hub_dgn_pasien', array('maxlength' => 50)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'dati'); ?>
		<?php echo $form->dropDownList($model, 'dati', GxHtml::listDataEx(Refdati::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'kec'); ?>
		<?php echo $form->dropDownList($model, 'kec', GxHtml::listDataEx(Refkec::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'tarif'); ?>
		<?php echo $form->dropDownList($model, 'tarif', GxHtml::listDataEx(RefKodeTambah::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
