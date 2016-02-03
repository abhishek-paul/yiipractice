<?php
/* @var $this ExpensesTypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Expenses Types',
);

$this->menu=array(
	array('label'=>'Create ExpensesTypes', 'url'=>array('create')),
	array('label'=>'Manage ExpensesTypes', 'url'=>array('admin')),
);
?>

<h1>Expenses Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
