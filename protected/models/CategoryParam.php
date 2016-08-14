<?php

/**
 * This is the model class for table "{{category_param}}".
 *
 * The followings are the available columns in table '{{category_param}}':
 * @property integer $id
 * @property integer $category
 * @property string $name
 * @property integer $enabled
 * @property string $compare
 *
 * The followings are the available model relations:
 * @property AdvertCategory $category0
 * @property ParamValue[] $paramValues
 */
class CategoryParam extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{category_param}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category, name', 'required'),
			array('category, enabled', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>127),
			array('compare', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, category, name, enabled, compare', 'safe', 'on'=>'search'),
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
			'category0' => array(self::BELONGS_TO, 'AdvertCategory', 'category'),
			'paramValues' => array(self::HAS_MANY, 'ParamValue', 'param'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'category' => 'Category',
			'name' => 'Name',
			'enabled' => 'Enabled',
			'compare' => 'Compare',
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
		$criteria->compare('category',$this->category);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('enabled',$this->enabled);
		$criteria->compare('compare',$this->compare,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CategoryParam the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
