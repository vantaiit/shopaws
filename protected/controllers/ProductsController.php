<?php

class ProductsController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/fullwidth';

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view', 'getasin', 'detail'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }


    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new Products;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Products'])) {
            $model->attributes = $_POST['Products'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->ASIN));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Products'])) {
            $model->attributes = $_POST['Products'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->ASIN));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Products',
            array(
                'pagination' => array(
                    'pageSize' => 10,
                ),
            )
        );
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Products('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Products']))
            $model->attributes = $_GET['Products'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Products the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = Products::model()->findByPk($id);
        if ($model === null)
            return false;
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Products $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'products-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionView()
    {
        $asin = Yii::app()->request->getQuery('asin');
        if (!empty($asin)) {
            try {
                $amazonproduct = new AmazonProductAPI(Yii::app()->params['amz_serect_key']['public_key'], Yii::app()->params['amz_serect_key']['private_key'], Yii::app()->params['amz_serect_key']['site'], Yii::app()->params['amz_serect_key']['affiliate_id']);
                $result = $amazonproduct->getItemByAsin($asin);
                echo "<pre>";
//                var_dump($result); die();
                $item = $result->Items->Item;
                $product = new Products;
                $product->ASIN = $item->ASIN;
                $k = 0;
                foreach ($item->ImageSets->ImageSet as $img) {
                    $arr_img[$k]['SwatchImage'] = (string)$img->SwatchImage->URL;
                    $arr_img[$k]['SmallImage'] = (string)$img->SmallImage->URL;
                    $arr_img[$k]['ThumbnailImage'] = (string)$img->ThumbnailImage->URL;
                    $arr_img[$k]['TinyImage'] = (string)$img->TinyImage->URL;
                    $arr_img[$k]['MediumImage'] = (string)$img->MediumImage->URL;
                    $arr_img[$k]['LargeImage'] = (string)$img->LargeImage->URL;
                    $k++;
                }
                $arr_ItemLink = array();
                $t = 0;
                foreach ($item->ItemLinks->ItemLink as $ItemLink) {

                    $arr_ItemLink[$t]['Description'] = (string)$ItemLink->Description;
                    $arr_ItemLink[$t]['URL'] = (string)$ItemLink->URL;
                    $t++;
                }
                $product->LowestNewPrice = @(string)$item->OfferSummary->LowestNewPrice->FormattedPrice;
                $product->ListImages = json_encode($arr_img);
                $product->Feature = json_encode($item->ItemAttributes->Feature);
                $product->Brand = @$item->ItemAttributes->Brand;
                $product->Manufacturer = @$item->ItemAttributes->Manufacturer;
                $product->Model = @$item->ItemAttributes->Model;
                $product->ListLink = json_encode($arr_ItemLink);
                $product->Binding = @$item->ItemAttributes->Binding;
                $product->ProductGroup = @$item->ItemAttributes->ProductGroup;
                $product->ProductTypeName = @$item->ItemAttributes->ProductTypeName;
                $product->Brand = @$item->ItemAttributes->Brand;
                $product->Content = @$item->EditorialReviews->EditorialReview->Content;
                $product->Title = @$item->ItemAttributes->Title;
                $product->LargeImage = $item->LargeImage->URL;
                $product->ListPrice = (string)$item->ItemAttributes->ListPrice->FormattedPrice;
                $product->Status = 1;


                if ($product->validate() && $product->save()) {
                    $this->redirect($this->createAbsoluteUrl('products/detail/asin/' . $asin));
                } else {
                    $this->redirect($this->createAbsoluteUrl('products/detail/asin/' . $asin));
                }
            } catch (Exception $e) {
                $this->redirect($this->createAbsoluteUrl('products/detail/asin/' . $asin));
            }
        }
    }

    public function actionDetail()
    {
        $asin = Yii::app()->request->getQuery('asin');
        $product = $this->loadModel($asin);
        $amazonproduct = new AmazonProductAPI(Yii::app()->params['amz_serect_key']['public_key'], Yii::app()->params['amz_serect_key']['private_key'], Yii::app()->params['amz_serect_key']['site'], Yii::app()->params['amz_serect_key']['affiliate_id']);
        if (!$product) {
            $result = $amazonproduct->getItemByAsin($asin);
            $item = $result->Items->Item;

//          insert category

            $cat = Category::model()->findByAttributes(array('title'=>@$item->ItemAttributes->ProductGroup));
            if(!$cat){
                $cat = new Category;
                $cat->title = @$item->ItemAttributes->ProductGroup;
                $cat->parent_id = 0;
                $cat->order = 0;
                $cat->status = 1;
                $cat->url = strtolower(str_replace(' ','-',@$item->ItemAttributes->ProductGroup));
                $cat->save();
            }
            $product = new Products;
            $product->ASIN = $item->ASIN;
            $k = 0;
            foreach ($item->ImageSets->ImageSet as $img) {
                $arr_img[$k]['SwatchImage'] = (string)$img->SwatchImage->URL;
                $arr_img[$k]['SmallImage'] = (string)$img->SmallImage->URL;
                $arr_img[$k]['ThumbnailImage'] = (string)$img->ThumbnailImage->URL;
                $arr_img[$k]['TinyImage'] = (string)$img->TinyImage->URL;
                $arr_img[$k]['MediumImage'] = (string)$img->MediumImage->URL;
                $arr_img[$k]['LargeImage'] = (string)$img->LargeImage->URL;
                $k++;
            }
            $arr_ItemLink = array();
            $t = 0;
            foreach ($item->ItemLinks->ItemLink as $ItemLink) {

                $arr_ItemLink[$t]['Description'] = (string)$ItemLink->Description;
                $arr_ItemLink[$t]['URL'] = (string)$ItemLink->URL;
                $t++;
            }
            $product->LowestNewPrice = @(string)$item->OfferSummary->LowestNewPrice->FormattedPrice;
            $product->ListImages = json_encode($arr_img);
            $product->Feature = json_encode($item->ItemAttributes->Feature);
            $product->Brand = @$item->ItemAttributes->Brand;
            $product->Manufacturer = @$item->ItemAttributes->Manufacturer;
            $product->Model = @$item->ItemAttributes->Model;
            $product->ListLink = json_encode($arr_ItemLink);
            $product->Binding = @$item->ItemAttributes->Binding;
            $product->ProductGroup = @$item->ItemAttributes->ProductGroup;
            $product->ProductTypeName = @$item->ItemAttributes->ProductTypeName;
            $product->Brand = @$item->ItemAttributes->Brand;
            $product->Content = @$item->EditorialReviews->EditorialReview->Content;
            $product->Title = @$item->ItemAttributes->Title;
            $product->LargeImage = $item->LargeImage->URL;
            $product->ListPrice = (string)$item->ItemAttributes->ListPrice->FormattedPrice;
            $product->Status = 1;
            $product->category_id = (int)$cat->id;
            $product->CreateBy = 1;
            $product->CountView = 1;
            $product->Created = time();
            $product->Rating = @file_get_contents('http://www.amazon.com/gp/customer-reviews/common/du/displayHistoPopAjax.html?&ASIN=' . $product->ASIN);


            if ($product->validate() && $product->save()) {

            }else{
                echo "loi";
            }
        }else{
            $product->CountView = $product->CountView+1;
            $product->save();
        }
        $similar = array(
            'Operation' => 'SimilarityLookup',
            'ItemId' => $asin,
            'Condition' => 'All',
            'ResponseGroup' => 'Medium'
        );

        $orther = $amazonproduct->queryAmazon($similar);
        $arr_asin = array();
        $products = null;

        try{
            foreach ($orther->Items->Item as $item) {
                @$this->getproduct($item);
                $arr_asin[] = $item->ASIN;
            }
            $products = Products::model()->findAllByAttributes(array('ASIN'=>$arr_asin));
        }catch (Exception $e){

        }
        $this->render('detail', array(
            'product' => $product,
            'products' => $products,
        ));

    }

    public function getproduct($item)
    {

        if (!$this->loadModel($item->ASIN)) {
            $cat = Category::model()->findByAttributes(array('title'=>@$item->ItemAttributes->ProductGroup));
            if(!$cat){
                $cat = new Category;
                $cat->title = @$item->ItemAttributes->ProductGroup;
                $cat->parent_id = 0;
                $cat->order = 0;
                $cat->status = 1;
                $cat->url = strtolower(str_replace(' ','-',@$item->ItemAttributes->ProductGroup));
                $cat->save();
            }

            $product = new Products;
            $product->ASIN = $item->ASIN;
            $k = 0;
            foreach ($item->ImageSets->ImageSet as $img) {
                $arr_img[$k]['SwatchImage'] = (string)$img->SwatchImage->URL;
                $arr_img[$k]['SmallImage'] = (string)$img->SmallImage->URL;
                $arr_img[$k]['ThumbnailImage'] = (string)$img->ThumbnailImage->URL;
                $arr_img[$k]['TinyImage'] = (string)$img->TinyImage->URL;
                $arr_img[$k]['MediumImage'] = (string)$img->MediumImage->URL;
                $arr_img[$k]['LargeImage'] = (string)$img->LargeImage->URL;
                $k++;
            }
            $arr_ItemLink = array();
            $t = 0;
            foreach ($item->ItemLinks->ItemLink as $ItemLink) {

                $arr_ItemLink[$t]['Description'] = (string)$ItemLink->Description;
                $arr_ItemLink[$t]['URL'] = (string)$ItemLink->URL;
                $t++;
            }
            $product->LowestNewPrice = @(string)$item->OfferSummary->LowestNewPrice->FormattedPrice;
            $product->ListImages = json_encode($arr_img);
            $product->Feature = json_encode($item->ItemAttributes->Feature);
            $product->Brand = @$item->ItemAttributes->Brand;
            $product->Manufacturer = @$item->ItemAttributes->Manufacturer;
            $product->Model = @$item->ItemAttributes->Model;
            $product->ListLink = json_encode($arr_ItemLink);
            $product->Binding = @$item->ItemAttributes->Binding;
            $product->ProductGroup = @$item->ItemAttributes->ProductGroup;
            $product->ProductTypeName = @$item->ItemAttributes->ProductTypeName;
            $product->Brand = @$item->ItemAttributes->Brand;
            $product->Content = @$item->EditorialReviews->EditorialReview->Content;
            $product->Title = @$item->ItemAttributes->Title;
            $product->LargeImage = $item->LargeImage->URL;
            $product->ListPrice = (string)$item->ItemAttributes->ListPrice->FormattedPrice;
            $product->Status = 1;
            $product->category_id = (int)$cat->id;
            $product->CreateBy = 1;
            $product->Created = time();
            $product->Best_seller = 1;
            $product->Rating = @file_get_contents('http://www.amazon.com/gp/customer-reviews/common/du/displayHistoPopAjax.html?&ASIN=' . $product->ASIN);
            if ($product->validate() && $product->save()) {
                return true;
            }
        } else {
            return false;
        }
    }

}
