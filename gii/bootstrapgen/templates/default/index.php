<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label',
);\n";
?>

$this->menu=array(
	array('label'=>t('backend|Create <?php echo $this->modelClass; ?>'),'url'=>array('create')),
	array('label'=>t('backend|Manage <?php echo $this->modelClass; ?>'),'url'=>array('admin')),
);
?>

<h1><?php echo "<?php t('backend|\$label'); ?>" ?></h1>

<?php echo "<?php"; ?> 
$this->widget('bootstrap.widgets.TbGridView',array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}{pager}",
    'columns'=>array(
        array('name'=>'id',   'header'=>'id' ),
        array('name'=>'name', 'header'=> t('backend|Title') ),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'viewButtonUrl'=>'Yii::app()->controller->createUrl("view",array("id"=>$data["id"]))',
            'updateButtonUrl'=>'Yii::app()->controller->createUrl("update",array("id"=>$data["id"]))',
            'deleteButtonUrl'=>'Yii::app()->controller->createUrl("delete",array("id"=>$data["id"]))',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
));
