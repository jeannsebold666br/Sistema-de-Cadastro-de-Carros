<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_marca',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'marca_nome',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'data_cadastro_marca',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fk_usuario_marca',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
