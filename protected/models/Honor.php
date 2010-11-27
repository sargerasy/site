<?php

/**
 * This is the model class for table "tbl_honor".
 *
 * The followings are the available columns in table 'tbl_honor':
 * @property integer $id
 * @property string $name
 * @property string $year
 * @property string $image
 * @property string $simage
 */
class Honor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Honor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_honor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, year, image, simage', 'required'),
			array('name', 'length', 'max'=>128),
			array('year', 'length', 'max'=>20),
			array('image, simage', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, year, image, simage', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'year' => 'Year',
			'image' => 'Image',
			'simage' => 'Simage',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('simage',$this->simage,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}

	public static function getYears()
	{
		$years = Honor::model()->findAll(array('group'=>'year', 'order'=>'year asc'));
		$ret = array();
		foreach($years as $year)
			$ret[] = $year->year;
		return $ret;
	}
}
