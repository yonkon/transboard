<?php

class AdminAdvertController extends AController
{
	public function actionAdd()
	{
		$this->render('add');
	}

	public function actionEdit($id)
	{
    $app = Yii::app();
    if(empty($id)) {
      $this->redirect($app->createUrl('adminAdvert'));
    }
    $app = Yii::app();
    /**
     * @var $app CWebApplication
     * @var $model Advert
     */

    $model= Advert::model()->with('user0')->with('status0')->with('category0')->with('make0')->with('model0')->findByPk($id);
    if(empty($model)) {
      throw new CException(__('Объявление не найдено', 'error'));
    }
//    $app->clientScript->registerScript('autocomplete','   jQuery("#' . CHtml::activeId($model, "user") . '").autocomplete({"showAnim":"fold","source":"/user/ajaxGetUserList"});         ');

    // uncomment the following code to enable ajax-based validation
    /*
    if(isset($_POST['ajax']) && $_POST['ajax']==='advert-AdvertEdit-form')
    {
        echo CActiveForm::validate($model);
        Yii::app()->end();
    }
    */

    if(isset($_POST['Advert']))
    {
      $model->attributes=$_POST['Advert'];
      if($model->validate())
      {
        // form inputs are valid, do something here
        return;
      }
    }

//    $app->clientScript->registerScript('userAutocomplete',
//      '
//      selectAutocomplete("#user_query", "'. $app->createUrl('adminAdvert/users').'", "query", "#user_select", "#user");
//      '
//      ,
//      CClientScript::POS_END);
    $allStatuses = AdvertStatus::model()->findAll();
    $advertStatuses = array();
    foreach($allStatuses as $as) {
      $arr = $as->getAttributes();
      $advertStatuses[$as['id']] = $arr['name'] ;
    }
    $advertStatusesOptions = array($model->status => array('selected' => true));

    $allMakes = AdvertMake::model()->findAll();
    $makes = array();
    foreach($allMakes as $as) {
      $arr = $as->getAttributes();
      $makes[$as['id']] = $arr['name'] ;
    }
    $makesOptions = array($model->make => array('selected' => true));


    $allModels = AdvertModel::model()->findAll();
    $models = array();
    foreach($allModels as $as) {
      $arr = $as->getAttributes();
      $models[$as['id']] = $arr['name'] ;
    }
    $modelsOptions = array($model->model => array('selected' => true));

    $owner = $model->user0;
    $this->render('edit',array(
      'model'=>$model,
      'advertStatuses' => $advertStatuses,
//      'advertStatusesOptions' => $advertStatusesOptions,
      'makes' => $makes,
//      'makesOptions' => $makesOptions,
      'models' => $models,
      'owner' => $owner,
//      'modelsOptions' => $modelsOptions,
      ));
	}

	public function actionList()
	{
    $app = Yii::app();
    $app->clientScript->registerScript('tsort','   $(".table.list table").tablesorter(); ', CClientScript::POS_END);
    $items = Advert::model()->with('advertPhotos')->findAll();

		$this->render('list', array('items' => $items));
	}

	public function actionNew()
	{
		$this->render('new');
	}

  public function actionUsers() {
//    $users = User::model()->findAllByAttributes(
//      array(),
//      ' username LIKE :query OR email LIKE :query',
//      array(':query' => '%'.trim($_REQUEST['query']).'%')
//    );
//    $htmlopt = array();
//    $data = CHtml::listData($users, 'id', 'username');
//    $result = CHtml::listOptions(
//      array(), $data , $htmlopt
//    );
    $result = $this->autocomplete('User', array('username', 'email'), $_REQUEST['query'], 'id', 'username');
    echo $result;
    die();
  }

  public function actionMakes() {
    $query = $_REQUEST['query'];
    $category = $_REQUEST['category'];
    $makes = AdvertMake::model()->findAll(' name LIKE :name', array(':name' => "%{$query}%"));
    $this->renderPartial('partials/makes', array('makes' => $makes));
  }


public function actionPromotion()
	{
		$this->render('promotion');
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

  /*public function actions()
  {
    return array(
      'users'=>array(
        'class'=>'application.extensions.EAutoCompleteAction',
        'model'=>'User', //My model's class name
        'attribute'=>'username', //The attribute of the model i will search
      ),
    );
  }*/

  public function beforeAction($action)
  {
    $app = Yii::app();
    /** @var CWebApplication $app */
    $app->clientScript->registerCoreScript('jquery');

    $app->clientScript->registerScriptFile('/js/adminAdvert.js', CClientScript::POS_BEGIN);
    $app->clientScript->registerScriptFile('/js/tablesorter/jquery.tablesorter.js', CClientScript::POS_BEGIN);
    $app->clientScript->registerCssFile('/js/tablesorter/themes/blue/style.css');
    return parent::beforeAction($action);
  }

}
