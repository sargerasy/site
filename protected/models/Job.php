<?php

/**
 * This is the model class for table "tbl_job".
 *
 * The followings are the available columns in table 'tbl_job':
 * @property integer $id
 * @property string $name
 * @property integer $sex
 * @property string $age
 * @property string $education
 * @property string $work_age
 * @property string $profession
 * @property string $description
 * @property string $create_date
 */
class Job extends CActiveRecord
{
	const SEX_MALE = 0;
	const SEX_FEMALE = 1;
	const SEX_NOCARE = 2;
	/**
	 * Returns the static model of the specified AR class.
	 * @return Job the static model class
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
		return 'tbl_job';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, sex, age, education, work_age, profession, description, create_date', 'required'),
			array('sex', 'numerical', 'integerOnly'=>true),
			array('name, age, education, work_age, profession', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, sex, age, education, work_age, profession, description, create_date', 'safe', 'on'=>'search'),
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
			'sex' => 'Sex',
			'age' => 'Age',
			'education' => 'Education',
			'work_age' => 'Work Age',
			'profession' => 'Profession',
			'description' => 'Description',
			'create_date' => 'Create Date',
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
		$criteria->compare('sex',$this->sex);
		$criteria->compare('age',$this->age,true);
		$criteria->compare('education',$this->education,true);
		$criteria->compare('work_age',$this->work_age,true);
		$criteria->compare('profession',$this->profession,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('create_date',$this->create_date,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}

	public static function getSexOptions()
	{
		return array(
			self::SEX_MALE => 'Male',
			self::SEX_FEMALE => 'Female',
			self::SEX_NOCARE => 'No Care',
		);
	}

	public static function getSexText($job)
	{
		$options = self::getSexOptions();
		return $options[$job->sex];
	}
}
