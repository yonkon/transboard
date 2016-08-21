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

    $model= Advert::model()->findByPk($id);
    if(empty($model)) {
      throw new CException(__('Объявление не найдено', 'error'));
    }
    $app->clientScript->registerCoreScript('jquery');
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
    $app->clientScript->registerScript('userAutocomplete',
      '$("#user_query").change(function(){
      var $this = $(this);
      var val = $this.val();
      $.ajax({
        url : "'. $app->createUrl('adminAdvert/users').'",
        data : {
          username : val
        },
        success : function(data){
          $("#user_select").html(data);
          $("#user_select").show();
          $this.hide();
          $("#user_select").unbind("change").change(function(){
            var $select = $(this);
            $("#user").val($select.val());
            $("#user_query").val($select.find("option:selected").text());
            $select.hide();
            $("#user_query").show();
          });
        }
      });
    });'
      ,
      CClientScript::POS_END);
    $allStatuses = AdvertStatus::model()->findAll();
    $advertStatuses = array();
    foreach($allStatuses as $as) {
      $arr = $as->getAttributes();
      $arr['selected'] = ($model->status == $as->id);
      $advertStatuses[$as['id']] = $arr ;
    }
    $this->render('edit',array('model'=>$model, 'advertStatuses' => $advertStatuses));
	}

	public function actionList()
	{
		$this->render('list');
	}

	public function actionNew()
	{
		$this->render('new');
	}

  public function actionUsers() {
    $users = User::model()->findAllByAttributes(
      array(),
      ' username LIKE :username ',
      array(':username' => '%'.$_REQUEST['username'].'%')
    );
//    $result = '';
//    foreach($users as $u) {
//    }
    $htmlopt = array();
    $data = CHtml::listData($users, 'id', 'username');
    $result = CHtml::listOptions(
      array(), $data , $htmlopt
    );

    echo $result;
    die();
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
}
