<!--Carousel banner-->
<div id="carousel" class="carousel slide hidden-xs hidden-sm" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
		<li data-target="#carousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="<?php echo base_url(); ?>assets/img/banners/banner_01.jpg" alt="banner_1" style="height:400px; width:100%;">
        </div>

        <div class="item">
            <img src="<?php echo base_url(); ?>assets/img/banners/banner_02.jpg" alt="banner_2" style="height:400px; width:100%;">
        </div>

        <div class="item">
            <img src="<?php echo base_url(); ?>assets/img/banners/banner_03.jpg" alt="banner_3" style="height:400px; width:100%;">
        </div>

        <div class="item">
            <img src="<?php echo base_url(); ?>assets/img/banners/banner_04.jpg" alt="banner_3" style="height:400px; width:100%;">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#carousel" data-slide="prev">
        <!--span class="glyphicon glyphicon-chevron-left"></span-->
        <!--span class="sr-only">Previous</span-->
    </a>
    <a class="right carousel-control" href="#carousel" data-slide="next">
        <!--span class="glyphicon glyphicon-chevron-right"></span-->
        <!--span-- class="sr-only">Next</span-->
    </a>
</div>
