<?php

/**
 * This is the model class for table "{{param_value}}".
 *
 * The followings are the available columns in table '{{param_value}}':
 * @property integer $id
 * @property integer $param
 * @property string $string
 * @property integer $number
 *
 * The followings are the available model relations:
 * @property Advert[] $tblAdverts
 * @property CategoryParam $param0
 */
class ParamValue extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{param_value}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('param, string, number', 'required'),
			array('param, number', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, param, string, number', 'safe', 'on'=>'search'),
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
			'tblAdverts' => array(self::MANY_MANY, 'Advert', '{{advert_param}}(id_value, id_advert)'),
			'param0' => array(self::BELONGS_TO, 'CategoryParam', 'param'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'param' => 'Param',
			'string' => 'String',
			'number' => 'Number',
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
		$criteria->compare('param',$this->param);
		$criteria->compare('string',$this->string,true);
		$criteria->compare('number',$this->number);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ParamValue the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
