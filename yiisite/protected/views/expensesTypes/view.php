<?php
/* @var $this ExpensesTypesController */
/* @var $model ExpensesTypes */

$this->breadcrumbs=array(
	'Expenses Types'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List ExpensesTypes', 'url'=>array('index')),
	array('label'=>'Create ExpensesTypes', 'url'=>array('create')),
	array('label'=>'Update ExpensesTypes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ExpensesTypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExpensesTypes', 'url'=>array('admin')),
);
?>

<h1>View ExpensesTypes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'status',
	),
)); ?>
