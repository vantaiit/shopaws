<?php
Yii::import('application.models.base.BaseCategory');
class Category extends BaseCategory
{
    /**
     * Returns the static model of the specified AR class.
     * @return CActiveRecord the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }


    public function rules()
    {
        return CMap::mergeArray(
            parent::rules(),
            array()
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
                'child'=>array(self::HAS_MANY , 'Category', 'Parent_id')
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
        AuthItem::model()->deleteAllByAttributes(array('type' => $this->id));

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

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('parent_id', $this->parent_id);
        $criteria->compare('status', $this->status);
        $criteria->compare('hot', $this->hot);
        $criteria->compare('temp_id', $this->temp_id);
        $criteria->compare('image', $this->image, true);
        $criteria->compare('top', $this->top);
        $criteria->compare('order', $this->order);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}
