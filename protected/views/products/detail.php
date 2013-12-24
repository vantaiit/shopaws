<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Products',
);

$this->menu = array(
    array('label' => 'Create Products', 'url' => array('create')),
    array('label' => 'Manage Products', 'url' => array('admin')),
);
?>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/shopymart/css/jquery.jqzoom.css" type="text/css"
      rel="stylesheet" media="screen"><!--zoom-->
<script type='text/javascript'
        src="<?php echo Yii::app()->request->baseUrl; ?>/themes/shopymart/js/jquery.jqzoom-core.js"></script><!--image zoom-->
<script type="text/javascript"
        src="<?php echo Yii::app()->request->baseUrl; ?>/themes/shopymart/js/organictabs.jquery.js"></script><!--tabs-->
<div class="content-wrap">
    <div style="clear:both; display:block; height:20px"></div>
    <?php $this->renderPartial('//layouts/intro'); ?>
    <!--end:intro-->
    <div class="container-2">
        <div style="clear:both; display:block; height:40px"></div>
        <div class="prod">
            <div class="clearfix">
                <a href="<?php echo $product->LargeImage; ?>" class="jqzoom" rel='gal1' title="triumph">
                    <img class="img-detail" src="<?php echo $product->LargeImage; ?>" style="border: 4px solid #e5e5e5;">
                </a>
            </div>
            <div class="clearfix">
                <ul id="thumblist" class="clearfix">
                    <?php foreach (json_decode($product->ListImages) as $data) {
                        $smallimage = "{gallery: 'gal1', smallimage: '" . $data->LargeImage . "',largeimage: '" . $data->LargeImage . "'}";?>
                        <li><a href='javascript:void(0);' rel="<?php echo $smallimage; ?>">
                            <img height="50px" src='<?php echo $data->SmallImage; ?>'></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <style>
                .advice-quote-hist-seall {
                    display: none;
                }

                .img-detail {
                    max-width: 260px !important;
                }

                .jqzoom {
                    text-align: center;
                }

                .zoomPad {
                    float: none !important;
                }

                #specs li {
                    color: #E74A00 !important;
                }

                #details, #specs li {
                    font-size: 14px !important;
                    line-height: 22px;
                    color: #E74A00 !important;
                }

                #specs li {
                    margin-bottom: 6px;
                }

                .btn-amazon {
                    max-width: 250px;
                    margin-top: 10px;
                }

                .rating {
                    margin: 10px;
                }

            </style>
        </div>
        <!--end:prod-->
        <div class="prod-detail">
            <h2><?php echo $product->Title;?></h2>
            <span class="price"><p style="text-decoration: line-through;display: inline-block;margin-right: 11px;"><?php echo !empty($product->ListPrice) ? $product->ListPrice : ''; ?></p><?php echo !empty($product->LowestNewPrice) ? $product->LowestNewPrice : ''; ?></span>
            <a href="http://amazon.com/dp/<?php echo $product->ASIN; ?>/tag=abc-20">
                <img class="btn-amazon" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/shopymart/images/Amazon-Buy-Now-Button-300x68.jpg"></a>
            <div class="rating" style="float: right"><?php echo @file_get_contents('http://www.amazon.com/gp/customer-reviews/common/du/displayHistoPopAjax.html?&ASIN=' . $product->ASIN); ?></div>
            <span class="cart-button">
                <?php if (!empty($product->ListLink)) { ?>
                    <?php foreach (json_decode($product->ListLink) as $link) { ?>
                        <a href="<?php echo $link->URL; ?>"><?php echo $link->Description; ?></a>
                    <?php
                    }
                } ?>
            </span>
        </div>
        <!--prodetail-->
        <div id="tab">
            <ul class="nav">
                <li class="nav-one"><a href="#details" class="current">Details</a></li>
                <li class="nav-two"><a href="#specs">Feature</a></li>
                <li class="nav-four last"><a href="#tags">Tags</a></li>
            </ul>
            <div class="list-wrap">
                <div id="details">
                    <?php echo $product->Content; ?>
                </div>
                <ul id="specs" class="hide">
                    <?php foreach (json_decode($product->Feature) as $k => $Feature) { ?>
                        <li><span class="dropcap"><?php echo $k;?></span><?php echo $Feature; ?></li>
                    <?php } ?>
                </ul>
                <ul id="tags" class="hide">
                    <li><a href="#">Brand</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="relatedprod">
        <h1>Related Products</h1>
        <?php
        if ($products)
            foreach ($products as $item) { ?>
                <div class="entry">
                    <div class="da-thumbs">
                        <div class="div-related">
                            <img src="<?php echo str_replace('L.', 'L._SL160_.', $item->LargeImage); ?>" alt="">
                            <article class="da-animate da-slideFromRight" style="display: block;">
                                <p>
                                    <?php echo CHtml::link(null, $this->createAbsoluteUrl('products/detail/asin/' . $item->ASIN), array("class" => "link tip", "title" => "View Detail"));?>
                                    &nbsp;
                                    <a href="cart.html" class="cart tip" title="Add to cart"></a>&nbsp;&nbsp;
                                    <a href="<?php echo $item->LargeImage; ?>" rel="prettyPhoto[gallery1]"
                                       class="zoom tip" title="Zoom"></a></p>
                            </article>
                        </div>
                    </div>
                    <h3>
                        <a href="<?php echo $this->createAbsoluteUrl('products/detail/asin/' . $item->ASIN); ?>"><?php echo $item->Title;?></a>
                    </h3>
                    <span><p style="text-decoration: line-through;display: inline-block;margin-right: 11px;"><?php echo !empty($item->ListPrice) ? $item->ListPrice : ''; ?></p><?php echo !empty($item->LowestNewPrice) ? $item->LowestNewPrice : ''; ?></span>
                </div>
            <?php }?>
    </div>
    <!--end:container-2-->
    <div class="container-2">
        <div style="clear:both; display:block; height:40px"></div>
        <div class="ship">
            <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/shopymart/images/service-1.png" alt=""></a>
            <h4><a href="#">Free Shipping</a></h4>
            <span>On order over $1000</span>
        </div>
        <div class="subs">
            <h4>Sign up for our Newsletter</h4>
            <form action="#" method="post" class="subscribes">
                <fieldset>
                    <input type="text" name="subscribe" class="subscribe" value="Subscribe"
                           onBlur="if (this.value == ''){this.value = 'Subscribe'; }"
                           onFocus="if (this.value== 'Subscribe') {this.value = ''; }"/>
                    <input type="submit" name="submit" value="Submit" class="submit"/>
                </fieldset>
            </form>
        </div>
    </div>
    <!--end:container-2-->
</div><!--end:content-wrap-->

<script type="text/javascript">
    $(document).ready(function ($) {
        $('#mega-menu-3').dcMegaMenu({
            rowItems: '2',
            speed: 'fast',
            effect: 'fade'
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.jqzoom').jqzoom({
            zoomType: 'standard',
            preloadImages: false,
            zoomWidth: 400,
            zoomHeight: 400,
            alwaysOn: false
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#tab").organicTabs({
            "speed": 200
        });
    });
</script>
