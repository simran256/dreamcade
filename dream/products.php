<?php
include"header.php";

$url=$_GET['alias'];
$cat = mysqli_fetch_assoc(mysqli_query($conn,"select id,ct_pd_name,cat_pd_hv_image from cat_prod where ct_pd_url='$url'"));
$cat_id = $cat['id'];
$cat_name = $cat['ct_pd_name'];
$image2=explode(",",$cat['cat_pd_hv_image']);
?>

    <!--breadcrumb section start-->
    <div class="breadcrumb-section pt-40 pb-40" data-background="<?=$site?>assets/images/shapes/breadcrumb-bg.jpg">
        <div class="container">
            <p class="breadcrumb-text fw-light mb-0"><a href="<?=$site?>">Home</a>/<span class="primary-text-color"><?php echo $cat['ct_pd_name']; ?></span></p>
        </div>
    </div>
    <!--breadcrumb section end-->

    <!--shop section start-->
    <section class="shop-section bg-white ptb-120">
        <div class="container">
            <div class="row g-4">
                <!--<div class="col-xl-4 order-2 order-xl-1">-->
                <!--    <div class="shop-sidebar pe-xl-5 mt-5 mt-xl-0">-->
                <!--        <div class="sidebar-widget search-widget">-->
                <!--            <form>-->
                <!--                <input type="text" placeholder="Search Here..." class="theme-input fw-light">-->
                <!--            </form>-->
                <!--        </div>-->
                <!--        <div class="sidebar-widget categories-widget mt-60">-->
                <!--            <h4 class="widget-title position-relative fw-normal mb-5">Categories</h4>-->
                <!--            <ul class="sidebar-check-fields">-->
                <!--                <li><label><input type="checkbox"> <span>Anklets</span></label></li>-->
                <!--                <li><label><input type="checkbox"> <span>Bracelets</span></label></li>-->
                <!--                <li><label><input type="checkbox"> <span>Pendants</span></label></li>-->
                <!--                <li><label><input type="checkbox"> <span>Earrings</span></label></li>-->
                <!--                <li><label><input type="checkbox"> <span>Gift Card</span></label></li>-->
                <!--                <li><label><input type="checkbox"> <span>Neaklaces</span></label></li>-->
                <!--                <li><label><input type="checkbox"> <span>Personalized</span></label></li>-->
                <!--                <li><label><input type="checkbox"> <span>Rings</span></label></li>-->
                <!--            </ul>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-xl-12">
                    <div class="shop-grid">
                        <div class="products-grid mt-40">
                            <div class="row g-4">
                                
                                
 <?php
$query2 = mysqli_query($conn, "select id, ct_pd_name, cat_pd_image, ct_pd_url from cat_prod where sub_category_id='$cat_id' ");
$num = mysqli_num_rows($query2);
if ($num > 0) {
    while ($sql5 = mysqli_fetch_assoc($query2)) {
     $pro_image = explode(",",$sql5['cat_pd_image']);   
     $id = $sql5['id'];
?>                                 
                                <div class="col-lg-3 col-md-3">
                                    <div class="ur-product-card position-relative card-sm-small">
                                        
                                        <div class="feature-image d-flex align-items-cneter justify-content-center  position-relative">
                                            <a href="<?=$site?>product-details/<?=$sql5['ct_pd_url']?>"><img src="<?=$site ?>admin/uploads/product/cat_pd_image/<?php echo $pro_image[0]; ?>" alt="rings" class="img-fluid"></a>
                                            
                                        </div>
                                        <div class="mt-4">
                                            <a href="<?=$site?>product-details/<?=$sql5['ct_pd_url']?>"><h5 class="my-2 fw-medium product-title"><?php echo $sql5['ct_pd_name']; ?></h5></a>
                                        </div>
                                    </div>
                                </div>
 <?php 
    }
}
?>           
                                     
                            </div>
                        </div>
                        <!--<div class="text-center mt-60">-->
                        <!--    <ul class="template-pagination d-inline-flex align-items-center gap-3">-->
                        <!--        <li><a href="#" class="active">01</a></li>-->
                        <!--        <li><a href="#">02</a></li>-->
                        <!--        <li><a href="#">03</a></li>-->
                        <!--        <li><a href="#">04</a></li>-->
                        <!--        <li><a href="#"><i class="fa-solid fa-angles-right"></i></a></li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shop section end-->

    <!--newsletter section start-->
    <section class="newsletter-section light-bg ptb-120 position-relative z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="newsletter-box text-center">
                        <span class="fs-sm fw-light secondary-text-color">GET OUR NEWSLETTER</span>
                        <h2 class="fw-normal mt-4 mb-50">Get News & Update to Your Inbox</h2>
                        <form class="newsletter-form d-flex align-items-center">
                            <input type="email" placeholder=" Email address...">
                            <button type="submit" class="template-btn primary-btn"><span>Subscribe</span></button>
                        </form>
                        <p class="mb-0 mt-32 fw-light">Will be used accordance with our <a href="#" class="text-decoration-underline primary-text-color hover-secondary">Privacy Policy</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--newsletter section end-->

    <!--footer section start-->
   <?php include 'footer.php'; ?>