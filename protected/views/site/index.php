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
<div class="container-2">
    <div class="content-wrap">
        <section class="content">
            <div class="relatedprod">
                <h1>Related Products</h1>
                <ul id="products" class="clearfix grid">

                    <?php if ($topproducts)
                        foreach ($topproducts as $item) {
                            ?>
                            <li class="da-thumbs">
                                <div class="product-thumb-hover">
                                    <section class="left">
                                        <img src="<?php echo str_replace('L.', 'L._SL160_.', $item->LargeImage); ?>"
                                             alt="">

                                        <p class="sale">Sale</p>
                                        <article class="da-animate da-slideFromBottom" style="display: block;">
                                            <h3>American Dress</h3>

                                            <p>
                                                <?php echo CHtml::link(null, $this->createAbsoluteUrl('products/detail/asin/' . $item->ASIN), array("class" => "link tip", "title" => "View Detail"));?>
                                                &nbsp;
                                                <a href="cart.html" class="cart tip" title="Add to cart"></a>&nbsp;&nbsp;
                                                <a href="<?php echo $item->LargeImage; ?>" rel="prettyPhoto[gallery1]"
                                                   class="zoom tip" title="Zoom"></a>
                                            </p>
                                        </article>
                                    </section>
                                </div>
                                <section class="center">
                                    <h3>
                                        <a href="<?php echo $this->createAbsoluteUrl('products/detail/asin/' . $item->ASIN); ?>"> <?php echo substr($item->Title, 0, 20);?></a>
                                        ...</a></h3>
                                    <em>Category: <a href="#">Men's Dress</a></em>
                                </section>
                                <section class="right">
                                    <span class="price"><p style="text-decoration: line-through;display: inline-block;margin-right: 11px;"><?php echo !empty($item->ListPrice) ? $item->ListPrice : ''; ?></p><?php echo !empty($item->LowestNewPrice) ? $item->LowestNewPrice : ''; ?></span>
                                    <ul class="menu-button">
                                        <li><a href="cart.html" class="cart tip" original-title="Add to Cart"></a></li>
                                        <li><a href="images/preview/work_1_l.jpg" rel="prettyPhoto[gallery1]"
                                               class="zoom tip" original-title="Zoom"></a></li>
                                        <li><a href="wishlist.html" class="wishlist tip"
                                               original-title="Add to Wishlist"></a></li>
                                        <li><a href="compare.html" class="compare tip" original-title="Compare"></a>
                                        </li>
                                        <li><a href="product-detail.html" class="link tip"
                                               original-title="View Detail"></a>
                                        </li>
                                    </ul>
                                </section>
                            </li>

                        <?php }?>

                </ul>
            </div>
        </section>
        <aside class="sidebar">
            <div class="side">
                <h4>Category</h4>
                <ul class="cat">
                    <li><a href="#">Women's Clothes</a></li>
                    <li><a href="#">Men's Clothes</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Men's Shoes</a></li>
                    <li><a href="#">Women's Shoes</a></li>
                </ul>
            </div>
            <!--end:side-->
            <div class="side">
                <h4>Bestsellers</h4>

                <div class="entry">
                    <div class="da-thumbs">
                        <div>
                            <img src="images/products/thumb-1.jpg" alt="">
                            <article class="da-animate da-slideFromRight" style="display: block;">
                                <p><a href="product-detail.html" class="link"></a></p>
                            </article>
                        </div>
                    </div>
                    <h3><a href="product-detail.html">Athletic Shoes</a></h3>
                    <small>$59.95</small>
                </div>
                <div class="entry">
                    <div class="da-thumbs">
                        <div>
                            <img src="images/products/thumb-2.jpg" alt="">
                            <article class="da-animate da-slideFromRight" style="display: block;">
                                <p><a href="product-detail.html" class="link"></a></p>
                            </article>
                        </div>
                    </div>
                    <h3><a href="product-detail.html">Athletic Shoes</a></h3>
                    <small>$59.95</small>
                </div>
            </div>
            <!--end:side-->
            <div class="side">
                <h4>Recent Blog</h4>

                <div class="entry">
                    <div class="da-thumbs">
                        <div>
                            <img src="images/products/thumb-1.jpg" alt="">
                            <article class="da-animate da-slideFromRight" style="display: block;">
                                <p><a href="blog.html" class="link"></a></p>
                            </article>
                        </div>
                    </div>
                    <h3><a href="blog.html">Pellentesque habitant morbi..</a></h3>
                    <span><a href="blog.html">Posted on:02/28/13</a></span>
                </div>
                <div class="entry">
                    <div class="da-thumbs">
                        <div>
                            <img src="images/products/thumb-2.jpg" alt="">
                            <article class="da-animate da-slideFromRight" style="display: block;">
                                <p><a href="blog.html" class="link"></a></p>
                            </article>
                        </div>
                    </div>
                    <h3><a href="blog.html">Pellentesque habitant morbi ...</a></h3>
                    <span><a href="blog.html">Posted on:02/28/13</a></span>
                </div>
            </div>
            <!--end:side-->
            <div class="side">
                <h4>Our Customer Love Us!</h4>
                <ul class="fade">
                    <div id="quote_wrap" style="height: 73px;">
                        <li class="feed" style="display: none;">Easy shopping experience! Pricing is attractive! Lots of
                            styles to choose from and great pics!<br>
                            <small><a href="#">— Louie Jie Mahusay</a></small>
                        </li>
                        <li class="feed" style="display: none;">Easy shopping experience! Pricing is attractive! Lots of
                            styles to choose from and great pics!<br>
                            <small><a href="#">— Louie Jie Mahusay</a></small>
                        </li>
                        <li class="feed" style="display: none;">Easy shopping experience! Pricing is attractive! Lots of
                            styles to choose from and great pics!<br>
                            <small><a href="#">— Louie Jie Mahusay</a></small>
                        </li>
                        <li class="feed" style="display: block;">Easy shopping experience! Pricing is attractive! Lots
                            of styles to choose from and great pics!<br>
                            <small><a href="#">— Louie Jie Mahusay</a></small>
                        </li>
                    </div>
                </ul>
            </div>
        </aside>
    </div>

</div>
