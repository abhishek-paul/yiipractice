<?php
/* @var $this ExpensesController */
/* @var $model Expenses */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'expenses-form',
	'enableAjaxValidation'=>false,
)); 

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
	),
));

$this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                'name'=>'Expenses[datetime]',
                                'id'=>'Expenses_datetime',
                            'value'=>Yii::app()->dateFormatter->format("d-M-y",strtotime($model->datetime)),
                                'options'=>array(
                                'showAnim'=>'fold',
                                ),
                                'htmlOptions'=>array(
                                'style'=>'height:20px;'
                                ),
                        )); 


?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expensestypeid'); ?>
		<?php echo $form->dropDownList($model, 'expensestypeid', CHtml::listData(ExpensesTypes::model()->findAll(),'id','title'),array('prompt'=>'Choose')); ?>
		<?php //echo $form->textField($model,'expensestypeid'); ?>
		<?php echo $form->error($model,'expensestypeid'); ?>

	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datetime'); ?>
		<?php echo $form->textField($model,'datetime',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
