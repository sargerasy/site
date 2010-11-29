<?php

/**
 * This is the model class for table "tbl_page".
 *
 * The followings are the available columns in table 'tbl_page':
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $path
 * @property string $content
 * @property string $keywords
 * @property string $description
 */
class Page extends CActiveRecord
{

	const TYPE_NOMAL=0;
	const TYPE_SHOW=1;
	/**
	 * Returns the static model of the specified AR class.
	 * @return Page the static model class
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
		return 'tbl_page';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, title, path, content, type', 'required'),
			array('name, title, path, layout, view', 'length', 'max'=>128),
			array('keywords, description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, title, path, content, keywords, description, type, layout, view', 'safe', 'on'=>'search'),
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
			'images' => array(self::HAS_MANY, 'ImageShow', 'page_id'),
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
			'title' => 'Title',
			'path' => 'Path',
			'content' => 'Content',
			'keywords' => 'Keywords',
			'description' => 'Description',
			'type' => 'Type',
			'layout' => 'Layout',
			'view' => 'View',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}

	public function getTypeOptions()
	{
		return array(
			self::TYPE_NOMAL => 'normal',
			self::TYPE_SHOW => 'show',
		);
	}

	public function getTypeText()
	{
		$options = $this->typeOptions;
		return isset($options[$this->type]) ?
			$options[$this->type] : "unknown status ({$this->type})";
	}
}
