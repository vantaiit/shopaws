<header>
    <div id="top2">
    </div><!--end:top2-->
    <div id="top3">
        <h1 class="logo"><a href="<?php echo Yii::app()->request->baseUrl;?>">Shopy Mart</a></h1>
        <form action="#" method="post" class="search_bar">
            <fieldset>
                <input type="text" name="search" class="search" value="Enter a keywords..." onBlur="if (this.value == ''){this.value = 'Enter a keywords...'; }" onFocus="if (this.value== 'Enter a keywords...') {this.value = ''; }" />
                <input type="submit" name="submit" value="Search" class="submit" />
            </fieldset>
        </form>
    </div><!--end:top3-->
</header>
