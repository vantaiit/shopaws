<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Shopy Mart - Responsive E-commerce Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/css/style.css" type="text/css" rel="stylesheet" media="screen" /> <!-- General style -->
    <link href="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/css/prettyPhoto.css" type="text/css" rel="stylesheet" media="screen"><!-- prettyPhoto -->
    <link href="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/css/tipsy.css" type="text/css" rel="stylesheet" media="screen"><!--tooltip-->
    <link href="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/css/camera.css" type="text/css" rel="stylesheet" media="screen"><!--camera-->
    <link href="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/css/jcarousel.css" type="text/css" rel="stylesheet" media="screen" /> <!-- list_work -->
    <link href="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/css/itemslider.css" type="text/css" rel="stylesheet" media="screen" /> <!-- list_work -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/js/jquery-1.8.2.min.js"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/js/css3-mediaqueries.js"></script><!--mediaqueries-->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/js/modernizr-1.7.min.js"></script><!--modernizr-->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/js/modernizr.custom.63321.js"></script><!--itemslider-modernizr-->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/js/jquery.prettyPhoto.js"></script><!-- prettyPhoto -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/js/jquery.tipsy.js"></script><!--tooltip-->
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/js/jquery.easing.1.3.js'></script> <!--camera slider-->
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/js/camera.min.js'></script> <!--camera slider-->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/js/jquery.jcarousel.min.js"> </script> <!-- list_work -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/js/jquery-hover-effect.js"></script><!--Image Hover Effect-->
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/js/jquery.hoverIntent.minified.js'></script><!--menu-->
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/js/jquery.dcmegamenu.1.3.3.js'></script><!--menu-->
    <script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/js/jquery.tweet.js"></script><!--twitter plugin-->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/js/jquery.quovolver.js"></script><!--blockquote-->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/js/jquery.catslider.js"></script><!--itemslider-->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/themes/shopymart/js/custom.js"></script><!--custom-->
    <!--MENU-->
    <script type="text/javascript">
        $(document).ready(function($){
            $('#mega-menu-3').dcMegaMenu({
                rowItems: '2',
                speed: 'fast',
                effect: 'fade'
            });
        });
    </script>
</head>

<body  onLoad="initialize()">
<div id="page_wrap">
<!--header.php-->
<?php $this->renderPartial('//layouts/header'); ?>
<div id="container">
<!--nav.php-->

    <?php $this->widget('Navigationwidget'); ?>


    <?php echo $content;?>

    <!--Footer.php-->
    <?php $this->renderPartial('//layouts/footer');?>

</div><!--end:container-->
</div><!--end:page_wrap-->

<script type="text/javascript">
    jQuery(function($){
        $(".tweet").tweet({
            join_text: "auto",
            username: "html5awesome",
            avatar_size: 48,
            count: 3,
            auto_join_text_default: " we said, ",
            auto_join_text_ed: " we ",
            auto_join_text_ing: " we were ",
            auto_join_text_reply: " we replied ",
            auto_join_text_url: " we were checking out ",
            loading_text: "loading tweets..."
        });
    });
</script>
<script type="text/javascript">(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "http://connect.facebook.net/en_US/all.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
