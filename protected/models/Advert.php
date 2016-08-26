<?php

/**
 * This is the model class for table "{{advert}}".
 *
 * The followings are the available columns in table '{{advert}}':
 * @property integer $id
 * @property string $created
 * @property integer $updated
 * @property integer $status
 * @property string $name
 * @property integer $category
 * @property integer $make
 * @property integer $model
 * @property integer $year
 * @property integer $price
 * @property integer $currency
 * @property integer $mileage
 * @property integer $region
 * @property integer $city
 * @property integer $user
 * @property string $description
 * @property string $phone
 * @property integer $published_to
 * @property string $link
 * @property AdvertPhoto[] $advertPhotos
 *
 * The followings are the available model relations:
 * @property User $user0
 * @property AdvertStatus $status0
 * @property AdvertCategory $category0
 * @property AdvertMake $make0
 * @property AdvertModel $model0
 * @property Currency $currency0
 * @property ParamValue[] $tblParamValues
 */
class Advert extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{advert}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created, name, user, description', 'required'),
			array('updated, status, category, make, model, year, price, currency, mileage, region, city, user, published_to', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			array('phone, link', 'length', 'max'=>127),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, created, updated, status, name, category, make, model, year, price, currency, mileage, region, city, user, description, phone, published_to, link', 'safe', 'on'=>'search'),
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
			'user0' => array(self::BELONGS_TO, 'User', 'user'),
			'status0' => array(self::BELONGS_TO, 'AdvertStatus', 'status'),
			'category0' => array(self::BELONGS_TO, 'AdvertCategory', 'category'),
			'make0' => array(self::BELONGS_TO, 'AdvertMake', 'make'),
			'model0' => array(self::BELONGS_TO, 'AdvertModel', 'model'),
			'currency0' => array(self::BELONGS_TO, 'Currency', 'currency'),
			'tblParamValues' => array(self::MANY_MANY, 'ParamValue', '{{advert_param}}(id_advert, id_value)'),
      'advertPhotos' => array(self::HAS_MANY, 'AdvertPhoto', 'id_advert'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => __('ID', 'advert'),
			'created' => __('Created', 'advert'),
			'updated' => __('Updated', 'advert'),
			'status' => __('Status', 'advert'),
			'name' => __('Name', 'advert'),
			'category' => __('Category', 'advert'),
			'make' => __('Make', 'advert'),
			'model' => __('Model', 'advert'),
			'year' => __('Year', 'advert'),
			'price' => __('Price', 'advert'),
			'currency' => __('Currency', 'advert'),
			'mileage' => __('Mileage', 'advert'),
			'region' => __('Region', 'advert'),
			'city' => __('City', 'advert'),
			'user' => __('User', 'advert'),
			'description' => __('Description', 'advert'),
			'phone' => __('Phone', 'advert'),
			'published_to' => __('Published To', 'advert'),
			'link' => __('Link', 'advert')
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
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated);
		$criteria->compare('status',$this->status);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('category',$this->category);
		$criteria->compare('make',$this->make);
		$criteria->compare('model',$this->model);
		$criteria->compare('year',$this->year);
		$criteria->compare('price',$this->price);
		$criteria->compare('currency',$this->currency);
		$criteria->compare('mileage',$this->mileage);
		$criteria->compare('region',$this->region);
		$criteria->compare('city',$this->city);
		$criteria->compare('user',$this->user);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('published_to',$this->published_to);
		$criteria->compare('link',$this->link,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Advert the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

  public function beforeSave()
  {
    $this->created = date('Y-m-d H:i:s', strtotime($this->created));
    return parent::beforeSave();
  }

  public function afterFind()
  {
    $return = parent::afterFind();
    $this->created = date('Y-m-d', strtotime($this->created));
    return $return;
  }

  public function makeUrl($action = 'edit'){
    /** @var CWebApplication $app */
    $app = Yii::app();
    switch($action) {
      case 'edit':
        $url =  $app->createUrl('adminAdvert/edit/'.$this->id);
        break;
      default :
        $url = $app->createUrl('adminAdvert/edit/'.$this->id);
    }
    return $url;
  }

  /**
   * @param string $type orig|thumb
   * @param null $href if need to make <a> tag
   * @return string
   */
  public function makeAdminThumb($href = null, $type = 'thumb' ) {
    if(empty($this->advertPhotos)) {
      return '';
    }
    if(empty($href)) {
      $href = $this->makeUrl('edit');
    }
    return $this->advertPhotos[0]->makeTag($type, $href, 'thumb');
  }



}
