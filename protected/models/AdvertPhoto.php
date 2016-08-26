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
 * @property CUploadedFile $image
 * @property integer $position
 *
 * The followings are the available model relations:
 * @property Advert $idAdvert
 */
class AdvertPhoto extends CActiveRecord
{
  public $image;
   static $_upload_path = '/images/ad/';
   static $_thumb_path = '/images/ad/thumbs/';
   static $_upload_url = '/images/ad/';
   static $_thumb_url = '/images/ad/thumbs/';

  public static function _getOriginal_path() {
    return $_SERVER['DOCUMENT_ROOT'] . self::$_upload_path;
  }
  public static function _getThumb_path() {
    return $_SERVER['DOCUMENT_ROOT'] . self::$_thumb_path;
  }
  public static function _getThumb_url() {
    return  self::$_thumb_url ;
  }
  public static function _getOriginal_url() {
    return  self::$_upload_url;
  }
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
      //устанавливаем правила для файла, позволяющие загружать
      // только картинки!
      array('image', 'file', 'types'=>'jpg, gif, png'),
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

  public function makeTag($type = 'original', $href = null, $class = null, $id = null, $title=null ) {
    $class = if_empty($class, '', " class=\"$class\"");
    $id = if_empty($id, '', " id=\"$id\"");
    $title = if_empty($title, '', " title=\"$title\" alt=\"$title\" ");
    $src = $this->url;
    switch($type) {
      case 'orig':
        $src = $this->getOriginalUrl();
        break;
      case 'thumb' :
        $src = $this->getThumbUrl();
        break;
    }
    $tag = "<img src=\"{$src}\" {$id} {$class} {$title}>";
    if(!empty($href)) {
      $href = trim($href);
      $tag = "<a href='{$href}'>{$tag}</a>";
    }
    return $tag;
  }

  /**
   * @param CUploadedFile $image
   */
  public function fromUpload($image, $attributes)
  {
    $app = Yii::app();
    if(empty($image)) {
      $this->addError('image',__("Файл не загружен"));
    }
    if(empty($attributes['id_advert'])){
      $this->addError('id_advert',__("Не указано объявление"));
    }
    if($this->hasErrors()) {
      return;
    }
    $this->image = $image;
    if(!$this->validate(array('image'), false)) {
      return;
    }
    $advert = Advert::model()->findByPk($attributes['id_advert']);
    if(empty($advert)) {
      $this->addError('id_advert',__("Не найдено объявление"));
      return;
    }
    $this->title = $advert->name;
    $aid = $advert->id;
    $this->id_advert = $aid;
    $this->path = "{$aid}/";
    $dir = $this->_getOriginal_path() . $this->path;
    $dir_t = $this->_getThumb_path() . $this->path;
    $url  = "{$aid}/";
    $index = 1;
    if(is_dir($dir)) {
      $pre_index = 0;
      $photos = scandir($dir);
      foreach($photos as $f) {
        if($f == '.' ||$f == '..') {
          continue;
        }
        $pre_index = substr($f,0, strrpos($f,'.'));
        $pre_index = intval($pre_index)+1;
        if($index < $pre_index) {
          $index = $pre_index;
        }
      }

    } else {
      mkdir($dir, 0777, true);
    }
    if(!is_dir($dir_t)) {
      mkdir($dir_t, 0777, true);
    }
    $fname = "{$index}.". $image->getExtensionName();
    $path = $dir . $fname;
    $path_t = $dir_t . $fname;
    $url = $url . $fname;
    $this->path .= $fname;
    $this->url = $url;
    $this->image->saveAs($path);
    $thumb = new CImageHandler;
    $thumb->load($path);
    $thumb->adaptiveThumb($app->params['photos']['thumbs']['width'], $app->params['photos']['thumbs']['height']);
    $thumb->save($path_t);
  }

  public function getOriginalPath() {
    return self::_getOriginal_path() . $this->path;
  }

  public function getThumbPath() {
    return self::_getThumb_path() . $this->path;
  }

  public function getOriginalUrl() {
    return self::_getOriginal_url() . $this->url;
  }

  public function getThumbUrl() {
    return self::_getThumb_url() . $this->url;
  }

}
