<?php
include('header.php');
if(isset($_GET['blog']) && $_GET['blog']!=''){
    echo  $id = $_GET['blog'];
    $row = get_array('tb_blog',"blog_id='$id'");
    $blog_image = $row['image_url'];
?>
    <div class="banner-area banner-area--blog all-text-white text-center lazy" data-src="https://source.unsplash.com/weekly?water">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">LATEST BLOG</h1>
                    <ul class="fund-breadcumb">
                        <li><a href="index.html">Home</a> </li>
                        <li><a href=""><?php echo $row['blog_title'];?></a> </li>
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
                   
                    
                        <div class="col-sm-12 col-xs-12">
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
                                   
                                </div>
                            </div><!--/.blog-post-->
                        </div>
                        
                    </div>
                    
                </div>
               
                        </div>
                        </div>
                        </div>
<?php
include('footer.php');
}
else {
    redirectTO('blog.php');
}
?>