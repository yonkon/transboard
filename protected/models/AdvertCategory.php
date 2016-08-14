<?php

/**
 * This is the model class for table "{{advert_category}}".
 *
 * The followings are the available columns in table '{{advert_category}}':
 * @property integer $id
 * @property string $name
 * @property integer $enabled
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Advert[] $adverts
 * @property CategoryParam[] $categoryParams
 */
class AdvertCategory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{advert_category}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('enabled', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>127),
			array('description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, enabled, description', 'safe', 'on'=>'search'),
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
			'adverts' => array(self::HAS_MANY, 'Advert', 'category'),
			'categoryParams' => array(self::HAS_MANY, 'CategoryParam', 'category'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'enabled' => 'Enabled',
			'description' => 'Description',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('enabled',$this->enabled);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AdvertCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
