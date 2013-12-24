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
 * @property integer $LowestNewPrice
 * @property string $Feature
 * @property integer $ListPrice
 * @property string $LargeImage
 * @property string $ListImages
 * @property string $Binding
 * @property string $Brand
 * @property string $Manufacturer
 * @property string $Model
 * @property integer $CountView
 * @property integer $Created
 * @property integer $CreateBy
 * @property integer $Status
 */
class Products extends CActiveRecord
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
			array('ASIN, Title, Content, ProductGroup, ProductTypeName, LowestNewPrice, Feature, ListPrice, LargeImage, ListImages, Binding, Brand, Manufacturer, Model, CountView, Created, CreateBy, Status', 'required'),
			array('LowestNewPrice, ListPrice, CountView, Created, CreateBy, Status', 'numerical', 'integerOnly'=>true),
			array('ASIN', 'length', 'max'=>20),
			array('Title, LargeImage', 'length', 'max'=>256),
			array('ProductGroup, ProductTypeName, Binding, Brand, Manufacturer, Model', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ASIN, Title, Content, ProductGroup, ProductTypeName, LowestNewPrice, Feature, ListPrice, LargeImage, ListImages, Binding, Brand, Manufacturer, Model, CountView, Created, CreateBy, Status', 'safe', 'on'=>'search'),
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
			'ListImages' => 'List Images',
			'Binding' => 'Binding',
			'Brand' => 'Brand',
			'Manufacturer' => 'Manufacturer',
			'Model' => 'Model',
			'CountView' => 'Count View',
			'Created' => 'Created',
			'CreateBy' => 'Create By',
			'Status' => 'Status',
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

		$criteria->compare('ASIN',$this->ASIN,true);
		$criteria->compare('Title',$this->Title,true);
		$criteria->compare('Content',$this->Content,true);
		$criteria->compare('ProductGroup',$this->ProductGroup,true);
		$criteria->compare('ProductTypeName',$this->ProductTypeName,true);
		$criteria->compare('LowestNewPrice',$this->LowestNewPrice);
		$criteria->compare('Feature',$this->Feature,true);
		$criteria->compare('ListPrice',$this->ListPrice);
		$criteria->compare('LargeImage',$this->LargeImage,true);
		$criteria->compare('ListImages',$this->ListImages,true);
		$criteria->compare('Binding',$this->Binding,true);
		$criteria->compare('Brand',$this->Brand,true);
		$criteria->compare('Manufacturer',$this->Manufacturer,true);
		$criteria->compare('Model',$this->Model,true);
		$criteria->compare('CountView',$this->CountView);
		$criteria->compare('Created',$this->Created);
		$criteria->compare('CreateBy',$this->CreateBy);
		$criteria->compare('Status',$this->Status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Products the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
