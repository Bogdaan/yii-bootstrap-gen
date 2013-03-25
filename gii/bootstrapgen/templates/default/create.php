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
	'$label'=>array('index'),
	t('backend|Create'),
);\n";
?>

$this->menu=array(
	array('label'=>t('backend|List <?php echo $this->modelClass; ?>'),'url'=>array('index')),
	array('label'=>t('backend|Manage <?php echo $this->modelClass; ?>'),'url'=>array('admin')),
);
?>

<h1><?php echo "<?php echo t('backend|Create {$this->modelClass}'); ?>" ?></h1>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
