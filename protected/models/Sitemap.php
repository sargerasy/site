<?php

/**
 * This is the model class for table "tbl_sitemap".
 *
 * The followings are the available columns in table 'tbl_sitemap':
 * @property integer $id
 * @property string $name
 * @property string $path
 * @property integer $parent
 */
class Sitemap extends CActiveRecord
{

	private static $_cache = null;

	/**
	 * Returns the static model of the specified AR class.
	 * @return Sitemap the static model class
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
		return 'tbl_sitemap';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, path, parent', 'required'),
			array('parent', 'numerical', 'integerOnly'=>true),
			array('name, path', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, path, parent', 'safe', 'on'=>'search'),
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
			'path' => 'Path',
			'parent' => 'Parent',
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
		$criteria->compare('path',$this->path,true);
		$criteria->compare('parent',$this->parent);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}

	public static function loadAllSiteMap($force=false)
	{
		if (isset(self::$_cache) && !$force) {
			return self::$_cache;
		}

		$all = self::model()->findAll(array('order'=>'parent asc, id asc'));
		$ret = array();
		foreach($all as $item) {
			if (array_key_exists($item->parent, $ret)) {
				array_push($ret[$item->parent], $item);
			} else {
				$ret[$item->parent] = array($item);
			}
		}
		self::$_cache = $ret;
		return $ret;
	}

	public static function loadMain()
	{
		$sitemaps = self::loadAllSiteMap();
		return $sitemaps[0];
	}

	public static function getChildren($id)
	{
		$sitemaps = self::loadAllSiteMap();
		return $sitemaps[$id];
	}

	public static function getTreeViewData()
	{
		$data = self::loadAllSiteMap();
		$ret = array();
		$main = $data[0];
		foreach($main as $item) {
			$children = self::getChildren($item->id);
			$carray = array();
			if (isset($children)) {
				foreach($children as $child) {
					$carray[$child->name] = array(
						'text' => $child->name.":".$child->path,
					);
				}
			}
			$ret[$item->name] = array(
				'text' => "<span>{$item->name}</span>",
				'expanded' => false,
				'classes' => 'important',
				'children' => $carray
			);
		}
		return $ret;
	}

	public static function getSubMenus($path)
	{
		$data = self::loadAllSiteMap();
		$item = self::model()->findByAttributes(array('path'=>$path));
		if ((int)$item->parent === 0)
			return $data[$item->id];
		else
			return $data[$item->parent];
	}
}

