<?php
/**
 * BootstrapGenerator class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

Yii::import('gii.generators.crud.CrudGenerator');

class BootstrapgenGenerator extends CrudGenerator
{
	public $codeModel = 'bootstrapgen.gii.bootstrapgen.BootstrapgenCode';
    
    /*
    public function actionIndex()
    {
        $model=$this->prepare();
        if($model->files!=array() && isset($_POST['generate'], $_POST['answers']))
        {
            $model->answers=$_POST['answers'];
            $model->status=$model->save() ? CCodeModel::STATUS_SUCCESS : CCodeModel::STATUS_ERROR;
        }

        $this->render('index',array(
            'model'=>$model,
        ));
    }


    protected function prepare()
    {
        if($this->codeModel===null)
            throw new CException(get_class($this).'.codeModel property must be specified.');
        $modelClass=Yii::import($this->codeModel,true);
        $model=new $modelClass;
        $model->loadStickyAttributes();
        if(isset($_POST[$modelClass]))
        {
            $model->attributes=$_POST[$modelClass];
            $model->status=CCodeModel::STATUS_PREVIEW;
            if($model->validate())
            {
                $model->saveStickyAttributes();
                $model->prepare();
            }
        }
        return $model;
    }
    */

}