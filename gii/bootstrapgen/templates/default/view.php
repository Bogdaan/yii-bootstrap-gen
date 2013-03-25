<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->t('backend|{$nameColumn}'),
);\n";
?>

$this->menu=array(
	array('label'=>t('backend|List <?php echo $this->modelClass; ?>'),'url'=>array('index')),
	array('label'=>t('backend|Create <?php echo $this->modelClass; ?>'),'url'=>array('create')),
	array('label'=>t('backend|Update <?php echo $this->modelClass; ?>'),'url'=>array('update','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
	array('label'=>t('backend|Delete <?php echo $this->modelClass; ?>'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>),'confirm'=>t('backend|Are you sure you want to delete this item?'))),
	array('label'=>t('backend|Manage <?php echo $this->modelClass; ?>'),'url'=>array('admin')),
);
?>

<h1> <?php echo "<?php echo t('backend|View ". $this->modelClass."') ?>" ?> <?php echo " #<?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h1>

<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
<?php
foreach($this->tableSchema->columns as $column)
	echo "\t\t'".$column->name."',\n";
?>
	),
)); ?>
