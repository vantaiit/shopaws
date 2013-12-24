<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Products',
);
$this->menu=array(
    array('label'=>'Create Products', 'url'=>array('create')),
    array('label'=>'Manage Products', 'url'=>array('admin')),
);
?>
<div class="content-wrap">
    <?php // $this->renderPartial('//layouts/featured');?>
    <?php $this->renderPartial('//layouts/intro');?>
    <div class="container-2">
        <section class="content">
            <div class="list_work">

                <h4>Featured Products</h4>
                <ul id="products" class="grid clearfix">
                    <?php
                    $this->widget('zii.widgets.CListView', array(
                        'dataProvider'=>$dataProvider,
                        'itemView'=>'_view',
                        'summaryText' => '',
                        'pager'=>array(
                            'header'=>'',
                            'class'=>'CLinkPager',
                            'selectedPageCssClass' => 'current',
                            'firstPageLabel'=>'<i class="fa fa-angle-double-left">First</i>',
                            'prevPageLabel'=>'<i class="fa fa-angle-left">Prev</i>',
                            'nextPageLabel'=>'<i class="fa fa-angle-right">Next</i>',
                            'lastPageLabel'=>'<i class="fa fa-angle-double-right">Last</i>',

                            'htmlOptions' => array(
                                'id'=>"pagination"
                            )

                        ),
                    ));
                    ?>

                </ul>
            </div>
            <!--end:list_work-->
        </section>
        <aside class="sidebar">
            <div class="side">
                <h4>Bestsellers</h4>

                <div class="entry">
                    <div class="da-thumbs">
                        <div>
                            <img
                                src="<?php echo Yii::app()->request->baseUrl; ?>/themes/shopymart/images/products/thumb-1.jpg"
                                alt="">
                            <article class="da-animate da-slideFromRight" style="display: block;">
                                <p><a href="product-detail.html" class="link"></a></p>
                            </article>
                        </div>
                    </div>
                    <h3><a href="product-detail.html">Athletic Shoes</a></h3>
                    <small>$59.95</small>
                </div>
            </div>
        </aside>
    </div>
    <!--end:container-2-->
</div>
