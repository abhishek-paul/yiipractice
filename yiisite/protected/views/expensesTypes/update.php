<?php
/* @var $this ExpensesTypesController */
/* @var $model ExpensesTypes */

$this->breadcrumbs=array(
	'Expenses Types'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExpensesTypes', 'url'=>array('index')),
	array('label'=>'Create ExpensesTypes', 'url'=>array('create')),
	array('label'=>'View ExpensesTypes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ExpensesTypes', 'url'=>array('admin')),
);
?>

<h1>Update ExpensesTypes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>