<?php
Yii::import('application.models.base.BaseProducts');

class Products extends BaseProducts
{
    /**
     * Returns the static model of the specified AR class.
     * @return CActiveRecord the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }


    public function rules()
    {
        return CMap::mergeArray(
            parent::rules(),
            array(

            )
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return CMap::mergeArray(
            parent::relations(),
            array(

            )
        );
    }

    /**
     * save created date or updated date
     * (non-PHPdoc)
     * @see CActiveRecord::beforeSave()
     */
    protected function beforeSave()
    {
        if (parent::beforeSave()) {

            return true;
        }
    }

    protected function beforeDelete()
    {
        AuthItem::model()->deleteAllByAttributes( array('type'=>$this->id) );

        return parent::beforeDelete();
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
        $criteria->compare('category_id',$this->category_id);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

}
