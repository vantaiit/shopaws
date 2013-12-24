<?php
/* @var $this ProductsController */
/* @var $data Products */
?>


<li class="da-thumbs">
    <div class="product-thumb-hover">
        <section class="left">
            <img src="<?php echo CHtml::encode(str_replace('L.','L.__SL160_.',$data->LargeImage)); ?>" alt="">
            <p class="sale">Sale</p>
            <article class="da-animate da-slideFromRight" style="display: block;">
                <h3><?php echo CHtml::encode($data->Title); ?></h3>
                <p>
                    <?php echo CHtml::link(null, $this->createAbsoluteUrl('products/detail/asin/'.$data->ASIN),array("class"=>"link tip", "title"=>"View Detail"));?>&nbsp;
                    <a href="cart.html" class="cart tip" title="Add to cart"></a>&nbsp;&nbsp;
                    <a href="<?php echo CHtml::encode($data->LargeImage); ?>" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a></p>
            </article>
        </section>
    </div>
    <section class="center">
        <h3><?php echo substr(CHtml::encode($data->Title),0,24);?>...</h3>
        <em>Category: <a href="#">Men's Dress</a></em>
    </section>
    <section class="right">
        <span class="price"><small>$320.00</small>&nbsp;&nbsp; $95.00</span>
        <ul class="menu-button">
            <li><a href="cart.html" class="cart tip" title="Add to Cart"></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/themes/shopymart/images/preview/work_1_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom"></a></li>
            <li><a href="wishlist.html" class="wishlist tip" title="Add to Wishlist"></a></li>
            <li><a href="compare.html" class="compare tip" title="Compare"></a></li>
            <li><a href="product-detail.html" class="link tip" title="View Detail"></a></li>
        </ul>
    </section>
</li>

