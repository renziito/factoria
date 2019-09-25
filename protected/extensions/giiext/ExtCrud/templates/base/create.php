<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Crear',
);\n";
?>

?>

<h1>Crear <?php echo $this->modelClass; ?></h1>

<div class="container">
    <?= "<?php \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
</div>


