<?php

class AdminAdvertController extends AController
{
  public function actionAdd()
  {
    $app = Yii::app();
    /**
     * @var $app CWebApplication
     * @var $model Advert
     */

    $model= new Advert;

//    $app->clientScript->registerScript('autocomplete','   jQuery("#' . CHtml::activeId($model, "user") . '").autocomplete({"showAnim":"fold","source":"/user/ajaxGetUserList"});         ');


    if(isset($_POST['Advert']))
    {
      $model->attributes=$_POST['Advert'];
      if($model->validate())
      {
        if($model->save()) {
          // form inputs are valid, do something here
          $this->redirect($app->createUrl('adminAdvert/edit/'.$model->id) );
          return;
        }
        throw new CException('Не удалось сохранить обїявление');
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


    $allMakes = AdvertMake::model()->findAll();
    $makes = array();
    foreach($allMakes as $as) {
      $arr = $as->getAttributes();
      $makes[$as['id']] = $arr['name'] ;
    }

    $allModels = AdvertModel::model()->findAll();
    $models = array();
    foreach($allModels as $as) {
      $arr = $as->getAttributes();
      $models[$as['id']] = $arr['name'] ;
    }

    $allCurrencies = Currency::model()->findAll();
    $currencies = array();
    foreach($allCurrencies as $as) {
      $arr = $as->getAttributes();
      $currencies[$as['id']] = $arr['name'] ;
    }

    $owner = $model->user0;
    $this->render('add',array(
        'model'=>$model,
        'advertStatuses' => $advertStatuses,
        'makes' => $makes,
        'models' => $models,
        'owner' => $owner,
        'allCurrencies' => $currencies,
    ));
  }

  public function actionEdit($id)
  {
    $app = Yii::app();
    if(empty($id)) {
      $this->redirect($app->createUrl('adminAdvert'));
    }
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
        $model->save();
        // form inputs are valid, do something here
//                return;
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

    $allCurrencies = Currency::model()->findAll();
    $currencies = array();
    foreach($allCurrencies as $as) {
      $arr = $as->getAttributes();
      $currencies[$as['id']] = $arr['name'] ;
    }
    $currenciesOptions = array($model->currency => array('selected' => true));

    $allRegions = Region::getRegions('%%');
    $regions = array();
    foreach($allRegions as $as) {
      $arr = $as->getAttributes();
      $regions[$as['id']] = $arr['title_ru'] ;
    }
    $regionsOptions = array($model->region => array('selected' => true));

    $allCities = Region::getCities('%%');
    $region_to_city = array();
    $city_to_region = array();
    $regions_db = array();
    $cities_db = array();
    $cities = array();
    foreach($allCities as $as) {
      $arr = $as->getAttributes();
      $cities[$arr['id']] = $arr['title_ru'] ;
      $region_to_city[$as->pid][$as->id] = $as->id;
      $city_to_region[$as->id] = $as->pid;
    }

    $citiesOptions = array($model->region => array('selected' => true));


    $owner = $model->user0;
    $this->render('edit',array(
        'model'=>$model,
        'advertStatuses' => $advertStatuses,
        'advertStatusesOptions' => $advertStatusesOptions,
        'makes' => $makes,
        'makesOptions' => $makesOptions,
        'models' => $models,
        'owner' => $owner,

        'allCurrencies' => $currencies,
        'currenciesOptions' => $currenciesOptions,
        'modelsOptions' => $modelsOptions,

        'allRegions' => $regions,
        'regionsOptions' => $regionsOptions,

        'allCities' => $cities,
        'citiesOptions' => $citiesOptions,
        'region_to_city' => $region_to_city,
        'city_to_region' => $city_to_region,
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

  public function actionCategories() {
    $query = $_REQUEST['query'];
    $categories = AdvertCategory::model()->findAll(' name LIKE :name', array(':name' => "%{$query}%"));
    $this->renderPartial('partials/categories', array('categories' => $categories));
  }

  public function actionMakes() {
    $query = $_REQUEST['query'];
    $category = $_REQUEST['category'];
    //TODO разобраться с категориями
    if((int)$category > 1) {
      $makes = AdvertMake::model()->findAll('name LIKE :name AND category = :category', array(':name' => $query, ':category' => (int)$category) );
    } else {
      $category = 1;
      $makes = AdvertMake::model()->findAll(' name LIKE :name', array(':name' => "%{$query}%"));
    }
    $this->renderPartial('partials/makes', array('makes' => $makes, 'category' => $category));
  }

  public function actionModels() {
    $query = $_REQUEST['query'];
    $make = $_REQUEST['make'];
    $models = AdvertModel::model()->findAll(' name LIKE :name AND make = :make', array(
        ':name' => "%{$query}%",
        ':make' => $make));
    $this->renderPartial('partials/models', array('models' => $models, 'make' => $make));
  }

  public function actionRegions() {
    $query = $_REQUEST['query'];
    $regions = Region::getRegions($query);
    $this->renderPartial('partials/regions', array('regions' => $regions));
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
