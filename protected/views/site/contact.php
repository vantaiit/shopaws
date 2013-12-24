<div id="page_wrap">
<div id="container">
<div class="content-wrap">
    <?php $this->renderPartial('//layouts/intro'); ?>
    <div class="container-2">
    <section class="content">
        <h3>View Our Map Location</h3>
        <div id="map_canvas"></div>
        <p>Ut vitae sapien nec sem lacinia euismod. Mauris quis mauris odio, a ultricies eros pharetra nisi facilisis. Fusce sagittis cursus risus, et hendrerit magna pellentesque vel. Mauris quis mauris odio, a ultricies eros pharetra nisi facilisis. Fusce sagittis cursus risus, et hendrerit magna pellentesque vel. Ut vitae sapien nec sem lacinia euismod. Mauris quis mauris odio, a ultricies eros pharetra nisi facilisis. Fusce sagittis cursus risus, et hendrerit magna pellentesque vel. Mauris quis mauris odio, a ultricies eros pharetra nisi facilisis. Fusce sagittis cursus risus, et hendrerit magna pellentesque vel.</p>
        <h3>Please use the form below to get in touch with us.</h3>
        <p>Upper Puerto, Cagayan de Oro CIty, Philippines<br><br>
            Tel: 012345678910<br>
            Fax: 012345678910<br>
            Email: <a href="mailto:info@domainname.com">info@domainname.com</a></p>
        <form action="javascript:alert('success!');" id="ajax-contact-form" class="contactForm">
            <div id="note"></div>
            <p>
                <input type="text" name="name" value="Your Name" onblur="if (this.value == ''){this.value = 'Your Name'; }" onfocus="if (this.value == 'Your Name') {this.value = '';}" >
                &nbsp;
                <input type="text" name="email" value="Your Email" onblur="if (this.value == ''){this.value = 'Your Email'; }" onfocus="if (this.value == 'Your Email') {this.value = '';}">
                &nbsp;
                <input type="text" name="website" value="Your Website" onblur="if (this.value == ''){this.value = 'Your Website'; }" onfocus="if (this.value == 'Your Website') {this.value = '';}">
            </p>
            <p>
                <textarea name="message" rows="10" cols="20" onblur="if (this.value == ''){this.value = 'Your Message'; }" onfocus="if (this.value == 'Your Message') {this.value = '';}">Your Message</textarea>
            </p>
            <p>
                <input type="submit" name="submit" class="submit" value="Send Message">
            </p>
        </form>
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
        </div><!--end:side-->
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
        </div><!--end:side-->
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
        </div><!--end:side-->
        <div class="side">
            <h4>Our Customer Love Us!</h4>
            <ul class="fade">
                <li class="feed">Easy shopping experience! Pricing is attractive! Lots of styles to choose from and great pics!<br>
                    <small><a href="#">&mdash; Louie Jie Mahusay</a></small>
                </li>
                <li class="feed">Easy shopping experience! Pricing is attractive! Lots of styles to choose from and great pics!<br>
                    <small><a href="#">&mdash; Louie Jie Mahusay</a></small>
                </li>
                <li class="feed">Easy shopping experience! Pricing is attractive! Lots of styles to choose from and great pics!<br>
                    <small><a href="#">&mdash; Louie Jie Mahusay</a></small>
                </li>
                <li class="feed">Easy shopping experience! Pricing is attractive! Lots of styles to choose from and great pics!<br>
                    <small><a href="#">&mdash; Louie Jie Mahusay</a></small>
                </li>
            </ul>
        </div>
    </aside>
</div><!--end:container-2-->
<!--GOOGLE MAP PLUGIN-->

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    function initialize() {
        var latlng = new google.maps.LatLng(8.48333, 124.65000);
        var settings = {
            zoom: 15,
            center: latlng,
            mapTypeControl: true,
            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
            navigationControl: true,
            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
            mapTypeId: google.maps.MapTypeId.ROADMAP};
        var map = new google.maps.Map(document.getElementById("map_canvas"), settings);

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var companyImage = new google.maps.MarkerImage('images/logo.png',
            new google.maps.Size(100,50),
            new google.maps.Point(0,0),
            new google.maps.Point(50,50)
        );

        var companyShadow = new google.maps.MarkerImage('../../../html5awesome.com/themeforest/shopymart/images/logo_shadow.html',
            new google.maps.Size(130,50),
            new google.maps.Point(0,0),
            new google.maps.Point(65, 50));

        var companyPos = new google.maps.LatLng(8.48333, 124.65000);

        var companyMarker = new google.maps.Marker({
            position: companyPos,
            map: map,
            icon: companyImage,
            shadow: companyShadow,
            title:"Høgenhaug",
            zIndex: 3});

        var trainImage = new google.maps.MarkerImage('../../../html5awesome.com/themeforest/shopymart/images/train.html',
            new google.maps.Size(50,50),
            new google.maps.Point(0,0),
            new google.maps.Point(50,50)
        );

        var trainShadow = new google.maps.MarkerImage('../../../html5awesome.com/themeforest/shopymart/images/train_shadow.html',
            new google.maps.Size(70,50),
            new google.maps.Point(0,0),
            new google.maps.Point(60, 50)
        );

        var trainPos = new google.maps.LatLng(57.0429, 9.9173);

        var trainMarker = new google.maps.Marker({
            position: trainPos,
            map: map,
            icon: trainImage,
            shadow: trainShadow,
            title:"Train Station",
            zIndex: 2
        });

        var parkingImage = new google.maps.MarkerImage('../../../html5awesome.com/themeforest/shopymart/images/parking.html',
            new google.maps.Size(50,50),
            new google.maps.Point(0,0),
            new google.maps.Point(50,50)
        );

        var parkingShadow = new google.maps.MarkerImage('../../../html5awesome.com/themeforest/shopymart/images/parking_shadow.html',
            new google.maps.Size(70,50),
            new google.maps.Point(0,0),
            new google.maps.Point(60, 50)
        );

        var parkingPos = new google.maps.LatLng(57.0437, 9.9147);

        var parkingMarker = new google.maps.Marker({
            position: parkingPos,
            map: map,
            icon: parkingImage,
            shadow: parkingShadow,
            title:"Parking Lot",
            zIndex: 1
        });

        google.maps.event.addListener(companyMarker, 'click', function() {
            infowindow.open(map,companyMarker);
        });
    }
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#ajax-contact-form").submit(function(){

            var str = $(this).serialize();

            $.ajax({
                type: "POST",
                url: "contact.php",
                data: str,
                success: function(msg){

                    $("#note").ajaxComplete(function(event, request, settings){

                        if(msg == 'OK') // Message Sent? Show the 'Thank You' message and hide the form
                        {
                            result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
                            $("#fields").hide();
                        }
                        else
                        {
                            result = '<ul class="error">'+msg+'</ul>';
                        }

                        $(this).html(result);

                    });

                }

            });

            return false;

        });

    });
</script>
</div>
</div>
</div>
