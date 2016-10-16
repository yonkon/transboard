<?php

class AdminCategoryParamController extends AController
{
	public function actionAdd()
	{
    $category = new AdvertCategory();
    $name = $_REQUEST['name'];
    $description = $_REQUEST['description'];
    if(!empty(AdvertCategory::model()->find('name LIKE :name ', array(':name' => $name)))) {
      self::jsonAnswer('', self::STATUS_ERROR, __('Такая категория уже существует'));
      die();
    }
    $category->name = $name;
    $category->description = $description;
    $status = $category->save();
    if(empty($_REQUEST['ajax'])) {
      $this->render('add', array('category' => $category));
    } else {
      if($status) {
        self::jsonAnswer(array('id' => $category->id));
      } else {
        self::jsonAnswer('', self::STATUS_ERROR, CHtml::errorSummary($category));
      }
      die();
    }
	}

	public function actionDelete()
	{
		$this->render('delete');
	}

	public function actionEdit()
  {
    /** @var CWebApplication $app */
    $app = Yii::app();
    $category = $_REQUEST['id_category'];
    $param = $_REQUEST['id_param'];
    $enabled = $_REQUEST['enabled'];
    $ajax = $_REQUEST['ajax'];

    $cp = CategoryParam::model()->find('id_category = :category AND id_param = :param', array(':category' => $category, ':param' => $param));

    if(empty($cp)) {
      $cp = new CategoryParam();
    }

    $cp->id_param = $param;
    $cp->id_category = $category;
    $cp->enabled = intval($enabled == 'true');
    $status = $cp->save();

    if(empty($ajax) ) {
      if(!$status) {
        $app->user->setFlash('error', __('Не удалось сохранить изменения'));
      }
      $this->render('edit', array('category_param' => $cp));
    } else {
      if($status) {
        self::jsonAnswer();
      } else {
        self::jsonAnswer('', self::STATUS_ERROR, CHtml::errorSummary($cp));
      }
      die();
    }
  }

	public function actionList()
	{
		$this->render('list');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
