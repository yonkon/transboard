<?php

/**
 * This is the model class for table "bff_regions".
 *
 * The followings are the available columns in table 'bff_regions':
 * @property string $id
 * @property string $country
 * @property string $pid
 * @property string $title_ru
 * @property string $title_uk
 * @property string $declension
 * @property string $keyword
 * @property string $ycoords
 * @property integer $enabled
 * @property integer $metro
 * @property integer $numlevel
 * @property string $num
 * @property string $main
 * @property string $geo_id
 * @property string $country_code
 * @property string $phone_code
 */
class Region extends CActiveRecord
{
  public static function getRegions($query)
  {
    return self::model()->findAll('pid = 1 AND title_ru LIKE :query', array(':query' => $query));
  }

  public static function getCities($query)
  {
    return self::model()->findAll('pid > 1 AND title_ru LIKE :query', array(':query' => $query));
  }

  /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bff_regions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pid, title_ru, title_uk, declension, keyword, num', 'required'),
			array('enabled, metro, numlevel', 'numerical', 'integerOnly'=>true),
			array('country, pid, num, main, geo_id', 'length', 'max'=>11),
			array('title_ru, title_uk', 'length', 'max'=>255),
			array('keyword', 'length', 'max'=>30),
			array('ycoords', 'length', 'max'=>20),
			array('country_code', 'length', 'max'=>2),
			array('phone_code', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, country, pid, title_ru, title_uk, declension, keyword, ycoords, enabled, metro, numlevel, num, main, geo_id, country_code, phone_code', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'country' => 'Country',
			'pid' => 'Pid',
			'title_ru' => 'Title Ru',
			'title_uk' => 'Title Uk',
			'declension' => 'Declension',
			'keyword' => 'Keyword',
			'ycoords' => 'Ycoords',
			'enabled' => 'Enabled',
			'metro' => 'Metro',
			'numlevel' => 'Numlevel',
			'num' => 'Num',
			'main' => 'Main',
			'geo_id' => 'Geo',
			'country_code' => 'Country Code',
			'phone_code' => 'Phone Code',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('pid',$this->pid,true);
		$criteria->compare('title_ru',$this->title_ru,true);
		$criteria->compare('title_uk',$this->title_uk,true);
		$criteria->compare('declension',$this->declension,true);
		$criteria->compare('keyword',$this->keyword,true);
		$criteria->compare('ycoords',$this->ycoords,true);
		$criteria->compare('enabled',$this->enabled);
		$criteria->compare('metro',$this->metro);
		$criteria->compare('numlevel',$this->numlevel);
		$criteria->compare('num',$this->num,true);
		$criteria->compare('main',$this->main,true);
		$criteria->compare('geo_id',$this->geo_id,true);
		$criteria->compare('country_code',$this->country_code,true);
		$criteria->compare('phone_code',$this->phone_code,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Region the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
