<?php

/**
 * This is the model class for table "products".
 *
 * The followings are the available columns in table 'products':
 * @property string $ASIN
 * @property string $Title
 * @property string $Content
 * @property string $ProductGroup
 * @property string $ProductTypeName
 * @property string $LowestNewPrice
 * @property string $Feature
 * @property string $ListPrice
 * @property string $LargeImage
 * @property string $ListImages
 * @property string $ListLink
 * @property string $Binding
 * @property string $Brand
 * @property string $Manufacturer
 * @property string $Model
 * @property integer $CountView
 * @property integer $Created
 * @property integer $CreateBy
 * @property integer $Status
 * @property integer $category_id
 * @property integer $Best_seller
 * @property integer $Rating
 */
class BaseProducts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ASIN, Title, Content, Rating', 'required'),
			array('CountView, Created, CreateBy, Status,Best_seller,category_id', 'numerical', 'integerOnly'=>true),
			array('ASIN', 'length', 'max'=>20),
			array('Title, LargeImage', 'length', 'max'=>256),
			array('ProductGroup, ProductTypeName, Binding, Brand, Manufacturer, Model', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ASIN, Title, Content, ProductGroup, ProductTypeName, LowestNewPrice, Feature, ListPrice, LargeImage, ListImages, ListLink, Binding, Brand, Manufacturer, Model, CountView, Created, CreateBy, Status, Best_seller, Rating', 'safe', 'on'=>'search'),
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
			'ASIN' => 'Asin',
			'Title' => 'Title',
			'Content' => 'Content',
			'ProductGroup' => 'Product Group',
			'ProductTypeName' => 'Product Type Name',
			'LowestNewPrice' => 'Lowest New Price',
			'Feature' => 'Feature',
			'ListPrice' => 'List Price',
			'LargeImage' => 'Large Image',
			'ListLink' => 'List Link',
			'ListImages' => 'List Images',
			'Binding' => 'Binding',
			'Brand' => 'Brand',
			'Manufacturer' => 'Manufacturer',
			'Model' => 'Model',
			'CountView' => 'Count View',
			'Created' => 'Created',
			'CreateBy' => 'Create By',
			'Status' => 'Status',
			'category_id' => 'category_id',
            'Best_seller' => 'Best Seller',
            'Rating' => 'Rating',
		);
	}

}
