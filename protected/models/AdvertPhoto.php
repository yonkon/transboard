<?php

/**
 * This is the model class for table "{{advert_photo}}".
 *
 * The followings are the available columns in table '{{advert_photo}}':
 * @property integer $id
 * @property integer $id_advert
 * @property integer $enabled
 * @property string $title
 * @property string $url
 * @property string $path
 * @property integer $position
 *
 * The followings are the available model relations:
 * @property Advert $idAdvert
 */
class AdvertPhoto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{advert_photo}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_advert, url, path', 'required'),
			array('id_advert, enabled, position', 'numerical', 'integerOnly'=>true),
			array('title', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_advert, enabled, title, url, path, position', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idAdvert' => array(self::BELONGS_TO, 'Advert', 'id_advert'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_advert' => 'Id Advert',
			'enabled' => 'Enabled',
			'title' => 'Title',
			'url' => 'Url',
			'path' => 'Path',
			'position' => 'Position',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_advert',$this->id_advert);
		$criteria->compare('enabled',$this->enabled);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('position',$this->position);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AdvertPhoto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

  public function makeTag($href = null, $class = null, $id = null, $title=null ) {
    $class = if_empty($class, '', " class=\"$class\"");
    $id = if_empty($id, '', " id=\"$id\"");
    $title = if_empty($title, '', " title=\"$title\" alt=\"$title\" ");
    $tag = "<img {$id} {$class} {$title}>";
    if(!empty($href)) {
      $href = urlencode(trim($href));
      $tag = "<a href='{$href}'>{$tag}</a>";
    }
    return $tag;
  }

}
