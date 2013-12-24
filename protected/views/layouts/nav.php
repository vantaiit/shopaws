<nav>
    <ul id="mega-menu-3" class="mega-menu">
        <?php foreach($parent as $child1){?>
            <li class="first">
                <a href="<?php echo Yii::app()->request->baseUrl;?>/category/<?php echo str_replace(' ','-',$child1->title); ?>"><?php echo $child1->title;?></a>
                <?php if($child1->child){ echo "<ul>"; foreach($child1->child as $child2){?>
                    <li>
                        <a href="<?php echo Yii::app()->request->baseUrl;?>/category/<?php echo str_replace(' ','-',$child2->title); ?>"><?php echo $child2->title;?></a>
                        <?php if($child2->child){ echo "<ul>"; foreach($child2->child as $child3){?>
                            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/category/<?php echo str_replace(' ','-',$child3->title); ?>"><?php echo $child3->title;?></a></li>
                        <?php } echo "</ul>" ;} ?>
                    </li>
                <?php } echo "</ul>" ;} ?>
            </li>
        <?php }?>
        <li class="first"><a href="<?php echo Yii::app()->request->baseUrl;?>/site/contact" >Contact</a></li>
    </ul>
</nav>
