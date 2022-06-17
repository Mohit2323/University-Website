<?php
include('header.php');
?>
 <link rel="stylesheet" href="dist/css/lightbox.min.css">
 <div class="banner-area header-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title" style ="color:yellow; font-family:cursive; text-shadow:5px 5px 10px red; ">Gallery</h1>
                    <ul class="fund-breadcumb">
                        <li><a href="index.php">Home </a></li>
                        <li><a href="javascript:void(0)"></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	<!-- upper gallery-->
    <div class="main-content section-padding" style='padding-top:0px;padding-bottom:0px'>
    <section class="gallery-section section-padding all-text-white lazy" data-src="images/home/gallery-bg.jpg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2 class="section-title wow fadeInUpXsd" data-wow-duration=".7s" data-wow-delay=".1s">OUR <span class="base-color">GALLERY</span></h2>
                        <span class="section-sub-title wow fadeInUpXsd disinb" data-wow-duration=".9s" data-wow-delay=".1s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span>
                        <div class="section-heading-separator wow fadeInUpXsd" data-wow-duration="1.1s" data-wow-delay=".1s"></div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="text-center pdb35 wow fadeInUpXsd" data-wow-duration=".7s" data-wow-delay=".3s">
                        <ul class="list-inline filter-options">
							<li><a href="#!" class="filter-options__item active filter btn" data-filter=".all">Show All</a></li>
							<li><a href="#!" class="filter-options__item filter btn" data-filter=".charity">Charity</a></li>
                            <li><a href="#!" class="filter-options__item filter btn" data-filter=".children">Children</a></li>
							<li><a href="#!" class="filter-options__item filter btn" data-filter=".natureal">Natureal</a></li>
						</ul>
                    </div>
                </div>
            </div> -->
            <div class="row wow fadeInUpXsd" data-wow-duration=".7s" data-wow-delay=".3s">
                <div class="col-md-12">
                    <div class="row row-eq-height" id="mixitup-grid">
                    <?php 
                        $sql = "select * from tb_gallery where status='ACTIVE'";
                        $res = mysqli_query($conn,$sql) or die("Error to select in gallery".mysqli_error($conn));
                        while($row = mysqli_fetch_assoc($res))
                        {
                            $image_url = 'admin/uploads/'.$row['image_url'];
                    ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mix all charity natureal">
                            <a class="gallery-item pr  wow fadeInUpSmd" data-wow-duration="1.5s" data-wow-delay=".2s" href="<?php echo $image_url;?>" >
                                <img  data-src="<?php echo $image_url;?>" class="gallery-item__photo lazy" style='height:192px'  />
                                <div class="loader"></div>
                            </a><!--/.portfolio-item-->
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>			 
	</div>
    </div>					 
    </div>					 
								   
   <?php
   include('footer.php');
   ?>
   