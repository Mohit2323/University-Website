<?php

include('header.php');

?>
    <div class="banner-area header-bg " style ="background-image:url('https://source.unsplash.com/user/erondu/1600x900')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Blog</h1>
                    <ul class="fund-breadcumb">
                        <li><a href="index.php">Home </a></li>
                        <li><a class= "active" href="javascript:void(0)">Blog</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row row-eq-rs-height">
                    <?php 
                    $sql= "select * from tb_blog where status = 'ACTIVE'";
                    $res= mysqli_query($conn,$sql) or die ('Error to select blog'.mysqli_error($conn));
                    while($row = mysqli_fetch_assoc($res)) {
                        $blog_image = $row['image_url'];
                    ?>
                    
                        <div class="col-sm-4 col-xs-12">
                            <div class="blog-post">
                                <div class="blog-post__thumbnail-wrap pr">
                                    <img class="lazy" data-src="admin/uploads/<?php echo $blog_image;?>" alt="">
                                    <div class="loader"></div>
                                    <!-- <div class="blog-post__like-comment">
                                        <span><i class="fa fa-comments"></i>22 Comment</span>
                                        <span>|</span>
                                        <span><i class="fa fa-thumbs-up"></i>105 Likes</span>
                                    </div> -->
                                </div>
                                <div class="blog-post__text-content">
                                    <h4 class="blog-post__title heading-label-four"><a href="#"><?php echo $row['blog_title'];?></a></h4>
                                    <div class="blog-post__meta-info">
                                        <span class="small-text"><i class="fa fa-user base-color"></i>Admin</span>
                                        <span class="small-text"><i class="fa fa-calendar base-color"></i><?php echo date('d F',strtotime($row['created_at']));?></span>
                                    </div>
                                    <p><?php echo $row['blog_body'];?> </p>
                                    <a href="read_more.php?blog=<?php echo $row['blog_id'];?>" class="btn">Read More</a>
                                </div>
                            </div><!--/.blog-post-->
                        </div>
                        <?php }?>
                    </div>
                    <!-- <div class="fund-pagination mb30">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#" class="next">Next</a>
                    </div> -->
                </div>
               
                        </div>
                        </div>
                        </div>
<?php
include('footer.php');
        
?>