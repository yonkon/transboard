<?php
/**
 * Created by PhpStorm.
 * User: X-iLeR
 * Date: 21.08.2016
 * Time: 20:41
 */
class EAutoCompleteAction extends CAction
{
  public $model;
  public $attribute;
  private $results = array();

  public function run()
  {
    if(isset($this->model) && isset($this->attribute)) {
      $criteria = new CDbCriteria();
      $criteria->compare($this->attribute, $_GET['term'], true);
      $model = new $this->model;
      /**
       * @var $m CModel
       */
      $pk = $model->tableSchema->primaryKey;
      foreach($model->findAll($criteria) as $m)
      {
        $this->results[$m->$pk] = $m->{$this->attribute};
      }

    }
    echo CJSON::encode($this->results);
  }
}
